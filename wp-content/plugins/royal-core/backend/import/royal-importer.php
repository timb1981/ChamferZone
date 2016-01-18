<?php // One-Click Importer

// Include Design Activation Code
require_once( plugin_dir_path(__FILE__) .'data/design-activation.php');
require_once( plugin_dir_path(__FILE__) .'data/post-formats-import.php');

function royal_import() {

    global $wpdb;

    if ( !defined('WP_LOAD_IMPORTERS') ) {
        define('WP_LOAD_IMPORTERS', true);
    }

    // Load Importer API
    require_once ABSPATH . 'wp-admin/includes/import.php';

    if ( ! class_exists( 'WP_Importer' ) ) {
        $class_wp_importer = ABSPATH . 'wp-admin/includes/class-wp-importer.php';
        if ( file_exists( $class_wp_importer ) ) {
            require $class_wp_importer;
        }
    }

    if ( ! class_exists( 'WP_Import' ) ) {
        $class_wp_importer = plugin_dir_path(__FILE__ ) ."wordpress-importer.php";
        if ( file_exists( $class_wp_importer ) ) {
            require $class_wp_importer;
        }
    }

    if ( class_exists( 'WP_Import' ) ) {

        // get selected design group
        $select_group = get_option( 'select_group' );

        // Import Demo Content
        $import_filepath = plugin_dir_path(__FILE__ ) ."data/";
        $wp_import = new WP_Import();
        $wp_import->fetch_attachments = true;
        $current_design = '';

        set_time_limit(0);
        ob_start();

            $current_design = $_POST['design'];

            if ( $select_group === 'default' ) {
                 $import_filepath .= 'default/'. $current_design .'/';
            }

            $wp_import->import($import_filepath . 'hyperx_'. $current_design .'.xml');

            // Define HomePage/BlogPage
            if ( $current_design === 'jupiter' ) {
                $front_page_title = 'Work 1';
                $posts_page_title = 'Blog';          
            } elseif ( $current_design === 'hecate' ) {
                $front_page_title = 'Home';
                $posts_page_title = 'Sample';          
            } else {
                $front_page_title = 'Portfolio';
                $posts_page_title = 'Blog';          
            }

            // Import Widgets
            $widget_file_path = $import_filepath .'/hyperx_'. $current_design .'_widgets.wie';

            // Import Revslider 
            $revslider_path = $import_filepath .'rev_sliders/';

        ob_end_clean();


        // set post formats
        royal_post_formats_import( $current_design );


        // Set Navigation Menu
        $menu_locations = get_theme_mod('nav_menu_locations');
        $nav_menus      = wp_get_nav_menus();

        if ($nav_menus) {
            foreach ( $nav_menus as $nav_menu ) {
                if ( $nav_menu->name == 'Main' ) {
                    $menu_locations['sidebar-menu'] = $nav_menu->term_id;
                } elseif ( $nav_menu->name == 'Top Left' ) {
                    $menu_locations['top-left-menu'] = $nav_menu->term_id;
                } elseif ( $nav_menu->name == 'Top Right' ) {
                    $menu_locations['top-right-menu'] = $nav_menu->term_id;
                }
            }
        }

        set_theme_mod('nav_menu_locations', $menu_locations);


        // Set HomePage/BlogPage
        $front_page = get_page_by_title( $front_page_title );
        $posts_page = get_page_by_title( $posts_page_title );
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page->ID );
        update_option( 'page_for_posts', $posts_page->ID );


        // Import Widgets
        royal_widgets_import( $widget_file_path );


        // Import Revslider
        royal_revslider_import( $revslider_path );

    } else {
        // error message
        echo 'Error Loading Files!';
    }
    
    die();

}

add_action( 'wp_ajax_royal_import', 'royal_import' );


// Widget Import Function
function royal_widgets_import( $file_path ) {

    if ( ! file_exists($file_path) ) {
        return;
    }

    // get import file and convert to array
    $widgets_wie  = file_get_contents( $file_path );
    $widgets_json = json_decode($widgets_wie, true);

    // get active widgets
    $active_widgets = get_option('sidebars_widgets');
    $active_widgets['sidebar-widgets'] = array();
    $active_widgets['top-widgets'] = array();
    $active_widgets['footer-widgets'] = array();

    // import Sidebar Widgets
    $counter = 0;
    if ( isset($widgets_json['sidebar-widgets']) ) {
        foreach( $widgets_json['sidebar-widgets'] as $widget_id => $widget_data ) {

            // separate widget id/number
            $instance_id     = preg_replace( '/-[0-9]+$/', '', $widget_id );
            $instance_number = str_replace( $instance_id .'-', '', $widget_id );

            if ( ! get_option('widget_'. $instance_id) ) {

                // if is a single widget
                $update_arr = array(
                    $instance_number => $widget_data,
                    '_multiwidget' => 1
                );

            } else {

                // if there are multiple widgets
                $update_arr = get_option('widget_'. $instance_id);
                $update_arr[$instance_number] = $widget_data;

            }

            // update widget data
            update_option( 'widget_' . $instance_id, $update_arr );
            $active_widgets['sidebar-widgets'][$counter] = $widget_id;
            $counter++;

        }
    }

    // import Top Widgets
    $counter = 0;
    if ( isset($widgets_json['top-widgets']) ) {
        foreach( $widgets_json['top-widgets'] as $widget_id => $widget_data ) {

            // separate widget id/number
            $instance_id     = preg_replace( '/-[0-9]+$/', '', $widget_id );
            $instance_number = str_replace( $instance_id .'-', '', $widget_id );

            if ( ! get_option('widget_'. $instance_id) ) {

                // if is a single widget
                $update_arr = array(
                    $instance_number => $widget_data,
                    '_multiwidget' => 1
                );

            } else {

                // if there are multiple widgets
                $update_arr = get_option('widget_'. $instance_id);
                $update_arr[$instance_number] = $widget_data;

            }

            // update widget data
            update_option( 'widget_' . $instance_id, $update_arr );
            $active_widgets['top-widgets'][$counter] = $widget_id;
            $counter++;

        }
    }

    // import Footer Widgets
    $counter = 0;
    if ( isset($widgets_json['footer-widgets']) ) {
        foreach( $widgets_json['footer-widgets'] as $widget_id => $widget_data ) {

            // separate widget id/number
            $instance_id     = preg_replace( '/-[0-9]+$/', '', $widget_id );
            $instance_number = str_replace( $instance_id .'-', '', $widget_id );

            if ( ! get_option('widget_'. $instance_id) ) {

                // if is a single widget
                $update_arr = array(
                    $instance_number => $widget_data,
                    '_multiwidget' => 1
                );

            } else {

                // if there are multiple widgets
                $update_arr = get_option('widget_'. $instance_id);
                $update_arr[$instance_number] = $widget_data;

            }

            // update widget data
            update_option( 'widget_' . $instance_id, $update_arr );
            $active_widgets['footer-widgets'][$counter] = $widget_id;
            $counter++;
            
        }
    }

    update_option( 'sidebars_widgets', $active_widgets );

}


// Revslider Import Function
// Code snippet from Revslider Plugin
function royal_revslider_import( $revslider_path ) {

    if ( ! file_exists($revslider_path) ) {
        return;
    }

    global $wpdb;

    if ( class_exists('UniteFunctionsRev') ) {

        // get zip files
        foreach ( glob( $revslider_path .'*.zip' ) as $filename ) {
            $filename = basename( $filename );
            $revslider_archives[] = $revslider_path . $filename;
        }

        foreach( $revslider_archives as $revslider_archive ) { // finally import rev slider data files

                $filepath = $revslider_archive;

                // check if zip file or fallback to old, if zip, check if all files exist
                if ( ! class_exists( "ZipArchive" ) ) {
                    $importZip = false;
                } else {
                    $zip = new ZipArchive;
                    $importZip = $zip->open( $filepath, ZIPARCHIVE::CREATE );
                }

                if ( $importZip === true ) { // true or integer. If integer, its not a correct zip file

                    // check if files all exist in zip
                    $slider_export      = $zip->getStream('slider_export.txt');
                    $custom_animations  = $zip->getStream('custom_animations.txt');
                    $dynamic_captions   = $zip->getStream('dynamic-captions.css');
                    $static_captions    = $zip->getStream('static-captions.css');

                    $content    = '';
                    $animations = '';
                    $dynamic    = '';
                    $static     = '';

                    while ( ! feof($slider_export) ) {
                        $content .= fread($slider_export, 1024);
                    }
                    if ($custom_animations) {
                        while ( ! feof($custom_animations) ) {
                            $animations .= fread($custom_animations, 1024);
                        }
                    }
                    if ($dynamic_captions) {
                        while ( ! feof($dynamic_captions) ) {
                            $dynamic .= fread($dynamic_captions, 1024);
                        }
                    }
                    if ($static_captions) {
                        while ( ! feof($static_captions) ) {
                            $static .= fread($static_captions, 1024);
                        }
                    }

                    fclose($slider_export);
                    if ($custom_animations) {
                        fclose($custom_animations);
                    }
                    if ($dynamic_captions) {
                        fclose($dynamic_captions);
                    }
                    if ($static_captions) {
                        fclose($static_captions); 
                    }

                } else{ //check if fallback
                    //get content array
                    $content = @file_get_contents($filepath);
                }

                if ( $importZip === true ) { //we have a zip
                    $db = new UniteDBRev();

                    //update/insert custom animations
                    $animations = @unserialize($animations);
                    if( ! empty($animations) ) {
                        foreach ( $animations as $key => $animation ) { //$animation['id'], $animation['handle'], $animation['params']
                            $exist = $db->fetch(GlobalsRevSlider::$table_layer_anims, "handle = '". $animation['handle'] ."'");
                            if ( ! empty($exist) ) { //update the animation, get the ID
                                $arrUpdate = array();
                                $arrUpdate['params'] = stripslashes(json_encode(str_replace("'", '"', $animation['params'])));
                                $db->update(GlobalsRevSlider::$table_layer_anims, $arrUpdate, array('handle' => $animation['handle']));

                                $id = $exist['0']['id'];
                            } else { //insert the animation, get the ID
                                $arrInsert = array();
                                $arrInsert["handle"] = $animation['handle'];
                                $arrInsert["params"] = stripslashes(json_encode(str_replace("'", '"', $animation['params'])));

                                $id = $db->insert(GlobalsRevSlider::$table_layer_anims, $arrInsert);
                            }

                            //and set the current customin-oldID and customout-oldID in slider params to new ID from $id
                            $content = str_replace(array('customin-'.$animation['id'], 'customout-'.$animation['id']), array('customin-'.$id, 'customout-'.$id), $content);
                        }
                    }

                    //overwrite/append static-captions.css
                    if ( ! empty($static) ) {
                        $static_cur = RevOperations::getStaticCss();
                        $static = $static_cur."\n".$static;
                        RevOperations::updateStaticCss($static);
                    }
                    //overwrite/create dynamic-captions.css
                    //parse css to classes
                    $dynamicCss = UniteCssParserRev::parseCssToArray($dynamic);

                    if ( is_array($dynamicCss) && $dynamicCss !== false && count($dynamicCss) > 0 ) {
                        foreach($dynamicCss as $class => $styles){
                            //check if static style or dynamic style
                            $class = trim($class);

                            if ( (strpos($class, ':hover') === false && strpos($class, ':') !== false ) || //before, after
                                strpos($class," ") !== false || // .tp-caption.imageclass img or .tp-caption .imageclass or .tp-caption.imageclass .img
                                strpos($class,".tp-caption") === false || // everything that is not tp-caption
                                (strpos($class,".") === false || strpos($class,"#") !== false) || // no class -> #ID or img
                                strpos($class,">") !== false){ //.tp-caption>.imageclass or .tp-caption.imageclass>img or .tp-caption.imageclass .img
                                continue;
                            }

                            //is a dynamic style
                            if ( strpos($class, ':hover') !== false ) {
                                $class = trim(str_replace(':hover', '', $class));
                                $arrInsert = array();
                                $arrInsert["hover"] = json_encode($styles);
                                $arrInsert["settings"] = json_encode(array('hover' => 'true'));
                            } else {
                                $arrInsert = array();
                                $arrInsert["params"] = json_encode($styles);
                            }
                            //check if class exists
                            $result = $db->fetch(GlobalsRevSlider::$table_css, "handle = '".$class."'");

                            if ( ! empty($result) ) { //update
                                $db->update(GlobalsRevSlider::$table_css, $arrInsert, array('handle' => $class));
                            } else { //insert
                                $arrInsert["handle"] = $class;
                                $db->insert(GlobalsRevSlider::$table_css, $arrInsert);
                            }
                        }
                    }
                }

                $content = preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $content); //clear errors in string

                $arrSlider = @unserialize($content);
                $sliderParams = $arrSlider["params"];

                if ( isset($sliderParams["background_image"]) ) {
                    $sliderParams["background_image"] = UniteFunctionsWPRev::getImageUrlFromPath($sliderParams["background_image"]);
                }

                $json_params = json_encode($sliderParams);

                //new slider
                $arrInsert = array();
                $arrInsert["params"] = $json_params;
                $arrInsert["title"] = UniteFunctionsRev::getVal($sliderParams, "title","Slider1");
                $arrInsert["alias"] = UniteFunctionsRev::getVal($sliderParams, "alias","slider1");
                $sliderID = $wpdb->insert(GlobalsRevSlider::$table_sliders,$arrInsert);
                $sliderID = $wpdb->insert_id;

                //-------- Slides Handle -----------

                //create all slides
                $arrSlides = $arrSlider["slides"];

                $alreadyImported = array();

                foreach ( $arrSlides as $slide ) {

                    $params = $slide["params"];
                    $layers = $slide["layers"];

                    //convert params images:
                    if ( isset($params["image"]) ) {
                        //import if exists in zip folder
                        if ( trim($params["image"] ) !== '') {
                            if ( $importZip === true ) { //we have a zip, check if exists
                                $image = $zip->getStream('images/'.$params["image"]);
                                if ( ! $image ) {
                                    // echo 'Not Found';
                                } else {
                                    if ( ! isset($alreadyImported['zip://'.$filepath."#".'images/'.$params["image"]]) ) {
                                        $importImage = UniteFunctionsWPRev::import_media('zip://'.$filepath."#".'images/'.$params["image"], $sliderParams["alias"].'/');

                                        if ( $importImage !== false ) {
                                            $alreadyImported['zip://'.$filepath."#".'images/'.$params["image"]] = $importImage['path'];

                                            $params["image"] = $importImage['path'];
                                        }
                                    } else {
                                        $params["image"] = $alreadyImported['zip://'.$filepath."#".'images/'.$params["image"]];
                                    }
                                }
                            }
                        }
                        $params["image"] = UniteFunctionsWPRev::getImageUrlFromPath($params["image"]);
                    }

                    //convert layers images:
                    foreach ( $layers as $key => $layer ) {

                        if( isset($layer["image_url"]) ) {

                            //import if exists in zip folder
                            if( trim($layer["image_url"]) !== '' ) {
                                if ( $importZip === true ) { //we have a zip, check if exists
                                    $image_url = $zip->getStream('images/'.$layer["image_url"]);
                                    if ( ! $image_url ) {
                                        // echo 'Not Found';
                                    } else {
                                        if ( ! isset($alreadyImported['zip://'.$filepath."#".'images/'.$layer["image_url"]]) ) {

                                            $importImage = UniteFunctionsWPRev::import_media('zip://'.$filepath."#".'images/'.$layer["image_url"], $sliderParams["alias"].'/');

                                            if ( $importImage !== false ) {
                                                $alreadyImported['zip://'.$filepath."#".'images/'.$layer["image_url"]] = $importImage['path'];

                                                $layer["image_url"] = $importImage['path'];
                                            }

                                        } else {
                                            $layer["image_url"] = $alreadyImported['zip://'.$filepath."#".'images/'.$layer["image_url"]];
                                        }
                                    }
                                }
                            }

                            $layer["image_url"] = UniteFunctionsWPRev::getImageUrlFromPath($layer["image_url"]);
                            $layers[$key] = $layer;

                        }

                    }

                    //create new slide
                    $arrCreate = array();
                    $arrCreate["slider_id"] = $sliderID;
                    $arrCreate["slide_order"] = $slide["slide_order"];
                    $arrCreate["layers"] = json_encode($layers);
                    $arrCreate["params"] = json_encode($params);

                    $wpdb->insert(GlobalsRevSlider::$table_slides,$arrCreate);
                }
        }
    }

} // end revslider import