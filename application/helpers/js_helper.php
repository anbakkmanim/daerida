<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// ------------------------------------------------------------------------

function alert($msg, $url=null)
{
    echo '<script type="text/javascript">';
    echo 'alert("'.$msg.'");';

    if ($url != null):
        echo "location.href = '$url'";
    endif;

    echo '</script>';
}


function location_href($url) {
    echo '<script type="text/javascript">';
	echo "location.href = '$url'";
	echo '</script>';
}