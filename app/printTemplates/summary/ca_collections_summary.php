<?php
/* ----------------------------------------------------------------------
 * app/templates/summary/ca_collections_summary.php
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
 * @name Collection Finding Aid
 * @type page
 * @pageSize letter
 * @pageOrientation portrait
 * @tables ca_collections
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
		
	<div class="unit"><H3>{{{^ca_collections.type_id}}}{{{<ifdef code="ca_collections.idno">, ^ca_collections.idno</ifdef>}}}</H3></div>
	<div class="unit">
	{{{<ifdef code="ca_collections.parent_id"><div class="unit"><H3>Part of: <unit relativeTo="ca_collections.hierarchy" delimiter=" &gt; ">^ca_collections.preferred_labels.name</unit></H3></ifdef>}}}
	{{{<ifdef code="ca_collections.label">^ca_collections.label<br/></ifdev>}}}
	</div>
	<div class="unit">
	{{{<ifcount code="ca_collections.related" min="1" max="1"><br/><H3>Related collection</H3></ifcount>}}}
	{{{<ifcount code="ca_collections.related" min="2"><br/><H3>Related collections</H3></ifcount>}}}
	{{{<unit relativeTo="ca_collections_x_collections"><unit relativeTo="ca_collections" delimiter="<br/>">^ca_collections.related.preferred_labels.name</unit> (^relationship_typename)</unit>}}}
	
	{{{<ifdef code="ca_collections.CollectionNote.NoteContent%[NoteType=abstract]"><H3>About</H3>^ca_collections.CollectionNote.NoteContent%[NoteType=abstract]<br/></ifdef>}}}
		
	{{{<ifdef code="ca_collections.findaid"><H3>Collection Guide</H3><a href="^ca_collections.findaid">Guide to the ^ca_collections.preferred_labels.name</a><p>There’s more! What you see here is only what is viewable online; in most cases it is only a small portion of what is available. Please visit the collection guide to find out more.</p></ifdef>}}}
		
	{{{<ifcount code="ca_entities" min="1" max="1"><br/><H3>Related person</H3></ifcount>}}}
	{{{<ifcount code="ca_entities" min="2"><br/><H3>Related people</H3></ifcount>}}}
	{{{<unit relativeTo="ca_entities_x_collections"><unit relativeTo="ca_entities" delimiter="<br/>">^ca_entities.preferred_labels.displayname</unit> (^relationship_typename)</unit>}}}
	
	{{{<ifcount code="ca_occurrences" min="1" max="1"><br/><H3>Related occurrence</H3></ifcount>}}}
	{{{<ifcount code="ca_occurrences" min="2"><br/><H3>Related occurrences</H3></ifcount>}}}
	{{{<unit relativeTo="ca_occurrences_x_collections"><unit relativeTo="ca_occurrences" delimiter="<br/>">^ca_occurrences.preferred_labels.name</unit> (^relationship_typename)</unit>}}}

	</div>
	
	
<?php
	if ($t_item->get("ca_collections.children.collection_id") || $t_item->get("ca_objects.object_id")){
		print "<hr/><br/>Collection Contents";
		if ($t_item->get('ca_collections.collection_id')) {
			print caGetCollectionLevelSummary($this->request, array($t_item->get('ca_collections.collection_id')), 1);
		}
	}
	print $this->render("pdfEnd.php");
?>
