<?php

if (!function_exists('generate_id')) {
    function generate_id($init) {
        $date = new DateTime();
        $timestamp = $date->getTimestamp();

        if (strlen($init) !== 1) {
            $init = substr($init, 0, 1);
        }

        $id = strtolower($init).$timestamp;

        return $id;
    }
}