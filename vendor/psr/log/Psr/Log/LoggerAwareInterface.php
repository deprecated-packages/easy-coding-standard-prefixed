<?php

namespace _PhpScoper908feaf49cd8\Psr\Log;

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
    public function setLogger(\_PhpScoper908feaf49cd8\Psr\Log\LoggerInterface $logger);
}
