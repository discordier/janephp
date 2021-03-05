<?php

namespace Jane\OpenApi3\Tests\Expected\Two\Exception;

class NotFoundException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 404);
    }
}