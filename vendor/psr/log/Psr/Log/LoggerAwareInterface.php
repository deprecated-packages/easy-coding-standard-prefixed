<?php

namespace _PhpScoper7f41430b5328\Psr\Log;

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
    public function setLogger(\_PhpScoper7f41430b5328\Psr\Log\LoggerInterface $logger);
}
