
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

<div class="row" style="margin: auto;">
	<div class="col-sm-12 col-md-10 col-md-offset-1" id="welcome-text">
    <h3>Welcome</h3>
    <p>On this site you can search collection guides (also called finding aids) that describe archival collections held by The New School Archives. When a new collection becomes available for research, the guide for the collection is added to this site.</p>
  </div>
    <hr>
  <div>
    <form role="search" action="<?php print caNavUrl($this->request, '', 'MultiSearch', 'Index'); ?>">
      <div class="formOutline">
        <div class="form-group">
          <input type="text" class="form-control" id="heroSearchInput" placeholder="Search" name="search" autocomplete="off" aria-label="Search" />
        </div>
        <button type="submit" class="btn-search" id="heroSearchButton"><span class="glyphicon glyphicon-search" aria-label="<?php print _t("Submit Search"); ?>"></span></button>
      </div>
    </form>
  </div>
  <hr>
    <h2>Highlights from the Archives</h2>
<?php
        print $this->render("Front/featured_set_slideshow_html.php");
?>
</div><!-- end row -->
