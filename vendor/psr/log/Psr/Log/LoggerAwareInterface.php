<?php

namespace _PhpScoper3e8786a75afe\Psr\Log;

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
    public function setLogger(\_PhpScoper3e8786a75afe\Psr\Log\LoggerInterface $logger);
}
