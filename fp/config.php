<?php

// ob_start function ensures the entire page is read to eliminate header errors
ob_start();

date_default_timezone_set('America/Los_Angeles');

// Constant
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// Navigation switch
switch (THIS_PAGE) {
    case 'index.php';
    $title = 'Seattle Women\'s Flag Football';
    $body = 'home';
    break;

    case 'schedule.php';
    $title = 'Schedule';
    $body = 'schedule inner';
    break;

    case 'standings.php';
    $title = 'Standings';
    $body = 'standings inner';
    break;

    case 'rulebook.php';
    $title = 'Rule Book';
    $body = 'rulebook inner';
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
    'index.php#field' => 'On The Field',
    'index.php#faq' => 'FAQ',
    'index.php#mission' => 'Mission',
    'index.php#board' => 'Board Members',
    'index.php#contact' => 'Contact'
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