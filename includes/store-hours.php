<?php

    date_default_timezone_set('Europe/Lisbon');
   
    $hours = array (
        'mon' => array('00:00-00:00'),
        'tue' => array('13:00-21:00'),
        'wed' => array('13:00-21:00'),
        'thu' => array('13:00-21:00'), 
        'fri' => array('16:00-23:00'),
        'sat' => array('16:00-23:00'),
        'sun' => array('00:00-00:00') 
    );

    $exceptions = array(
        'Christmas' => '12/25',
        'New Years Day' => '1/1'
    );

    $open_now = "<strong class='open'>Yes, we're open! Today's hours are %open% until %closed%.</strong>";
    $closed_now = "<strong class='closed'>Sorry, we're closed. Today's hours are %open% until %closed%.</strong>";
    $closed_all_day = "<strong class='closed'>Sorry, we're closed on %day%.</strong>";
    $exception = "<strong class='closed'>Sorry, we're closed for %exception%.</strong>";

    $time_format = 'g:ia';

    $days = array(
        'mon' => 'Mondays',
        'tue' => 'Tuesdays',
        'wed' => 'Wednesdays',
        'thu' => 'Thursdays',
        'fri' => 'Fridays',
        'sat' => 'Saturdays',
        'sun' => 'Sundays',
    );

    $day = strtolower(date("D"));
    $today = strtotime('today midnight');
    $now = strtotime(date("G:i"));
    $is_open = 0;
    $is_exception = false;
    $is_closed_all_day = false;

    if($hours[$day][0] == '00:00-00:00') {
        $is_closed_all_day = true;
    }
?>
        
