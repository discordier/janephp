<?php

namespace PicturePark\API\Exception;

class UserLockMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}