<?php

namespace _PhpScoper04022cd986ec\Psr\Log;

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
    public function setLogger(\_PhpScoper04022cd986ec\Psr\Log\LoggerInterface $logger);
}
