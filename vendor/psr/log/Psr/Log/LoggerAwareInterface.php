<?php

namespace _PhpScoperc753ccca5a0c\Psr\Log;

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
    public function setLogger(\_PhpScoperc753ccca5a0c\Psr\Log\LoggerInterface $logger);
}
