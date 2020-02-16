<?php
/**
 *  @author: Gianck Luiz
 *  @url: http://github.com/humolot
 *  Resize Bulk Images using GD Library
 */

require_once ('class.imageresizer.php');


// SPLASH
$items = array(
    array(
        'height'    => 960,
        'width'     => 640,
        'image_name' => 'Iphone.png'
    ),
    array(
        'height'    => 1600,
        'width'     => 960,
        'image_name' => 'Android.png'
    )
);


/* //EXAMPLE ICONS 
$items = array(
    array(
        'height'    => 96,
        'width'     => 96,
        'image_name' => '96.png'
    ),
    array(
        'height'    => 196,
        'width'     => 196,
        'image_name' => '196.png'
    ),
    array(
        'height'    => 512,
        'width'     => 512,
        'image_name' => '512.png'
    )
);
*/

foreach($items as $i){
    $img = new ImageResizer($i);
    $img->create();
}