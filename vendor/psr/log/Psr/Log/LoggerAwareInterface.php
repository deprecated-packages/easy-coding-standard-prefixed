<?php

namespace _PhpScoper14cb6de5473d\Psr\Log;

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
    public function setLogger(\_PhpScoper14cb6de5473d\Psr\Log\LoggerInterface $logger);
}
