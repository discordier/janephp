<?php

namespace PicturePark\API\Exception;

class TransferSearchFilesTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}