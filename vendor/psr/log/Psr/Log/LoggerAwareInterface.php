<?php

namespace _PhpScoper8b97b0dd6f5b\Psr\Log;

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
    public function setLogger(\_PhpScoper8b97b0dd6f5b\Psr\Log\LoggerInterface $logger);
}
