<?php

class MantisBTModernThemePlugin extends MantisPlugin {

  function register() {
    $this->name        = 'SWG - OR Theme';
    $this->description = 'A SWG theme for MantisBT.';

    $this->version     = '1.0.0';
    $this->requires    = array(
      'MantisCore'       => '2.27',
    );

    $this->author      = 'SWG - OR';
    $this->contact     = 'contact@swgor.com';
    $this->url         = 'https://swgor.com';
  }

  function hooks() {
    return array(
        'EVENT_LAYOUT_RESOURCES' => 'add_css'
    );
  }

    function add_css($p_event) {
        echo '<link rel="stylesheet" type="text/css" href="files/ModernTheme.css" />' . "\n";
    }


}