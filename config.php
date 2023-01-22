<?php

// ob_start function ensures the entire page is read to eliminate header errors
ob_start();

// Constant
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// Navigation switch
switch (THIS_PAGE) {
    case 'index.php';
    $title = 'Natasha\'s Portal Page';
    $body = 'home';
    break;

    case 'big.php';
    $title = 'Big Project';
    $body = 'big inner';
    break;

    case 'aia.php';
    $title = 'AIA';
    $body = 'aia inner';
    break;

    case 'flowchart.php';
    $title = 'Flowchart';
    $body = 'flowchart inner';
    break;

    case 'final.php';
    $title = 'Final Project';
    $body = 'final inner';
    break;

    case 'contactme.php';
    $title = 'Contact Natasha';
    $body = 'contact inner';
    break;

    case '.php';
    $title = '';
    $body = ' inner';
    break;

    case '.php';
    $title = '';
    $body = ' inner';
    break;
}

// Navigation
$nav = array(
    'index.php' => 'Home',
    'big/index.php' => 'BIG',
    'aia.php' => 'AIA',
    'flowchart.php' => 'Flowchart',
    'fp/index.php' => 'Final Project',
    'contactme.php' => 'Contact'
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        $my_return .= '<a class="current" href=" '.$key.' "> '.$value.' </a>';
    } else {
        $my_return .= '<a href=" '.$key.' "> '.$value.' </a>';
    }

    } // end foreach

    return $my_return;
} // end function