<?php

namespace _PhpScoperb09c3ec8e01a\Psr\Log;

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
    public function setLogger(\_PhpScoperb09c3ec8e01a\Psr\Log\LoggerInterface $logger);
}
