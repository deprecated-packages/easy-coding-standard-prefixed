<?php

namespace _PhpScoperaac5f7c652e4\Psr\Log;

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
    public function setLogger(\_PhpScoperaac5f7c652e4\Psr\Log\LoggerInterface $logger);
}
