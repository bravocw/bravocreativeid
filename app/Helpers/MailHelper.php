<?php

use App\Services\MailService;

if (!function_exists('send_mail')) {
    function send_mail(string $to, string $subject, string $view, array $data = [], bool $isQueue = true)
    {
        return app(MailService::class)->send($to, $subject, $view, $data, $isQueue);
    }
}
        // Menghitung event yang pendaftaran selesainya belum/masih berlangsung
