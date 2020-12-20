<?php

namespace _PhpScoper967d20dce97a\Psr\Log;

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
    public function setLogger(\_PhpScoper967d20dce97a\Psr\Log\LoggerInterface $logger);
}
