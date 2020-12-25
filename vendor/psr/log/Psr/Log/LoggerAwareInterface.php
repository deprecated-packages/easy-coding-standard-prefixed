<?php

namespace _PhpScoperb44a315fec16\Psr\Log;

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
    public function setLogger(\_PhpScoperb44a315fec16\Psr\Log\LoggerInterface $logger);
}
