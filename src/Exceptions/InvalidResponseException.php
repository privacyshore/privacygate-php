<?php
namespace PrivacyGate\Exceptions;

class InvalidResponseException extends PrivacyGateException
{
    public function __construct($message = '', $body = '')
    {
        parent::__construct($message);
        $this->body = $body;
    }
}
