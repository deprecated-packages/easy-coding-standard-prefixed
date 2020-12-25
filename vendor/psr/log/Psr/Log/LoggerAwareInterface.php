<?php

namespace _PhpScoper15c5423f4731\Psr\Log;

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
    public function setLogger(\_PhpScoper15c5423f4731\Psr\Log\LoggerInterface $logger);
}
