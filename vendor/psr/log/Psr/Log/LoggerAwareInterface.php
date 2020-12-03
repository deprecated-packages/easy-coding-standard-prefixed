<?php

namespace _PhpScoper6c2f17c43d2d\Psr\Log;

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
    public function setLogger(\_PhpScoper6c2f17c43d2d\Psr\Log\LoggerInterface $logger);
}
