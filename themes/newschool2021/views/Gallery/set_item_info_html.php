<?php print "(".$this->getVar("set_item_num")."/".$this->getVar("set_num_items").")<br/>"; ?>


<H4>{{{<unit relativeTo="ca_collections" delimiter=" ➔ "><l>^ca_collections.preferred_labels.name</l></unit><ifcount min="1" code="ca_collections"></ifcount>}}}</H4>

{{{<ifdef code="ca_collections.CollectionNote.NoteContent%[NoteType=abstract]"><H3 style="padding-top:10px;">Collection Description</H3>^ca_collections.CollectionNote.NoteContent%[NoteType=abstract]<br/></ifdef>}}}


{{{<ifdef code="ca_objects.preferred_labels.name"><H3 style="padding-top:10px;">Related Object</H3>^ca_objects.preferred_labels.name<br/><br/></ifdef>}}}

{{{<ifdef code="ca_objects.descriptionSet.descriptionText"><H6 style="padding-top:10px;">Description</H6>^ca_objects.descriptionSet.descriptionText<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.pbcoreDescription.pBdescription_text"><H6>Description</H6>^ca_objects.pbcoreDescription.pBdescription_text<br/></ifdef>}}}
							{{{<ifdef code="ca_objects.pbcoreDescription.pBdescription_text%[pbcore_description_types=abstract]"><H6>Abstract</H6>^ca_objects.pbcoreDescription.pBdescription_text%[pbcore_description_types=abstract]<br/></ifdef>}}}



