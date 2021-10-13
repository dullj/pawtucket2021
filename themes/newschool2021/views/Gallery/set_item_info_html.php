<?php print "(".$this->getVar("set_item_num")."/".$this->getVar("set_num_items").")<br/>"; ?>


<H4>{{{<unit relativeTo="ca_collections" delimiter=" ➔ "><l>^ca_collections.preferred_labels.name</l></unit><ifcount min="1" code="ca_collections"> ➔ </ifcount>}}}</H4>

<H5>Related Object: <?php print $this->getVar("label"); ?></H5>

{{{<ifdef code="ca_objects.idno"><H6>Identifer:</H6>^ca_objects.idno<br/><br/></ifdef>}}}

{{{<ifdef code="ca_objects.description">^ca_objects.description<br/><br/></ifdef>}}}

{{{<ifcount code="ca_entities" min="1" max="1"><b>Related person: </b></ifcount>}}}
{{{<ifcount code="ca_entities" min="2"><b>Related people: </b></ifcount>}}}
{{{<unit relativeTo="ca_entities" delimiter=", "><l>^ca_entities.preferred_labels.displayname</l></unit><br/><br/>}}}


<?php print caDetailLink($this->request, _t("VIEW RECORD"), '', $this->getVar("table"),  $this->getVar("row_id")); ?>
