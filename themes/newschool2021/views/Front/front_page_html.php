<?php
/** ---------------------------------------------------------------------
 * themes/default/Front/front_page_html : Front page of site 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2013 Whirl-i-Gig
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
 * @package CollectiveAccess
 * @subpackage Core
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License version 3
 *
 * ----------------------------------------------------------------------
 */
		print $this->render("Front/featured_set_slideshow_html.php");
?>
	<div class="row" style="margin: auto;">
		<div class="col-sm-12 col-md-10 col-md-offset-1">
    
    <h3>Welcome</h3>
    <p>On this site you can search collection guides (also called finding aids) that describe archival collections held by The New School Archives. When a new collection becomes available for research, the guide for the collection is added to this site.</p>
    <hr>

    <h3>What are archival collections?</h3>
    <p>Archival collections are groups of primary source materials created by a person, group of people, or organization in the course of their everyday work or activities. Collections can range in size from a single document to hundreds of boxes or gigabytes of digital files. They can contain a range of materials, including documents, drawings, photographs, websites, and audiovisual records. Unlike published materials, archival collections are usually unique and exist only in the collection where a researcher finds them.</p>
    <hr>

    <h3>What is not on this site?</h3>
    <p>Fusce molestie metus metus, eget luctus ex euismod sit amet. Maecenas scelerisque lorem nisi. Proin tempus consequat maximus. Vestibulum imperdiet viverra tellus, sed semper lectus. Nullam vitae molestie purus, sed varius sem. In dictum vehicula nunc, eu viverra eros congue eu.</p>

    <ul>
      <li>
        <p><u>Digital Collections:</u> Fusce molestie metus metus, eget luctus ex euismod sit amet. Maecenas scelerisque lorem nisi. Proin tempus consequat maximus. Vestibulum imperdiet viverra tellus, sed semper lectus. Nullam vitae molestie purus, sed varius sem. In dictum vehicula nunc, eu viverra eros congue eu.</p>
      </li>

      <li>
        <p><u>Unprocessed Collections:</u> This site does not include collections in The New School Archives that have not yet been cataloged. If you cannot find the information you are seeking here, contact us at <a href="mailto:archives@newschool.edu">archives@newschool.edu</a> and we will gladly check our internal database for you.</p>
      </li>

      <li>
        <p><u>Items in the Library:</u> Use The New School Library <a href="https://library.newschool.edu/" rel="noopener" target="_blank">catalog</a> to search for published library materials, such as books, journals, and commercial recordings.</p>
      </li>

      <li>
        <p><u>Special Collections:</u> Find information about our published <a href="https://archives.newschool.edu" target="_blank" rel="noopener">Special Collections</a> holdings, such as artists' books and scores.</p>
      </li>
    </ul>
      
    <hr>
      
    <h3>Questions?</h3>
      <p>Learn more about The New School Archives and Special Collections on our <a href="https://archives.newschool.edu" target="_blank" rel="noopener">homepage.</a></p>
      <p>Contact us at <a href="mailto:archives@newschool.edu">archives@newschool.edu</a> to schedule an online appointment, request that our staff conduct research on your behalf, or for questions about The New School Archives and Special Collections.</p>
      

<?php

print $this->render("Front/featured_set_slideshow_html.php");
?>
		</div>
</div><!-- end row -->
