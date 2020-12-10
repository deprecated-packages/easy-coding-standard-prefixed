<?php

namespace _PhpScoper4edd80b4ab80\Psr\Log;

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
    public function setLogger(\_PhpScoper4edd80b4ab80\Psr\Log\LoggerInterface $logger);
}
