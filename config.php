<?php

// ob_start function ensures the entire page is read to eliminate header errors
ob_start();

date_default_timezone_set('America/Los_Angeles');

// Constant
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// Navigation switch
switch (THIS_PAGE) {
    case 'index.php';
    $title = 'Natasha\'s Portal Page';
    $body = 'home';
    $logo = 'fa-home';
    break;

    case 'big.php';
    $title = 'Big Project';
    $body = 'big inner';
    $logo = 'fa-home';
    break;

    case 'aia.php';
    $title = 'AIA';
    $body = 'aia inner';
    $logo = 'fa-universal-access';
    break;

    case 'flowchart.php';
    $title = 'Flowchart';
    $body = 'flowchart inner';
    $logo = 'fa-home';
    break;

    case 'final.php';
    $title = 'Final Project';
    $body = 'final inner';
    $logo = 'fa-home';
    break;

    case 'contactme.php';
    $title = 'Contact Natasha';
    $body = 'contact inner';
    $logo = 'fa-paper-plane';
    break;

    case '.php';
    $title = '';
    $body = ' inner';
    $logo = '';
    break;

    case '.php';
    $title = '';
    $body = ' inner';
    $logo = '';
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