<?php
/**
 * Header-v1 template.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       http://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<div class="fusion-header-sticky-height"></div>
<nav id="navbar" class="navbar-fixed-top">
<div class="container" style="width:90%;">
	<div class="row">
		<?php if ( 'flyout' === Avada()->settings->get( 'mobile_menu_design' ) ) : ?>
			<div class="fusion-header-has-flyout-menu-content">
		<?php endif; ?>
		<div class="navbar-header">
      <button type="button" class="navbar-toggle" href="javascript:void(0)" onclick="myFunction()">
        <i class="fas fa-align-justify"></i>                        
      </button>
      <?php avada_logo(); ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
   <?php avada_main_menu(); ?>
    </div>
		
		
		<?php if ( 'flyout' === Avada()->settings->get( 'mobile_menu_design' ) ) : ?>
			</div>
		<?php endif; ?> 
	</div>
</div>
</nav>
     <script type="text/javascript">
         function myFunction() {
             var x = document.getElementById("myNavbar");
             if (x.className.indexOf("w3-show") == -1) {
                 x.className += " w3-show";
                 document.getElementById("iconom").classList.add('fa-times');
                 document.getElementById("iconom").classList.remove('fa-align-justify');
             } else { 
                 x.className = x.className.replace(" w3-show", "");
                 document.getElementById("iconom").classList.add('fa-align-justify');
                 document.getElementById("iconom").classList.remove('fa-times');
             }
         }
         
      </script>