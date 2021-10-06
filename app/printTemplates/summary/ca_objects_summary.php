<?php
/* ----------------------------------------------------------------------
 * app/templates/summary/summary.php
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2014 Whirl-i-Gig
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
 * -=-=-=-=-=- CUT HERE -=-=-=-=-=-
 * Template configuration:
 *
 * @name Object tear sheet
 * @type page
 * @pageSize letter
 * @pageOrientation portrait
 * @tables ca_objects
 * @marginTop 0.75in
 * @marginLeft 0.5in
 * @marginRight 0.5in
 * @marginBottom 0.75in
 *
 * ----------------------------------------------------------------------
 */
 
 	$t_item = $this->getVar('t_subject');
	$t_display = $this->getVar('t_display');
	$va_placements = $this->getVar("placements");

	print $this->render("pdfStart.php");
	print $this->render("header.php");
	print $this->render("footer.php");	

?>
	<div class="title">
		<h1 class="title"><?php print $t_item->getLabelForDisplay();?></h1>
	</div>
	<div class="representationList">
		
<?php
	$va_reps = $t_item->getRepresentations(array("thumbnail", "medium"));

	foreach($va_reps as $va_rep) {
		if(sizeof($va_reps) > 1){
			# --- more than one rep show thumbnails
			$vn_padding_top = ((120 - $va_rep["info"]["thumbnail"]["HEIGHT"])/2) + 5;
			print $va_rep['tags']['thumbnail']."\n";
		}else{
			# --- one rep - show medium rep
			print $va_rep['tags']['medium']."\n";
		}
	}
?>
	</div>
	<div class='tombstone'>
		
		{{{<ifcount min="1" code="ca_objects.dates.dates_value"><div class='unit'><h3>Date</h3><unit delimiter="<br/>">^ca_objects.dates.dates_value</unit></div></ifcount>}}}
		
		{{{<ifcount code="ca_entities" min="1" restrictToRelationshipTypes='artist'><div class='unit'><h3>Artist</h3><unit relativeTo='ca_entities' restrictToRelationshipTypes='artist'>^ca_entities.preferred_labels.displayname</unit></div></ifcount>}}}
	
{{{<ifdef code="ca_objects.descriptionSet.descriptionText"><H3>Description</H3>^ca_objects.descriptionSet.descriptionText<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.pbcoreDescription.pBdescription_text"><H3>Description</H3>^ca_objects.pbcoreDescription.pBdescription_text<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.pbcoreDescription.pBdescription_text%[pbcore_description_types=abstract]"><H3>Abstract</H3>^ca_objects.pbcoreDescription.pBdescription_text%[pbcore_description_types=abstract]<br/></ifdef>}}}
							
							{{{<ifdef code="ca_objects.dateSet.setDisplayValue"><H3>Date</H3>^ca_objects.dateSet.setDisplayValue<br/></ifdef>}}}

							{{{<ifcount code="ca_entities" min="1" max="1"><H3>Related person</H3></ifcount>}}}
							{{{<ifcount code="ca_entities" min="2"><H3>Related people</H3></ifcount>}}}
							{{{<unit relativeTo="ca_objects_x_entities" delimiter="<br/>"><unit relativeTo="ca_entities"><l>^ca_entities.preferred_labels</l></unit> (^relationship_typename)</unit>}}}
							
							{{{<ifdef code="ca_objects.wtDrawings"><H3>Work Type</H3>^ca_objects.wtDrawings<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtPhotographic"><H3>Work Type</H3>^ca_objects.wtPhotographic<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtPosters"><H3>Work Type</H3>^ca_objects.wtPosters<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtClippings"><H3>Work Type</H3>^ca_objects.wtClippings<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtPlans"><H3>Work Type</H3>^ca_objects.wtPlans<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtCourse"><H3>Work Type</H3>^ca_objects.wtCourse<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtExhibition"><H3>Work Type</H3>^ca_objects.wtExhibition<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtBooks"><H3>Work Type</H3>^ca_objects.wtBooks<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtPeriodicals"><H3>Work Type</H3>^ca_objects.wtPeriodicals<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtScores "><H3>Work Type</H3>^ca_objects.wtScores<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtScrapbooks"><H3>Work Type</H3>^ca_objects.wtScrapbooks<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtPhotoAlbums"><H3>Work Type</H3>^ca_objects.wtPhotoAlbums<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtSketchbooks"><H3>Work Type</H3>^ca_objects.wtSketchbooks<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtTextual"><H3>Work Type</H3>^ca_objects.wtTextual<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtProofs"><H3>Work Type</H3>^ca_objects.wtProofs<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtThree"><H3>Work Type</H3>^ca_objects.wtThree<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtOther"><H3>Work Type</H3>^ca_objects.wtOther<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtDigitalaudio"><H3>Work Type</H3>^ca_objects.wtDigitalaudio<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wt_digitalmovingimage"><H3>Work Type</H3>^ca_objects.wt_digitalmovingimage<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wtPhysFilm"><H3>Work Type</H3>^ca_objects.wtPhysFilm<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wt_physicalaudio"><H3>Work Type</H3>^ca_objects.wt_physicalaudio<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.wt_physicalvideo"><H3>Work Type</H3>^ca_objects.wt_physicalvideo<br/></ifdef>}}}
							
							
					
							{{{<ifdef code="ca_objects.measurementSet.measurements"><H3>Measurements</H3>^ca_objects.measurementSet.measurements <ifdef code="ca_objects.measurementSet.measurementsType">(^ca_objects.measurementSet.measurementsType)</ifdef></ifdef><ifdef code="ca_objects.measurementSet.measurements"> x </ifdef><ifdef code="ca_objects.measurementSet.measurements2">^ca_objects.measurementSet.measurements2 <ifdef code="ca_objects.measurementSet.measurementsType2">(^ca_objects.measurementSet.measurementsType2)</ifdef></ifdef>}}}
							
							{{{<ifdef code="ca_objects.inscriptionSet.inscriptionText"><H3>Inscription</H3></ifdef>}}}
{{{<unit relativeTo="ca_objects" delimiter="<br/>">^ca_objects.inscriptionSet.inscriptionText (^ca_objects.inscriptionSet.inscriptionType)</unit>}}}
					
							{{{<ifdef code="ca_objects.pbcoreLanguage"><H3>Language</H3>^ca_objects.pbcoreLanguage<br/></ifdef>}}}
							
							{{{<ifcount code="ca_list_items" min="1" max="1"><H3>Related Repository</H3></ifcount>}}}
							{{{<ifcount code="ca_list_items" min="2"><H3>Related Repositories</H3></ifcount>}}}
							{{{<unit relativeTo="ca_objects_x_vocabulary_terms" delimiter="<br/>"><unit relativeTo="ca_list_items"><l>^ca_list_items.preferred_labels.name_plural</l></unit>}}}
														
							{{{<ifdef code="ca_objects.repositories"><H3>Collection Guides</H3>^ca_objects.repositories<br/></ifdef>}}}
														
							{{{<h3>Use Restrictions</h3><ifcount code="ca_collections" min="1" max="2"><unit relativeTo="ca_collections">^ca_collections.CollectionNote.NoteContent%[NoteType=conditions_governing_use]</unit></ifcount>}}}
							
							{{{<ifdef code="ca_objects.containerID"><H3>Location</H3>^ca_objects.containerID<br/></ifdef>}}}

							{{{<ifdef code="ca_objects.idno"><H3>Identifier</H3>^ca_objects.idno<br/></ifdef>}}}
							
							{{{<ifcount code="ca_objects.related" min="1">
							<div class="row"><div class="col-sm-12"><H3>Related Objects</H3><div class="row rowSmallPadding"><unit relativeTo="ca_objects.related" delimiter=" "><div class="col-xs-4 col-md-2 smallpadding"><div class="detailRelObject"><l>^ca_object_representations.media.icon</l></div><!--end detailRelObject--></div><!--end col--></unit></div><!-- end row --></div><!-- end col --></div><!-- end row -->
							</ifcount>}}}


</div>
<?php	
	print $this->render("pdfEnd.php");
