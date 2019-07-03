<?php

    /*
     *    === Define the Path ===
    */
    defined('MARIANN_IPANEL_PATH') ||
    
        define( 'MARIANN_IPANEL_PATH' , get_template_directory() . '/inc/ipanel/' );

    /*
     *    === Define the Version of iPanel ===
    */
    define( 'MARIANN_IPANEL_VERSION' , '1.1' );    
    

    
    /*
     *    === Define the Classes Path ===
    */
    if ( defined('MARIANN_IPANEL_PATH') ) {
        define( 'MARIANN_IPANEL_CLASSES_PATH' , MARIANN_IPANEL_PATH . 'classes/' );
    } else {

        define( 'MARIANN_IPANEL_CLASSES_PATH' , get_template_directory() . '/inc/ipanel/classes/' );
    }
    
    function mariann_iPanelLoad(){
        require_once MARIANN_IPANEL_CLASSES_PATH . 'ipanel.class.php';
		if( file_exists(MARIANN_IPANEL_PATH . 'options.php') )
			require_once MARIANN_IPANEL_PATH . 'options.php';
    }
    
    if ( defined('MARIANN_IPANEL_PLUGIN_USAGE') ) {
        if ( MARIANN_IPANEL_PLUGIN_USAGE === true ) {
            add_action('plugins_loaded', 'mariann_iPanelLoad');
        } else {
            add_action('init', 'mariann_iPanelLoad');
        }
    } else {
        add_action('init', 'mariann_iPanelLoad');
    }