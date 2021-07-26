<div class="row" style="margin: auto;">
	<div id="welcome-text">
    <div class="heroSearch">
      <p>The New School Archives Digital Collections presents <a href="https://dictionary.archivists.org/entry/born-digital.html" rel="noopener" target="_blank">born-digital</a> and digitized images, text, audio and video from <a href="https://archives.newschool.edu/" rel="noopener" target="_blank">The New School Archives & Special Collections</a>, home to primary source materials documenting the history of all divisions of The New School.</p>
      <hr>
    </div>
  </div>
</div>

<div class="row" style="margin: auto;" id="welcome-text">
	<div class="col-sm-3" id="front-container">
		<img src="themes/newschool2021/assets/pawtucket/graphics/collections.png" class="responsive">
		<div class="centered">
			<h3 class="front-imagelabels">Collections</h3>
		</div>
	</div>
	<div class="col-sm-3" id="front-container">
		<img src="themes/newschool2021/assets/pawtucket/graphics/objects.png" class="responsive">
		<div class="centered">
			<h3 class="front-imagelabels">Objects</h3>
		</div>
	</div>
	<div class="col-sm-3" id="front-container">
		<img src="themes/newschool2021/assets/pawtucket/graphics/people.png" class="responsive">
		<div class="centered">
			<h3 class="front-imagelabels">People</h3>
		</div>
	</div>
	<div class="col-sm-3" id="front-container">
		<img src="themes/newschool2021/assets/pawtucket/graphics/organizations.png" class="responsive">
		<div class="centered">
			<h3 class="front-imagelabels">Organizations</h3>
		</div>
	</div>
</div>
	<hr>

<div class="row" style="margin: auto;">
  <div class="col-sm-12 col-md-10 col-md-offset-1">
    <h2 style="text-align:center; padding-bottom:20px;">Highlights from the Archives</h2>
    <?php
            print $this->render("Front/featured_set_slideshow_html.php");
    ?>
		<hr>
  </div>
</div><!-- end row -->


