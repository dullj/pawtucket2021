<?php print "(".$this->getVar("set_item_num")."/".$this->getVar("set_num_items").")<br/>"; ?>


<H4>{{{<unit relativeTo="ca_collections" delimiter=" ➔ "><l>^ca_collections.preferred_labels.name</l></unit><ifcount min="1" code="ca_collections"></ifcount>}}}</H4>

{{{<ifdef code="ca_collections.CollectionNote.NoteContent%[NoteType=abstract]"><H3 style="padding-top:10px;">Collection Description </H3>^ca_collections.CollectionNote.NoteContent%[NoteType=abstract]<br/></ifdef>}}}

<?php print caDetailLink($this->request, _t("VIEW RELATED OBJECT"), '', $this->getVar("table"),  $this->getVar("row_id")); ?>


