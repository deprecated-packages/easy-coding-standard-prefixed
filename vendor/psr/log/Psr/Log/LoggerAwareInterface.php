<?php

namespace _PhpScoperc8fea59b0cb1\Psr\Log;

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
    public function setLogger(\_PhpScoperc8fea59b0cb1\Psr\Log\LoggerInterface $logger);
}
