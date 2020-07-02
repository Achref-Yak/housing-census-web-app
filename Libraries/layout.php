<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Layout {

    private $CI;
    private $var = array();
    private $theme = 'front';

    /*
      |===============================================================================
      | Constructeur
      |===============================================================================
     */

    public function __construct() {
        $this->CI = & get_instance();

        $this->var['output'] = '';

        //	Le titre est compos� du nom de la m�thode et du nom du contr�leur
        //	La fonction ucfirst permet d'ajouter une majuscule
        $this->var['titre'] = ucfirst($this->CI->router->fetch_method()) . ' - ' . ucfirst($this->CI->router->fetch_class());
        $this->var['description'] = "";
        $this->var['page'] = "";
        $this->var['keywords'] = "";
        //	Nous initialisons la variable $charset avec la m�me valeur que
        //	la cl� de configuration initialis�e dans le fichier config.php
        $this->var['charset'] = $this->CI->config->item('charset');
        //id page par défault
        $this->var['charset'] = $this->CI->config->item('charset');
        $this->var['css'] = array();
        $this->var['js'] = array();
        $this->var['id_page'] = ucfirst($this->CI->router->fetch_method()) . '-' . ucfirst($this->CI->router->fetch_class());
    }

    /*
      |===============================================================================
      | M�thodes pour charger les vues
      |	. view
      |	. views
      |===============================================================================
     */

    public function view($name, $data = array()) {
        $this->var['output'] .= $this->CI->load->view($name, $data, true);

        $this->CI->load->view('../themes/' . $this->theme, $this->var);
    }

    /**
     * Charger les vue est les stoches dans un variable
     * @param type $name
     * @param type $data
     * @return \Layout 
     */
    public function views($name, $data = array()) {
        $this->var['output'] .= $this->CI->load->view($name, $data, true);
        return $this;
    }

    /*
      |===============================================================================
      | M�thodes pour modifier les variables envoy�es au layout
      |	. set_titre
      |	. set_charset                                                                    
      |===============================================================================
     */

    public function set_titre($titre) {
        if (is_string($titre) AND !empty($titre)) {
            $this->var['titre'] = $titre;
            return true;
        }
        return false;
    }

    public function set_description($desc) {
        if (is_string($desc) AND !empty($desc)) {
            $this->var['description'] = $desc;
            return true;
        }
        return false;
    }

    
    public function set_page($page){
        
        if (is_string($page) AND !empty($page)) {
            $this->var['page'] = $page;
            return true;
        }
        return false; 
    }
    
    /**
     *
     * @param type $key
     * @return boolean 
     */
    public function set_keywords($key) {
        if (is_string($key) AND !empty($key)) {
            $this->var['keywords'] = $key;
            return true;
        }
        return false;
    }

    public function set_menu($items) {

        if (is_array($items)) {

            $this->var['items'] = $items;
            return true;
        }
        return false;
    }

    public function set_charset($charset) {
        if (is_string($charset) AND !empty($charset)) {
            $this->var['charset'] = $charset;
            return true;
        }
        return false;
    }

    public function set_idPage($id_page) {
        if (is_string($id_page) AND !empty($id_page)) {
            $this->var['id_page'] = $id_page;
            return true;
        }
        return false;
    }

    /*
      |===============================================================================
      | M�thodes pour ajouter des feuilles de CSS et de JavaScript
      |	. ajouter_css
      |	. ajouter_js
      |===============================================================================
     */

    public function ajouter_css($nom) {
        if (is_string($nom) AND !empty($nom) AND file_exists('./themes/css/' . $nom . '.css')) {
            $this->var['css'][] = css_url($nom);
            return true;
        }
        return false;
    }

    public function ajouter_js($nom) {

        if (is_string($nom) AND !empty($nom) AND file_exists('./themes/js/' . $nom . '.js')) {
            $this->var['js'][] = $nom;
            return true;
        }
        return false;
    }

    public function set_theme($theme) {
        if (is_string($theme) AND !empty($theme) AND file_exists('./application12az45/themes/' . $theme . '.php')) {
            $this->theme = $theme;
            return true;
        }
        return false;
    }

}
