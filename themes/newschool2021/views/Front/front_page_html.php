<main id="main" role="main" class="ca ca_archive_landing">
	<section class="intro">
		<div class="wrap block-large">
			<div class="wrap-max-content">
				<div class="block-half body-text-l">
					Fusce molestie metus metus, eget luctus ex euismod sit amet. Maecenas scelerisque lorem nisi. Proin tempus consequat maximus. Vestibulum imperdiet viverra tellus, sed semper lectus. Nullam vitae molestie purus, sed varius sem. In dictum vehicula nunc, eu viverra eros congue eu.
				</div>
			</div>
		</div>
	</section>
	<section class="ca_nav">
		<nav class="hide-for-mobile">	
			<div class="wrap text-gray">
				<form action="/Browse/archive">
					<div class="cell text">
						<a href="/Browse/Archive">Browse</a>
					</div>
					<div class="cell">
						<label for="searchInput" class="visuallyhidden">Search the Archives</label>
						<input id="searchInput" name="search" type="text" placeholder="Search the Archives" class="search">
					</div>
					<div class="cell">
						<div class="utility-container">
							<div class="utility utility_menu">
								<a href="#" class="trigger">All Archival Collections</a>
								<div class="options">
									<a href="/Browse/collections">Collections</a>
									<a href="/Browse/objects">Objects</a>
									<a href="/Browse/people">People</a>
									<a href="/Browse/organizations">Organizations</a>
								</div>
							</div>
						</div>
					</div>
					<div class="misc">
						<div class="cell text"><a href="/About/Index">User Guide</a></div>
						<div class="cell text"><a href="https://archives.newschool.edu/">About<span class="long">Archives Home</span></a></div>
					</div>
				</form>
			</div>
		</nav>
		<nav class="show-for-mobile wrap">
			<div class="module_accordion">
				<div class="items">
					<div class="item" data-accordion>
						<div class="trigger small" data-control>Archive Menu</div>
						<div class="details" data-content style="max-height: 0px; overflow: hidden;">
							<div class="inner">
								<div class="module_filter_bar">
									<div class="wrap text-gray">
										<form action="/Browse/archive" method="post">
											<div class="cell">
												<input name="search" type="text" placeholder="Search the Archive" class="search">
											</div>
											<div class="misc">
												<a href="/Browse/Archive">Browse</a> 
												<a href="/About/Index">User Guide</a> 
												<a href="https://archives.newschool.edu/">Archives Home</a>
												<a href="/LoginReg/loginForm">Researcher Login</a> 
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</section>
	<section class="block border">
		<div class="wrap">
			<div class="block-half text-align-center">
				<h4 class="subheadline-bold">Highlights from the Archive</h4>
			</div>
		</div>
		<?php
				print $this->render("Front/featured_set_slideshow_html.php");
		?>
	</section>
</main>
