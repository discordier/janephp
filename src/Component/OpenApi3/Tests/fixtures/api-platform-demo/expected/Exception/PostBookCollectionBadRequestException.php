<?php

namespace ApiPlatform\Demo\Exception;

class PostBookCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}