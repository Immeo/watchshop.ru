<?php

namespace watchshop;

class ErrorHandler
{

    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        } else {
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler($e)
    {
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->outError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    protected function logErrors($message = '', $file = '', $line = '')
    {
        error_log("[" . date('Y-m-d- H:i:s') . "] Текст ошибки: {$message} | Имя файла: {$file} | Номер строки: {$line}\n====================\n", 3, '/temp/errors.log');
    }

    protected function outError($errno, $errstr, $errfile, $errline, $response = 404)
    {
        http_response_code($response);
        if ($response == 404 && !DEBUG) {
            require WWWW . '/errors/404.php';
            die;
        }
        if (DEBUG) {
            require WWWW . '/errors/dev.php';
        } else {
            require WWWW . '/errors/prod/php';
        }
        die;
    }
}
