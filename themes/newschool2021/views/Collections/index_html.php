<?php
	$o_collections_config = $this->getVar("collections_config");
	$qr_collections = $this->getVar("collection_results");
?>
	<div class="row">
		<div class='col-sm-8 col-md-8 col-lg-8 collectionsList'>
			<h1><?php print $this->getVar("section_name"); ?></h1>
			<p><?php print $o_collections_config->get("collections_intro_text"); ?></p>
<?php	
	$vn_i = 0;
	if($qr_collections && $qr_collections->numHits()) {
		while($qr_collections->nextHit()) {
			if ( $vn_i == 0) { print "<div class='row'>"; } 
			print "<div class='col-sm-6'><div class='collectionTile'>";
			print $qr_collections->getWithTemplate("<ifcount code='ca_objects' restrictToRelationshipTypes='featured'><unit relativeTo='ca_objects' restrictToRelationshipTypes='featured'>^ca_object_representations.media.iconlarge</unit></ifcount>");
			print "<div class='title'>".caDetailLink($this->request, $qr_collections->get("ca_collections.preferred_labels"), "", "ca_collections",  $qr_collections->get("ca_collections.collection_id"))."</div>";	
			if (($o_collections_config->get("description_template")) && ($vs_scope = $qr_collections->getWithTemplate($o_collections_config->get("description_template")))) {
				print "<div>".$vs_scope."</div>";
			}
			print "</div></div>";
			$vn_i++;
			if ($vn_i == 2) {
				print "</div><!-- end row -->\n";
				$vn_i = 0;
			}
		}
		if (($vn_i < 2) && ($vn_i != 0) ) {
			print "</div><!-- end row -->\n";
		}
	} else {
		print _t('No collections available');
	}
?>
		</div>
		<div class="<?php print ($vs_refine_col_class) ? $vs_refine_col_class : "col-sm-4 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1"; ?>">
		<div id="bViewButtons">
<?php
		if(is_array($va_views) && (sizeof($va_views) > 1)){
			foreach($va_views as $vs_view => $va_view_info) {
				if ($vs_current_view === $vs_view) {
					print '<a href="#" class="active"><span class="glyphicon  '.$va_view_icons[$vs_view]['icon'].'" aria-label="'.$vs_view.'"></span></a> ';
				} else {
					print caNavLink($this->request, '<span class="glyphicon '.$va_view_icons[$vs_view]['icon'].'" aria-label="'.$vs_view.'"></span>', 'disabled', '*', '*', '*', array('view' => $vs_view, 'key' => $vs_browse_key)).' ';
				}
			}
		}
?>
		</div>
<?php
		print $this->render("Browse/browse_refine_subview_html.php");
?>			
	</div><!-- end col-2 -->
	</div>
