<?php

namespace _PhpScoper31ba553edf97\Psr\Log;

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
    public function setLogger(\_PhpScoper31ba553edf97\Psr\Log\LoggerInterface $logger);
}
