<?php

namespace _PhpScoper967c4b7e296e\Psr\Log;

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
    public function setLogger(\_PhpScoper967c4b7e296e\Psr\Log\LoggerInterface $logger);
}
