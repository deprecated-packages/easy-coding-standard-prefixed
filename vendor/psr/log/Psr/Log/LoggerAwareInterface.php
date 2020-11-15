<?php

namespace _PhpScoper279cf54b77ad\Psr\Log;

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
    public function setLogger(\_PhpScoper279cf54b77ad\Psr\Log\LoggerInterface $logger);
}
