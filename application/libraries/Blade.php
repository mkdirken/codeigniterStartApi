<?php

use duncan3dc\Laravel\BladeInstance;

class Blade{

    public function minify($buffer){
        $search = array(
            '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
            '/[^\S ]+\</s',     // strip whitespaces before tags, except space
            '/(\s)+/s',         // shorten multiple whitespace sequences
            '/<!--(.|\s)*?-->/' // Remove HTML comments
        );
        $replace = array(
            '>',
            '<',
            '\\1',
            ''
        );
        $buffer = preg_replace($search, $replace, $buffer);
        return $buffer;
    }

    /**
     * @var
     */
    private $theme_directory;

    /**
     * @var
     */
    private $current_theme;
    /**
     * @var CI_Controller
     */

    private $ci;
    /**
     * Theme constructor.
     */

    public function __construct(){
        $this->ci = &get_instance();
        $this->theme_directory = config_item('theme_directory');
        $this->current_theme = config_item('theme_default');
        if(config_item('composer_autoload') == false){
            require_once config_item('blade_engine');
        }
    }

    /**
     * @param $theme
     * @return $this
     */

    public function setTheme($theme){
        $this->current_theme = $theme;
        return $this;
    }

    /**
     * @param string $view
     * @param array $data
     */

    public function display($view, $data = array(),$EXIT=true){
        $dir = $this->_get_theme_dir();
        $blade = new BladeInstance($dir, APPPATH.'cache/');
        echo $output = $this->minify($blade->render($view,$data));
        if($EXIT){
            exit();
        }
    }


    /**
     * @return mixed
     */
    public function getCurrentTheme(){
        return $this->current_theme;
    }

    public function getThemeUrl(){
        return site_url('themes/'.$this->current_theme.'/');
    }

    /**
     * @return string
     */
    private function _get_theme_dir(){
        $dir = rtrim($this->theme_directory,'/');
        $dir = $dir.'/'.$this->current_theme.'/';
        return $dir;

    }
}

