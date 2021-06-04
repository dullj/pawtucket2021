<?php
/** ---------------------------------------------------------------------
 * themes/default/Front/front_page_html : Front   page of site 
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
?>
<div class="container">
	<div class="row">
		<div class="col-sm-7">
			<H1>The New School Archives Digital Collections presents images, text, audio and video from <a href=http://library.newschool.edu/archives>The New School Archives & Special Collections</a>, home to primary source materials documenting the history of all divisions of The New School.</H1><br> 	
		</div>
		<!--end col-sm-7-->
		<div class="col-sm-1"></div>
		<div class="col-sm-4">
<?php

print $this->render("Front/featured_set_slideshow_html.php");

?>
<div class="container">
	<div class="row">
		<div class="col-sm-7">
			<h1>Browse collections from featured topics:</h1>
			
			<h2 class="front"><a href="/index.php/Gallery/169">COURSE CATALOG COLLECTIONS</a><br>
			Collections featuring course catalogs from across New School divisions, programs and schools. Includes catalogs from Parsons and Mannes before they joined The New School.</h2>
			<h2 class="front"><a href="/index.php/Gallery/570">EXHIBITION 2010: INSPIRING WOMEN</a><br>
			Presented here are the catalog and selected portraits from featured in Inspiring Women: Designers from Parsons' Archives, that ran from March 26–27, 2010 in the Dorothy H. Hirshon Suite at The New School, and March 29–May 31, 2010 in the Adam & Sophie Gimbel Design Library at Parsons The New School for Design.</h2>
			<h2 class="front"><a href="/index.php/Gallery/288">EXHIBITION 2011: RADICAL SHIFTS</a><br>
			Selected materials from the New School Archives relating to Radical Shifts: Reshaping the Interior at Parsons a 2011 exhibition produced by the archives and presented in the Sheila C. Johnson Design Center at Parsons School of Design.</h2>
			<h2 class="front"><a href="/index.php/Gallery/143">EXHIBITION 2014: OFFENSE + DISSENT</a><br>
			Offense + Dissent: Image, Conflict, Belonging, which ran from June 26-September 3, 2014, explored the ways in which offense has been given (and taken) and dissent expressed (and managed) through three incidents in the history of The New School: the 1951 and ’53 curtaining of the Orozco murals during the red scare years; the 1970 anti-war exhibition put up by Parsons students, in lieu of a senior show, in solidarity with the National Student Strike in response to the Kent State shootings and the U.S. bombing of Cambodia; and the 1989 Matsunaga affair.</h2>
			<h2 class="front"><a href="/index.php/Gallery/235">EXHIBITION 2014: VOICES OF CRISIS</a><br>
			Presented here are selected materials from The New School Archives related to VOICES OF CRISIS: American Race Crisis Lectures at The New School, a 2014 exhibition held at The New School. Curator: Miles Kohrman.</h2>
			<h2 class="front"><a href="/index.php/Gallery/79">FASHION DESIGN COLLECTIONS</a><br>
			Highlights from the New School Archives and Special Collections relating to fashion design, education, illustration and marketing.</h2>
			<h2 class="front"><a href="/index.php/Gallery/73">INTERIOR DESIGN COLLECTIONS</a><br>
			Highlights from collections related to interior design, interior designers, and interior design education.</h2>
			<h2 class="front"><a href="/index.php/Gallery/80">NEW SCHOOL HISTORY COLLECTIONS</a><br>
			Selected collections related to the history of the New School.</h2>
			<h2 class="front"><a href="/index.php/Gallery/578">NEW SCHOOL PUBLICATIONS</a>
			<h2 class="front"><a href="/index.php/Gallery/789">ORAL HISTORY COLLECTIONS</a>
			<h2 class="front"><a href="/index.php/Gallery/306">THESIS COLLECTIONS</a><br>
			Collections of theses submitted by master's degree students from a range of programs at The New School.
</h2>

		</div>
		<!--end col-sm-7-->
	</div><!-- end row -->
</div> <!--end container-->
