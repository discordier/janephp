<?php

namespace PicturePark\API\Exception;

class ListItemDeleteManyByFilterTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}