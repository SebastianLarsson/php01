<?php
/**
 * This is a Anax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the Anax container.
$TSITE['title'] = "404sidan";
$TSITE['header'] = "";
$TSITE['main'] = "Four hundred and four.";
$TSITE['footer'] = "404";

// Send the 404 header 
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Anax.
include(TSITE_THEME_PATH);
