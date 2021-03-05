<?php

namespace PicturePark\API\Exception;

class TransferPartialImportUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}