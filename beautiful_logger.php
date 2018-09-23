<?php

/**
 * Class BeautifulLogger
 * Use for batch process
 */
class BeautifulLogger
{

    /* log level */
    const DEBUG = 'debug';
    const INFO = 'info';
    const SUCCESS = 'success';
    const WARN = 'warning';
    const ERROR = 'error';

    /* color list*/
    const RED = '31';
    const GREEN = '32';
    const YELLOW = '33';
    const BLUE = '34';
    const MAGENTA = '35';
    const CYAN = '36';
    const WHITE = '37';

    private static $levels = [
        self::DEBUG => self::WHITE,
        self::INFO => self::CYAN,
        self::WARN => self::YELLOW,
        self::SUCCESS => self::GREEN,
        self::ERROR => self::RED,
    ];

    public static function print($level, $text, $is_bold=true)
    {
        $code = self::$levels[strtolower($level)];
        if ($is_bold) {
            $code = '1;' . $code;
        }
        $d = date('Y-m-d H:i:s');
        $level = strtoupper($level);
        echo "[{$d}] \033[{$code}m{$level}\033[0m: {$text}\n";
    }
}
