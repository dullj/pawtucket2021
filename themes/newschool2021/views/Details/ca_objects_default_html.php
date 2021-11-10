<?php
/* ----------------------------------------------------------------------
 * themes/default/views/bundles/ca_objects_default_html.php : 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2013-2018 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 *
 * This source code is free and modifiable under the terms of 
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */
 
	$t_object = 			$this->getVar("item");
	$va_comments = 			$this->getVar("comments");
	$va_tags = 				$this->getVar("tags_array");
	$vn_comments_enabled = 	$this->getVar("commentsEnabled");
	$vn_share_enabled = 	$this->getVar("shareEnabled");
	$vn_pdf_enabled = 		$this->getVar("pdfEnabled");
	$vn_id =				$t_object->get('ca_objects.object_id');
?>
<div class="row">
	<div class='col-xs-12 navTop'><!--- only shown at small screen size -->
		{{{previousLink}}}{{{resultsLink}}}{{{nextLink}}}
	</div><!-- end detailTop -->
	<div class='navLeftRight col-xs-1 col-sm-1 col-md-1 col-lg-1'>
		<div class="detailNavBgLeft">
			{{{previousLink}}}{{{resultsLink}}}
		</div><!-- end detailNavBgLeft -->
	</div><!-- end col -->
	<div class='col-xs-12 col-sm-10 col-md-10 col-lg-10'>
		<div class="container"><div class="row">
			<div class='col-sm-6 col-md-6 col-lg-5 col-lg-offset-1'>
				{{{representationViewer}}}
				
				<div id="detailAnnotations"></div>
				
				<?php print caObjectRepresentationThumbnails($this->request, $this->getVar("representation_id"), $t_object, array("returnAs" => "bsCols", "linkTo" => "carousel", "bsColClasses" => "smallpadding col-sm-3 col-md-3 col-xs-4", "primaryOnly" => $this->getVar('representationViewerPrimaryOnly') ? 1 : 0)); ?>
				
<?php
				# Comment and Share Tools
				if ($vn_comments_enabled | $vn_share_enabled | $vn_pdf_enabled) {
						
					print '<div id="detailTools">';
					if ($vn_comments_enabled) {
?>				
						<div class="detailTool"><a href='#' onclick='jQuery("#detailComments").slideToggle(); return false;'><span class="glyphicon glyphicon-comment"></span>Comments and Tags (<?php print sizeof($va_comments) + sizeof($va_tags); ?>)</a></div><!-- end detailTool -->
						<div id='detailComments'><?php print $this->getVar("itemComments");?></div><!-- end itemComments -->
<?php				
					}
					if ($vn_share_enabled) {
						print '<div class="detailTool"><span class="glyphicon glyphicon-share-alt"></span>'.$this->getVar("shareLink").'</div><!-- end detailTool -->';
					}
					if ($vn_pdf_enabled) {
						print "<div class='detailTool' style='margin-bottom:20px;'><span class='glyphicon glyphicon-file'></span>".caDetailLink($this->request, "Download Catalog Record", "faDownload", "ca_objects",  $vn_id, array('view' => 'pdf', 'export_format' => '_pdf_ca_objects_summary'))."</div>";
					}
					print '</div><!-- end detailTools -->';
				}				

?>

			</div><!-- end col -->
			
			<div class='col-sm-6 col-md-6 col-lg-5' id="object-headers">
				
				<h6>Object Title</h6>
				<h4>{{{<ifdef code="ca_objects.preferred_labels.name">^ca_objects.preferred_labels.name<br/></ifdef>}}}

				<H6>Part of</H6>
				<h4>Collection: {{{<unit unique="1" relativeTo="ca_collections" delimiter=" ➔ Series: "><l>^ca_collections.preferred_labels.name</l></unit>}}}</h4>

				
				<hr></hr>
					<div class="row" id="object-headers">
						<div class="col-sm-12">	
							<h6>Type of Work</h6>
							{{{<unit>^ca_objects.type_id</unit>}}}
							
							{{{<ifdef code="ca_objects.descriptionSet.descriptionText"><H6>Description</H6>^ca_objects.descriptionSet.descriptionText<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.pbcoreDescription.pBdescription_text"><H6>Description</H6>^ca_objects.pbcoreDescription.pBdescription_text<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.pbcoreDescription.pBdescription_text%[pbcore_description_types=abstract]"><H6>Abstract</H6>^ca_objects.pbcoreDescription.pBdescription_text%[pbcore_description_types=abstract]<br/></ifdef>}}}
							
							{{{<ifdef code="ca_objects.dateSet.setDisplayValue"><H6>Date</H6>^ca_objects.dateSet.setDisplayValue<br/></ifdef>}}}

							{{{<ifcount code="ca_entities" min="1" max="1"><H6>Related person</H6></ifcount>}}}
							{{{<ifcount code="ca_entities" min="2"><H6>Related people</H6></ifcount>}}}
							{{{<unit relativeTo="ca_objects_x_entities" delimiter="<br/>"><unit relativeTo="ca_entities"><l>^ca_entities.preferred_labels</l></unit> (^relationship_typename)</unit>}}}
							
							{{{<ifdef code="ca_objects.wtDrawings"><H6>Work Type</H6>^ca_objects.wtDrawings<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtPhotographic"><H6>Work Type</H6>^ca_objects.wtPhotographic<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtPosters"><H6>Work Type</H6>^ca_objects.wtPosters<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtClippings"><H6>Work Type</H6>^ca_objects.wtClippings<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtPlans"><H6>Work Type</H6>^ca_objects.wtPlans<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtCourse"><H6>Work Type</H6>^ca_objects.wtCourse<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtExhibition"><H6>Work Type</H6>^ca_objects.wtExhibition<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtBooks"><H6>Work Type</H6>^ca_objects.wtBooks<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtPeriodicals"><H6>Work Type</H6>^ca_objects.wtPeriodicals<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtScores "><H6>Work Type</H6>^ca_objects.wtScores<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtScrapbooks"><H6>Work Type</H6>^ca_objects.wtScrapbooks<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtPhotoAlbums"><H6>Work Type</H6>^ca_objects.wtPhotoAlbums<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtSketchbooks"><H6>Work Type</H6>^ca_objects.wtSketchbooks<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtTextual"><H6>Work Type</H6>^ca_objects.wtTextual<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtProofs"><H6>Work Type</H6>^ca_objects.wtProofs<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtThree"><H6>Work Type</H6>^ca_objects.wtThree<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtOther"><H6>Work Type</H6>^ca_objects.wtOther<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtDigitalaudio"><H6>Work Type</H6>^ca_objects.wtDigitalaudio<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wt_digitalmovingimage"><H6>Work Type</H6>^ca_objects.wt_digitalmovingimage<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtPhysFilm"><H6>Work Type</H6>^ca_objects.wtPhysFilm<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wt_physicalaudio"><H6>Work Type</H6>^ca_objects.wt_physicalaudio<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wt_physicalvideo"><H6>Work Type</H6>^ca_objects.wt_physicalvideo<br/></ifdef>}}}
							
							
					
							{{{<ifdef code="ca_objects.measurementSet.measurements"><H6>Measurements</H6>^ca_objects.measurementSet.measurements <ifdef code="ca_objects.measurementSet.measurementsType">(^ca_objects.measurementSet.measurementsType)</ifdef></ifdef><ifdef code="ca_objects.measurementSet.measurements"> x </ifdef><ifdef code="ca_objects.measurementSet.measurements2">^ca_objects.measurementSet.measurements2 <ifdef code="ca_objects.measurementSet.measurementsType2">(^ca_objects.measurementSet.measurementsType2)</ifdef></ifdef>}}}
							
							{{{<ifdef code="ca_objects.inscriptionSet.inscriptionText"><H6>Inscription</H6></ifdef>}}}
{{{<unit relativeTo="ca_objects" delimiter="<br/>">^ca_objects.inscriptionSet.inscriptionText (^ca_objects.inscriptionSet.inscriptionType)</unit>}}}
					
							{{{<ifdef code="ca_objects.pbcoreLanguage"><H6>Language</H6>^ca_objects.pbcoreLanguage<br/></ifdef>}}}
							
							{{{<ifcount code="ca_list_items" min="1" max="1"><H6>Related Repository</H6></ifcount>}}}
							
							{{{<ifcount code="ca_objects.object_genres" min="1" max="1"><H6>Related Subject</H6></ifcount>}}}
							
							{{{<ifdef code="ca_objects.object_genres"><H6>Subject (Genres)</H6>^ca_objects.object_genres<br/></ifdef>}}}
							
<?php
    if (is_array($terms = $t_object->get('ca_list_items.preferred_labels.name_plural', ['returnAsArray' => true])) && sizeof($terms)) {
        foreach($terms as $term) {
            print caNavLink($this->request, $term, '', '', 'Search', 'objects', ['search' => $term])."<br/>\n";
        }
    }
?>
														
							{{{<ifdef code="ca_objects.repositories"><H6>Collection Guides</H6>^ca_objects.repositories<br/></ifdef>}}}
														
							{{{<h6>Use Restrictions</h6><ifcount code="ca_collections" min="1" max="2"><unit relativeTo="ca_collections">^ca_collections.CollectionNote.NoteContent%[NoteType=conditions_governing_use]</unit></ifcount>}}}
							
							{{{<ifdef code="ca_objects.containerID"><H6>Location</H6>^ca_objects.containerID<br/></ifdef>}}}

							{{{<ifdef code="ca_objects.idno"><H6>Identifier</H6>^ca_objects.idno<br/></ifdef>}}}
							
							{{{<ifcount code="ca_objects.related" min="1">
							<div class="row"><div class="col-sm-12"><H6>Related Objects</H6><div class="row rowSmallPadding"><unit relativeTo="ca_objects.related" delimiter=" "><div class="col-xs-4 col-md-2 smallpadding"><div class="detailRelObject"><l>^ca_object_representations.media.icon</l></div><!--end detailRelObject--></div><!--end col--></unit></div><!-- end row --></div><!-- end col --></div><!-- end row -->
							</ifcount>}}}
							
															
							<hr></hr>
							<div class="row">
							<div class="col-sm-12">	
								<p>There’s more! What you see on this site is only what is viewable online. Please visit <a href="https://archives.newschool.edu/">our website</a> to find out more about what’s in the archives. </p>
							</div>
					</div><!-- end row -->
							
						</div><!-- end col -->				
						<div class="col-sm-6 colBorderLeft">
							{{{map}}}
						</div>
					</div><!-- end row -->
						
			</div><!-- end col -->
		</div><!-- end row --></div><!-- end container -->
	</div><!-- end col -->
	<div class='navLeftRight col-xs-1 col-sm-1 col-md-1 col-lg-1'>
		<div class="detailNavBgRight">
			{{{nextLink}}}
		</div><!-- end detailNavBgLeft -->
	</div><!-- end col -->
</div><!-- end row -->

<script type='text/javascript'>
	jQuery(document).ready(function() {
		$('.trimText').readmore({
		  speed: 75,
		  maxHeight: 120
		});
	});
</script>
