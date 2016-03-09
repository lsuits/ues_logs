<?php

$observers = array(
 
    array(
        'eventname'   => '\enrol_ues\event\ues_student_released',
        'callback'    => 'block_ues_logs_observer::ues_student_released',
    ),

    array(
        'eventname'   => '\enrol_ues\event\ues_student_accepted',
        'callback'    => 'block_ues_logs_observer::ues_student_accepted',
    ),

    array(
        'eventname'   => '\enrol_ues\event\ues_section_dropped',
        'callback'    => 'block_ues_logs_observer::ues_section_dropped',
    ),
 
);