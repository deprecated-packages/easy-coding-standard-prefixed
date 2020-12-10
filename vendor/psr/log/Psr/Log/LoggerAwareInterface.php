<?php

namespace _PhpScoper9ef667a5e42c\Psr\Log;

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
    public function setLogger(\_PhpScoper9ef667a5e42c\Psr\Log\LoggerInterface $logger);
}
