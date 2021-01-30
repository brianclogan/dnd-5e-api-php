<?php

namespace Darkgoldblade01\Dnd5eApi;

use Throwable;

/**
 * Class NotFoundException
 * @package Darkgoldblade01\Dnd5eApi
 */
class NotFoundException extends \Exception
{
    /**
     * NotFoundException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string|void
     */
    public function __toString()
    {
        parent::__toString();
    }

    /**
     *
     */
    public function __wakeup()
    {
        parent::__wakeup();
    }

}