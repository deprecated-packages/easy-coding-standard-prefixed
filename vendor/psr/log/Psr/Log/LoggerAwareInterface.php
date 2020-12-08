<?php

namespace _PhpScoperf053e888b664\Psr\Log;

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
    public function setLogger(\_PhpScoperf053e888b664\Psr\Log\LoggerInterface $logger);
}
