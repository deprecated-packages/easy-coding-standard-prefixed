<?php

namespace _PhpScoper1b2f8b9c0339\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScoper1b2f8b9c0339\Psr\Log\LoggerInterface $logger);
}
