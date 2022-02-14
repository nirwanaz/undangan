<?php

if (!function_exists('tanggal_indo')){
    function tanggal_indo($date, $print_day = false) {
        $days = array(
            1 => 'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu'
        );

        $months = array(
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $split = explode('-', $date);
        $date_indo = $split[2]. ' '.$months[(int)$split[1]]. ' '. $split[0];

        if ($print_day) {
            $num = date('N', strtotime($date));
            return $days[$num]. ', '.$date_indo;
        }

        return $date_indo;
    }
}