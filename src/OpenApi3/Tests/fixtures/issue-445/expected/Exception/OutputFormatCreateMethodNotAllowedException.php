<?php

namespace PicturePark\API\Exception;

class OutputFormatCreateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}