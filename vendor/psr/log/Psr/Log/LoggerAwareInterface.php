<?php

namespace _PhpScoperc5bee3a837bb\Psr\Log;

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
    public function setLogger(\_PhpScoperc5bee3a837bb\Psr\Log\LoggerInterface $logger);
}
