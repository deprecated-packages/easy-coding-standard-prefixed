<?php

namespace _PhpScoper23ef26a4fb01\Psr\Log;

/**
 * Describes a logger-aware instance
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface $logger
     * @return null
     */
    public function setLogger(\_PhpScoper23ef26a4fb01\Psr\Log\LoggerInterface $logger);
}
