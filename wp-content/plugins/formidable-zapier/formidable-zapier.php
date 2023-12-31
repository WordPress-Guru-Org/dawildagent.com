<?php
/*
Plugin Name: Formidable Zapier
Description: Integrate with everything through Zapier
Version: 2.01
Plugin URI: https://formidablepro.com/knowledgebase/formidable-zapier/
Author URI: http://strategy11.com
Author: Strategy11
Text Domain: frmzap
*/

include( dirname( __FILE__ ) . '/controllers/FrmZapAppController.php' );
FrmZapAppController::load_hooks();

include( dirname( __FILE__ ) . '/controllers/FrmZapApiController.php' );
FrmZapApiController::load_hooks();
