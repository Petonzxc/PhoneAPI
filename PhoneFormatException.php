<?php

class PhoneFormatException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct("PhoneFormatException : " . $message, $code, $previous);
    }
}