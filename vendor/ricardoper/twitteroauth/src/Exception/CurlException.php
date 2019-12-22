<?php

/**
 * TwitterOAuth - https://github.com/ricardoper/TwitterOAuth
 * PHP library to communicate with Twitter OAuth API version 1.1
 *
 * @author Ricardo Pereira <github@ricardopereira.es>
 * @copyright 2014
 */

namespace TwitterOAuth\Exception;

class CurlException extends \Exception
{
    public function __toString()
    {
        return 'cURL Lib: [' . $this->code . '] ' . $this->message . ' (' . __CLASS__ . ') ';
    }
}