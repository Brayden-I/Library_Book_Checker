<?php
    // Validate dates
    function validate_dates($due_date, $return_date) {
        $due = strtotime($due_date);
        $return = strtotime($return_date);
        return $due && $return && ($due <= $return);
    }

    // Check time until due date
    function time_until_due($due_date) {
        $due = strtotime($due_date);
        $now = time();
        return ($due - $now) / (60 * 60 * 24); // days
    }