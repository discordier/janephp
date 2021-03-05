<?php

namespace PicturePark\API\Exception;

class ShareGetShareJsonUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}