<?php

namespace _PhpScoper2fe14d6302bc\Psr\Log;

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
    public function setLogger(\_PhpScoper2fe14d6302bc\Psr\Log\LoggerInterface $logger);
}
