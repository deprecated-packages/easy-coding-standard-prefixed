<?php

namespace _PhpScoper167729fa1dde\Psr\Log;

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
    public function setLogger(\_PhpScoper167729fa1dde\Psr\Log\LoggerInterface $logger);
}
