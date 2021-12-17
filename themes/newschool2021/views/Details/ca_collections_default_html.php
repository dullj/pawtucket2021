<?php
	$t_item = $this->getVar("item");
	$va_comments = $this->getVar("comments");
	$vn_comments_enabled = 	$this->getVar("commentsEnabled");
	$vn_share_enabled = 	$this->getVar("shareEnabled");
	$vn_pdf_enabled = 		$this->getVar("pdfEnabled");
	
	# --- get collections configuration
	$o_collections_config = caGetCollectionsConfig();
	$vb_show_hierarchy_viewer = true;
	if($o_collections_config->get("do_not_display_collection_browser")){
		$vb_show_hierarchy_viewer = false;	
	}
	# --- get the collection hierarchy parent to use for exportin finding aid
	$vn_top_level_collection_id = array_shift($t_item->get('ca_collections.hierarchy.collection_id', array("returnWithStructure" => true)));

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
		<div class="container">
			<div class="row">
				<div class='col-md-12 col-lg-12'>
					<H4>{{{^ca_collections.preferred_labels.name}}}</H4>
					<H6>{{{^ca_collections.type_id}}}</H6>
					{{{<ifdef code="ca_collections.parent_id"><H6>Part of: <unit relativeTo="ca_collections.hierarchy" delimiter=" &gt; "><l>^ca_collections.preferred_labels.name</l></unit></H6></ifdef>}}}
<?php					
					if ($vn_pdf_enabled) {
						print "<div class='exportCollection'><span class='glyphicon glyphicon-file'></span> ".caDetailLink($this->request, "Download Collection Record", "", "ca_collections",  $vn_top_level_collection_id, array('view' => 'pdf', 'export_format' => '_pdf_ca_collections_summary'))."</div>";
					}
?>
				</div><!-- end col -->
			</div><!-- end row -->
			<div class="row">
				<div class='col-sm-12'>
<?php
			if ($vb_show_hierarchy_viewer) {	
?>
				<div id="collectionHierarchy"><?php print caBusyIndicatorIcon($this->request).' '.addslashes(_t('Loading...')); ?></div>
				<script>
					$(document).ready(function(){
						$('#collectionHierarchy').load("<?php print caNavUrl($this->request, '', 'Collections', 'collectionHierarchy', array('collection_id' => $t_item->get('collection_id'))); ?>"); 
					})
				</script>
<?php				
			}									
?>				
				</div><!-- end col -->
			</div><!-- end row -->
			<div class="row" id="collection-headers">			
				<div class='col-md-6 col-lg-6'>
					{{{<ifdef code="ca_collections.CollectionNote.NoteContent%[NoteType=abstract]"><H3>About</H3>^ca_collections.CollectionNote.NoteContent%[NoteType=abstract]<br/></ifdef>}}}
					
					{{{<ifdef code="ca_collections.idno"><H3>Collection Identifier</H3>^ca_collections.idno</ifdef>}}}
					
					{{{<ifcount code="ca_objects" min="1" max="1"><div class='unit'><unit relativeTo="ca_objects" delimiter=" "><l>^ca_object_representations.media.large</l><div class='caption'>Related Object: <l>^ca_objects.preferred_labels.name</l></div></unit></div></ifcount>}}}
<?php
				# Comment and Share Tools
				if ($vn_comments_enabled | $vn_share_enabled) {
						
					print '<div id="detailTools">';
					if ($vn_comments_enabled) {
?>				
						<div class="detailTool"><a href='#' onclick='jQuery("#detailComments").slideToggle(); return false;'><span class="glyphicon glyphicon-comment"></span>Comments (<?php print sizeof($va_comments); ?>)</a></div><!-- end detailTool -->
						<div id='detailComments'><?php print $this->getVar("itemComments");?></div><!-- end itemComments -->
<?php				
					}
					if ($vn_share_enabled) {
						print '<div class="detailTool"><span class="glyphicon glyphicon-share-alt"></span>'.$this->getVar("shareLink").'</div><!-- end detailTool -->';
					}
					print '</div><!-- end detailTools -->';
				}				
?>
					
				</div><!-- end col -->
				<div class='col-md-6 col-lg-6'>
					{{{<ifdef code="ca_collections.findaid"><H3>Collection Guide</H3><a href="^ca_collections.findaid">Guide to the ^ca_collections.preferred_labels.name</a><p>There’s more! What you see here is only what is viewable online; in most cases it is only a small portion of what is available. Please visit the collection guide to find out more.</p></ifdef>}}}
					
					{{{<ifcount code="ca_entities" min="1" max="1"><H3>Related person/organization</H3></ifcount>}}}
					{{{<ifcount code="ca_entities" min="2"><H3>Related people/organizations</H3></ifcount>}}}
					{{{<ifcount code="ca_entities" min="1"><unit relativeTo="ca_entities" delimiter="<br/>" sort="ca_entity_labels.surname;ca_entity_labels.forename"><l>^ca_entities.preferred_labels</l></unit></ifcount>}}}
					
					{{{<ifcount code="ca_collections.related" min="1" max="1"><h3>Related collection</h3></ifcount>}}}
					{{{<ifcount code="ca_collections.related" min="2"><h3>Related collections</h3></ifcount>}}}
					{{{<unit relativeTo="ca_collections.related" delimiter="<br/>"><l>^ca_collections.preferred_labels.name</l></unit>}}}
					
<?php
				
				$va_all_subjects = array();
				
					foreach(array("lcshNames", "lcshTopical", "lcshGeo") as $vs_field){
						$va_lc = $t_collection->get("ca_collections.".$vs_field, array("returnAsArray" => true));
						$va_lc_names_processed = array();
						if(is_array($va_lc) && sizeof($va_lc)){
							foreach($va_lc as $vs_lc_terms){
								if($vs_lc_terms){
									$vs_lc_term = "";
									if($vs_lc_terms && (strpos($vs_lc_terms, " [") !== false)){
										$vs_lc_term = mb_substr($vs_lc_terms, 0, strpos($vs_lc_terms, " ["));
									}
									$va_all_subjects[] = caNavLink($this->request, $vs_lc_term, "", "", "Search", "collections", array("search" => "ca_collections.".$vs_field.": ".$vs_lc_term));
								}
							}
						}
					}
					if(is_array($va_all_subjects) && sizeof($va_all_subjects)){
						print "<div class='unit'><label>Subjects</label>".join(", ", $va_all_subjects)."</div>";
					}
							
?>
				</div><!-- end col -->
				
			</div><!-- end row -->
{{{<ifcount code="ca_objects" min="2">
			<div class="row">

				<hr class="divide" style="margin: 20px 15px 40px 15px; color: #000000;"></hr>

				<h3 style="padding-right: 15px; padding-left: 15px;">Related Objects <?php print caNavLink($this->request, _t('(View with filters)'), '', '', 'Browse', 'objects', array('facet' => 'collection_facet', 'id' => "^ca_collections.collection_id"), null, array('dontURLEncodeParameters' => true)); ?></h3>
			
				<div id="browseResultsContainer">
					<?php print caBusyIndicatorIcon($this->request).' '.addslashes(_t('Loading...')); ?>
				</div><!-- end browseResultsContainer -->
			</div><!-- end row -->
			<script type="text/javascript">
				jQuery(document).ready(function() {
					jQuery("#browseResultsContainer").load("<?php print caNavUrl($this->request, '', 'Search', 'objects', array('search' => 'collection_id:^ca_collections.collection_id'), array('dontURLEncodeParameters' => true)); ?>", function() {
						jQuery('#browseResultsContainer').jscroll({
							autoTrigger: true,
							loadingHtml: '<?php print caBusyIndicatorIcon($this->request).' '.addslashes(_t('Loading...')); ?>',
							padding: 20,
							nextSelector: 'a.jscroll-next'
						});
					});
					
					
				});
			</script>
</ifcount>}}}
		</div><!-- end container -->
	</div><!-- end col -->
	<div class='navLeftRight col-xs-1 col-sm-1 col-md-1 col-lg-1'>
		<div class="detailNavBgRight">
			{{{nextLink}}}
		</div><!-- end detailNavBgLeft -->
	</div><!-- end col -->
</div><!-- end row -->
