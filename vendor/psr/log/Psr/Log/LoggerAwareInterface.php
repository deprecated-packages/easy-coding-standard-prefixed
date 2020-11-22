<?php

namespace _PhpScoper797695bcfb1f\Psr\Log;

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
    public function setLogger(\_PhpScoper797695bcfb1f\Psr\Log\LoggerInterface $logger);
}
