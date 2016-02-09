<?php
/* ----------------------------------------------------------------------
 * views/pageFormat/pageHeader.php : 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2014 Whirl-i-Gig
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
 * ----------------------------------------------------------------------
 */

# Locale selection
global $g_ui_locale;

?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"/>
	
	<script type="text/javascript">window.caBasePath = '<?php print $this->request->getBaseUrlPath(); ?>';</script>

	<?php print MetaTagManager::getHTML(); ?>
	<?php print AssetLoadManager::getLoadHTML($this->request); ?>

	<title><?php print $this->request->config->get('html_page_title'); ?></title>
    <meta name="description" content="<?php print $this->request->config->get('html_page_title'); ?>" />
</head>
<body>
	    <div id="politica_cookies">
            <a href="#" class="cerrarCookies">x</a>
            <p><?php print _t("Para mejorar tu experiencia de usuario nuestra web utiliza cookies propias y de terceros, si continúas navegnado entendemos que aceptas nuestra <a class='txtPolCookies' href='#'>Política de Cookies</a>."); ?></p>
        </div>
<?php
		if($this->request->getController() != "Front"){
?>
        <div id="pageWrap">
            <header id="cabecera">
                <nav class="hideMenu">
                    <div class="col1">
                        <ul>
                            <li><a href="#" class="home items active"><?php print _t("Home"); ?></a></li>
                            <li>
								<ul class="dropMenu">
									<li>
										<a href="#" onClick="return false;"><?php print _t("Colecciones"); ?></a>
										<ul>

											<li><?php print caNavLink($this->request, _t("Patrimonio Artístico"), "", "", "arte", "arte"); ?></li>
											<li class="indent"><?php print caNavLink($this->request, "&middot; "._t("Presentación"), "", "", "arte", "arte"); ?></li>
											<li class="indent"><?php print caNavLink($this->request, "&middot; "._t("Obras de Arte"), "", "", "Browse", "objects", array("facet" => "collection_facet", "id" => "65")); ?></li>
											<li><?php print caNavLink($this->request, _t("Libros"), "subTitleHeading", "", "libros", "libros"); ?></li>
											<li class="indent"><?php print caNavLink($this->request, "&middot; "._t("Biblioteca Dr. Camino"), "", "", "libros", "libros"); ?></li>
											<li class="indent"><?php print caNavLink($this->request, "&middot; "._t("Boletines digitalizados"), "", "", "Browse", "objects", array("facet" => "collection_facet", "id" => "66")); ?></li>
											<li><?php print caNavLink($this->request, _t("Fototeka"), "subTitleHeading", "", "fototeka", "fototeka"); ?></li>
											<li class="indent"><?php print caNavLink($this->request, "&middot; "._t("Presentación"), "", "", "fototeka", "fototeka"); ?></li>
											<li class="indent"><?php print caNavLink($this->request, "&middot; "._t("Colecciones digitalizadas"), "", "", "Search", "objects", array("search" => "ca_objects.type_id:98 OR ca_objects.type_id:265")); ?></li>
										</ul>
									</li>
								</ul>
                            
                            </li>
                            <li>
								<ul class="dropMenu">
									<li>
										<a href="#" onClick="return false;"><?php print _t("Salas"); ?></a>
										<ul>
<?php
											switch($g_ui_locale){
												case "eu_EU":
?>
													<li><a href="http://www.sala-kubo-aretoa.eus/index.php/eu"><?php print _t("Kubo-Kutxa"); ?></a></li>
													<li><?php print caNavLink($this->request, _t("Biblioteca Dr. Camino"), "subTitleHeading", "", "libros", "libros"); ?></li>
<?php
												break;
												# --------------------------------
												case "es_ES":
?>
													<li><a href="http://www.sala-kubo-aretoa.eus/index.php/es"><?php print _t("Kubo-Kutxa"); ?></a></li>
													<li><?php print caNavLink($this->request, _t("Biblioteca Dr. Camino"), "subTitleHeading", "", "libros", "libros"); ?></li>
<?php												
												break;
												# --------------------------------
												case "en_US":
?>
													<li><a href="http://www.sala-kubo-aretoa.eus"><?php print _t("Kubo-Kutxa"); ?></a></li>
													<li><?php print caNavLink($this->request, _t("Biblioteca Dr. Camino"), "subTitleHeading", "", "libros", "libros"); ?></li>
<?php												
												break;
												# --------------------------------
											}
?>
										</ul>
									</li>
								</ul>
                            </li>
                             <li>
								<ul class="dropMenu">
									<li>
										<a href="#" onClick="return false;"><?php print _t("Exposiciones"); ?></a>
										<ul>
<?php
											switch($g_ui_locale){
												case "eu_EU":
?>
													<li><a href="http://www.sala-kubo-aretoa.eus/index.php/eu/erakusketak"><?php print _t("En Sala kubo-kutxa"); ?></a></li>
													<li><a href="http://www.salas-boulevard-aretoak.com/index.php/eu/erakusketak"><?php print _t("En Sala Boulevard"); ?></a></li>
<?php
												break;
												# --------------------------------
												case "es_ES":
?>
													<li><a href="http://www.sala-kubo-aretoa.eus/index.php/es/exposicio"><?php print _t("En Sala kubo-kutxa"); ?></a></li>
													<li><a href="http://www.salas-boulevard-aretoak.com/index.php/es/exposiciones"><?php print _t("En Sala Boulevard"); ?></a></li>
<?php												
												break;
												# --------------------------------
												case "en_US":
?>
													<li><a href="http://www.sala-kubo-aretoa.eus/index.php/es/exposicio"><?php print _t("En Sala kubo-kutxa"); ?></a></li>
													<li><a href="http://www.salas-boulevard-aretoak.com/index.php/es/exposiciones"><?php print _t("En Sala Boulevard"); ?></a></li>
<?php												
												break;
												# --------------------------------
											}
?>
										</ul>
									</li>
								</ul>
                            </li>
                            <li><?php print caNavLink($this->request, _t("Actualidad"), "", "", "Gallery", "Index"); ?></li>
                            <li class="sinborde aireLeft2 mini"><span class="compra items alignLeft"><?php print _t("compras"); ?></span> 2 <?php print _t("elementos"); ?></li>
                            <li class="mini"><a class="active" href="#"><?php print _t("comprar"); ?></a></li>
<?php
							if($this->request->isLoggedIn()){
								$vs_name = trim(mb_substr($this->request->user->get("fname"), 0, 1).". ".$this->request->user->get("lname"));
								if(mb_strlen($vs_name) > 17){
									$vs_name = mb_substr($vs_name, 0, 14)."...";
								}
								print '<li class="sinborde aireLeft mini"><span class="login items alignLeft"></span> '.$vs_name.'</li>';
                            	print '<li class="mini">'.caNavLink($this->request, _t("salir"), "rojo", "", "LoginReg", "logout").'</li>';
							}else{
								print '<li class="sinborde aireLeft mini">'.caNavLink($this->request, _t("Login/Registrar"), "rojo", "", "LoginReg", "registerForm").'</li>';
							}
?>
                            <li class="sinborde aireLeft mini"><?php print caNavLink($this->request, "EU", ($g_ui_locale == "eu_EU") ? "active" : "", "", $this->request->getController(), $this->request->getAction().(($this->request->getActionExtra()) ? "/".$this->request->getActionExtra() : ""), array("lang" => "eu_EU")); ?></li>
                            <li class="mini"><?php print caNavLink($this->request, "ES", ($g_ui_locale == "es_ES") ? "active" : "", "", $this->request->getController(), $this->request->getAction().(($this->request->getActionExtra()) ? "/".$this->request->getActionExtra() : ""), array("lang" => "es_ES")); ?></li>
                            <li class="mini"><?php print caNavLink($this->request, "EN", ($g_ui_locale == "en_US") ? "active" : "", "", $this->request->getController(), $this->request->getAction().(($this->request->getActionExtra()) ? "/".$this->request->getActionExtra() : ""), array("lang" => "en_US")); ?></li>
                        </ul>
                        <p class="pestana"><span class="flechaBlanca"></span> <?php print _t("Menú"); ?></p>
                    </div>
                </nav>
                <div class="col1">
                    <?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'logo2.png'), "", "", "", ""); ?>
                    <form class="buscador alignRight" action="<?php print caNavUrl($this->request, '', 'Search', 'objects'); ?>"><input type="text" value="<?php print _t("Nueva búsqueda"); ?>" name="search"/><input type="submit" class="items lupa" value="<?php print _t("Buscar"); ?>" /></form>
                </div>
             </header>
<script type="text/javascript">
	$(document).ready(function() {
		$('.dropMenu').dropit({
			action: 'hover'
		});
	});
</script>
<?php
		}
?>
	<div class="container">
		<div id="pageArea" <?php print caGetPageCSSClasses(); ?>>
