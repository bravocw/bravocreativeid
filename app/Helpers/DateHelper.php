<?php

use Carbon\Carbon;

if (!function_exists('berita_time')) {
    function berita_time($datetime, ?string $timezone = 'Asia/Jakarta'): string
    {
        if (empty($datetime)) {
            return '-';
        }

        try {
            $time = $datetime instanceof Carbon
                ? $datetime->copy()
                : Carbon::parse($datetime);

            $now = Carbon::now($timezone);
            $time->setTimezone($timezone);

            Carbon::setLocale('id');

            $diffInSeconds = $time->diffInSeconds($now);
            $diffInHours = $time->diffInHours($now);

            if ($diffInHours < 24) {
                if ($diffInSeconds < 60) {
                    $seconds = max(1, $diffInSeconds);
                    return $seconds . ' detik yang lalu';
                }

                if ($diffInSeconds < 3600) {
                    $minutes = max(1, round($diffInSeconds / 60));
                    return $minutes . ' menit yang lalu';
                }

                $hours = max(1, round($diffInSeconds / 3600));
                return $hours . ' jam yang lalu';
            }

            if ($diffInHours < 48) {
                return 'Kemarin';
            }

            return $time->translatedFormat('l, d F Y | H:i') . ' WIB';
        } catch (\Throwable $e) {
            return '-';
        }
    }
}

if (!function_exists('berita_time_simple')) {
    function berita_time_simple($datetime, ?string $timezone = 'Asia/Jakarta'): string
    {
        if (empty($datetime)) {
            return '-';
        }

        try {
            $time = $datetime instanceof Carbon
                ? $datetime->copy()
                : Carbon::parse($datetime);

            $now = Carbon::now($timezone);
            $time->setTimezone($timezone);

            Carbon::setLocale('id');

            $diffInSeconds = $time->diffInSeconds($now);
            $diffInHours = $time->diffInHours($now);

            if ($diffInHours < 24) {
                if ($diffInSeconds < 60) {
                    $seconds = max(1, $diffInSeconds);
                    return $seconds . ' detik yang lalu';
                }

                if ($diffInSeconds < 3600) {
                    $minutes = max(1, round($diffInSeconds / 60));
                    return $minutes . ' menit yang lalu';
                }

                $hours = max(1, round($diffInSeconds / 3600));
                return $hours . ' jam yang lalu';
            }

            if ($diffInHours < 48) {
                return 'Kemarin';
            }

            return $time->translatedFormat('l, d F Y');
        } catch (\Throwable $e) {
            return '-';
        }
    }
}

if (!function_exists('berita_time_details')) {
    function berita_time_details($datetime, ?string $timezone = 'Asia/Jakarta'): string
    {
        if (empty($datetime)) {
            return '-';
        }

        try {
            $time = $datetime instanceof Carbon
                ? $datetime->copy()
                : Carbon::parse($datetime);

            $time->setTimezone($timezone);

            Carbon::setLocale('id');

            return $time->translatedFormat('l, d F Y • H:i') . ' WIB';
        } catch (\Throwable $e) {
            return '-';
        }
    }
}

if (!function_exists('author_time')) {
    function author_time($datetime, ?string $timezone = 'Asia/Jakarta'): string
    {
        if (empty($datetime)) {
            return '-';
        }

        try {
            $time = $datetime instanceof Carbon
                ? $datetime->copy()
                : Carbon::parse($datetime);

            $time->setTimezone($timezone);

            Carbon::setLocale('id');

            return $time->translatedFormat('l, d M Y');
        } catch (\Throwable $e) {
            return '-';
        }
    }
}

if (!function_exists('berita_time_iso8601')) {
    function berita_time_iso8601($datetime, ?string $timezone = 'Asia/Jakarta'): string
    {
        if (empty($datetime)) {
            return '-';
        }

        try {
            $time = $datetime instanceof Carbon
                ? $datetime->copy()
                : Carbon::parse($datetime);

            $time->setTimezone($timezone);

            // Format ISO 8601 (contoh: 2022-05-03T12:12:59+07:00)
            return $time->toIso8601String();
        } catch (\Throwable $e) {
            return '-';
        }
    }
}
