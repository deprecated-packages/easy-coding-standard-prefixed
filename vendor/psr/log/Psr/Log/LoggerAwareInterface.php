<?php

namespace _PhpScoper4f985154d5a0\Psr\Log;

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
    public function setLogger(\_PhpScoper4f985154d5a0\Psr\Log\LoggerInterface $logger);
}
