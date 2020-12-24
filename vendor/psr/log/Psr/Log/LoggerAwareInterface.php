<?php

namespace _PhpScoper629192f0909b\Psr\Log;

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
    public function setLogger(\_PhpScoper629192f0909b\Psr\Log\LoggerInterface $logger);
}
