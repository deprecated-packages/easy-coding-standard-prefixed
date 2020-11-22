<?php

namespace _PhpScoperbc5235eb86f3\Psr\Log;

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
    public function setLogger(\_PhpScoperbc5235eb86f3\Psr\Log\LoggerInterface $logger);
}
