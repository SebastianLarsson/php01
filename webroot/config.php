<?php

error_reporting(-1);
ini_set('display errors',1);
ini_set('output_buffering',0);

define('TSITE_INSTALL_PATH',__DIR__ . '/..');
define('TSITE_THEME_PATH',TSITE_INSTALL_PATH. 'theme/render.php');

include(TSITE_INSTALL_PATH . '/src/bootstrap.php');


session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();

$tsite = array();

$tsite['lang'] = 'sv';
$tsite['title_append'] = ' | Site template template';
$tsite['stylesheet'] = 'css/stylesheet.css';
$tsite['favicon'] = 'favicon.ico';
