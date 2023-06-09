<?php

namespace AIP\BaiduAIP\Exception;

use Psr\Http\Message\RequestInterface;
use Throwable;

class RequestException extends \Exception
{
    protected ?RequestInterface $request;

    public function __construct(string $message = "", ?RequestInterface $request = null, $code = 0, Throwable $previous = null)
    {
        $this->request = $request;
        parent::__construct($message, $code, $previous);
    }

    public function getRequest(): RequestInterface
    {
        return $this->request;
    }
}
