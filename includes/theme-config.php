<?php

/* 
 * Configuración del theme:
 * Ajustes globales
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
if( !class_exists( 'TH_DV_Setup' ) ) {
	final class TH_DV_Setup{
		private static $instance;

		public static function instance() {
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof TH_DV_Setup ) ) {
				self::$instance = new TH_DV_Setup();
			}
			return self::$instance;
		}

		public function setup(){
			/** Cargar las constantes paara las rutas */
			$this->constants();

			/** Incluir los archivos principales */
			$this->includes();
                        add_action( 'wp_enqueue_scripts', array($this,'add_scripts' ));
		}
                public function add_scripts(){
                    //Tailwind global
                    if (USE_TAILWIND) {
                        //Tailwind by CDN install
                        wp_register_script('DV-Tailwind', TAILWIND_SRC);
                        wp_enqueue_script( 'DV-Tailwind');
                        //Tailwind theme config
                        wp_register_script('DV-Tailwind-theme-config', TH_DV_ASSETS_URL . 'js/tailwind-theme-config.js');
                        wp_enqueue_script( 'DV-Tailwind-theme-config');
                    }
                    //OWL Carrusel
                    if (is_page('portfolio')) {
                        wp_register_script('DV-OWL', TH_DV_ASSETS_URL . 'js/owl.carousel.min.js', array('jquery'), null, true) ;
                        wp_enqueue_script( 'DV-OWL');
                        
                        //Config in portfolio.js
                        
                        wp_register_style('DV-OWL-CSS', TH_DV_ASSETS_URL . 'css/carousel/owl.carousel.min.css', array(), null, 'all');
                        wp_enqueue_style('DV-OWL-CSS');
                        
                        wp_register_style('DV-OWL-DEFAULT-CSS', TH_DV_ASSETS_URL . 'css/carousel/owl.theme.default.min.css', array(), null, 'all');
                        wp_enqueue_style('DV-OWL-DEFAULT-CSS');
                    }
                    //Portfolio
                    if (is_page('portfolio')) {
                        wp_register_script('DV-PORTFOLIO-JS', TH_DV_ASSETS_URL . 'js/portfolio/portfolio.js', array('jquery'), null, true);
                        wp_enqueue_script('DV-PORTFOLIO-JS');
                        
                        wp_register_style('DV-PORTFOLIO-CSS', TH_DV_ASSETS_URL . 'css/portfolio/portfolio.css', array(), null, 'all');
                        wp_enqueue_style('DV-PORTFOLIO-CSS');
                    }
                }

		protected function constants() {
			if ( ! defined( 'TH_DV_THEME' ) ) {
                            define('TH_DV_THEME', get_template_directory() . '/');
                        }
                        if ( ! defined( 'TH_DV_VERSION' ) ) {
                            define('TH_DV_VERSION', '4.0.0');
                        }
                        if ( ! defined( 'TH_DV_INC' ) ) {
                            define('TH_DV_INC', TH_DV_THEME . 'includes' . '/');
                        }
                        if ( ! defined( 'TH_DV_ASSETS' ) ) {
                            define('TH_DV_ASSETS', TH_DV_THEME . 'assets' . '/');
                        }
                        if ( ! defined( 'TH_DV_URL' ) ) {
                            define('TH_DV_URL', get_template_directory_uri() . '/'); // Usa la URL del tema
                        }
                        if ( ! defined( 'TH_DV_ASSETS_URL' ) ) {
                            define('TH_DV_ASSETS_URL', TH_DV_URL . 'assets' . '/'); // Usa la URL del tema para assets
                        }
		}

		protected function includes() {
                    require_once(TH_DV_INC.'global-constants.php');
		}

		
	}
}



function TH_SETUP() {
	return TH_DV_Setup::instance();
}