<?php

namespace _PhpScoper16399a42e87c\Psr\Log;

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
    public function setLogger(\_PhpScoper16399a42e87c\Psr\Log\LoggerInterface $logger);
}
