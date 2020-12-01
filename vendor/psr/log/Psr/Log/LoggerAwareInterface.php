<?php

namespace _PhpScoperb36402634947\Psr\Log;

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
    public function setLogger(\_PhpScoperb36402634947\Psr\Log\LoggerInterface $logger);
}
