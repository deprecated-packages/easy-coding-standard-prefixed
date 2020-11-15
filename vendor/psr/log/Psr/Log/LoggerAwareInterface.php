<?php

namespace _PhpScoper70072c07b02b\Psr\Log;

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
    public function setLogger(\_PhpScoper70072c07b02b\Psr\Log\LoggerInterface $logger);
}
