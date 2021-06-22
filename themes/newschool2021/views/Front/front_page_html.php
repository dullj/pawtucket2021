<div class="row" style="margin: auto;">
  <div class="col-sm-12 col-md-10 col-md-offset-1" id="welcome-text">
    <div class="heroSearch">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <hr>
    </div>
  </div>
</div>
<div class="row" style="margin: auto;">
  <div class="col-sm-12 col-md-10 col-md-offset-1">
    <form class="navbar-form navbar-right" role="search" action="<?php print caNavUrl($this->request, '', 'MultiSearch', 'Index'); ?>">
      <div class="formOutline">
        <div class="form-group">
          <input type="text" class="form-control" id="headerSearchInput" placeholder="Search the Archives" name="search" autocomplete="off" />
        </div>
        <button type="submit" class="btn-search" id="headerSearchButton"><span class="glyphicon glyphicon-search"></span></button>
      </div>
    </form>
  </div>
</div>
<div class="row" style="margin: auto;">
  <div class="col-sm-12 col-md-10 col-md-offset-1">
    <h2>Highlights from the Archives</h2>
    <?php
            print $this->render("Front/featured_set_slideshow_html.php");
    ?>
  </div>
</div><!-- end row -->
