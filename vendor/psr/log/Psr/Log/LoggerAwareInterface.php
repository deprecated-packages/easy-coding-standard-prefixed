<?php

namespace _PhpScoper5384d7276e1f\Psr\Log;

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
    public function setLogger(\_PhpScoper5384d7276e1f\Psr\Log\LoggerInterface $logger);
}
