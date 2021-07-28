<div class="row" style="margin: auto;">
	<div class="welcome-text">
    <div class="heroSearch">
      <p>The New School Archives Digital Collections presents <a href="https://dictionary.archivists.org/entry/born-digital.html" rel="noopener" target="_blank">born-digital</a> and digitized images, text, audio and video from <a href="https://archives.newschool.edu/" rel="noopener" target="_blank">The New School Archives & Special Collections</a>, home to primary source materials documenting the history of all divisions of The New School.</p>
      <hr>
    </div>
  </div>
</div>

<div class="row" style="margin: auto;">
	<div class="col-sm-3 col-xs-6" id="front-container">
		<a href="/pawtucket/index.php/Collections/index"><img src="themes/newschool2021/assets/pawtucket/graphics/collections.png" class="responsive"></a>
		<div class="centered">
			<h3 class="front-imagelabels"><a href="/pawtucket/index.php/Collections/index">Collections</a></h3>
		</div>
	</div>
	<div class="col-sm-3 col-xs-6" id="front-container">
		<a href="/pawtucket/index.php/Browse/objects"><img src="themes/newschool2021/assets/pawtucket/graphics/objects.png" class="responsive"></a>
		<div class="centered">
			<h3 class="front-imagelabels"><a href="/pawtucket/index.php/Browse/objects">Objects</a></h3>
		</div>
	</div>
	<div class="col-sm-3 col-xs-6" id="front-container">
		<a href="/pawtucket/index.php//Browse/People"><img src="themes/newschool2021/assets/pawtucket/graphics/people.png" class="responsive"></a>
		<div class="centered">
			<h3 class="front-imagelabels"><a href="/pawtucket/index.php//Browse/People">People</a></h3>
		</div>
	</div>
	<div class="col-sm-3 col-xs-6" id="front-container">
		<a href="/pawtucket/index.php/Browse/Organizations"><img src="themes/newschool2021/assets/pawtucket/graphics/organizations.png" class="responsive"></a>
		<div class="centered">
			<h3 class="front-imagelabels"><a href="/pawtucket/index.php/Browse/Organizations">Organizations</a></h3>
		</div>
	</div>
</div>


<div class="welcome-text" style="margin-top:20px;">
	<button class="accordion">Research Resources</button>
		<div class="panel">
			<h3><a href="https://findingaids.archives.newschool.edu/">Collection Guides</a></h3>
			<p>The Digital Collections feature a small portion of the archival holdings. Please visit the Collection Guides for a deeper search.</p>
			<h3><a href="/pawtucket/index.php/About/Index">User Handbook</a></h3>
			<p>For assistance with searching the Digital Collections, please refer to our User Handbook.</p>
		</div>

	<button class="accordion">Collection Strengths</button>
		<div class="panel">
			<h3><a href="/pawtucket/index.php/Gallery/169">Course Catalog collections</a></h3>
			<p>10 collections</p>
			
		</div>

	<button class="accordion">Past Exhibitions</button>
		<div class="panel">
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
