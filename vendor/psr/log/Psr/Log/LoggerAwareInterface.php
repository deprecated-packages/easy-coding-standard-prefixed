<?php

namespace _PhpScoperb458b528613f\Psr\Log;

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
    public function setLogger(\_PhpScoperb458b528613f\Psr\Log\LoggerInterface $logger);
}
