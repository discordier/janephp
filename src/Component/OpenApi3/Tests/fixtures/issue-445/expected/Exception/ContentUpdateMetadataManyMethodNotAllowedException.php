<?php

namespace PicturePark\API\Exception;

class ContentUpdateMetadataManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}