<?php
/*
Plugin Name: CI-CD
Plugin URI: http://98.81.83.79:80/
Description: Plugin de prueba para CI/CD
Version: 1.0
Author: Tu Nombre
Author URI: http://98.81.83.79:80/
*/

function cicd_saludo() {
    echo '<p>Hola! Este es mi plugin CI-CD activo. Prueba Semestral</p>';
}

add_action('wp_footer', 'cicd_saludo');
