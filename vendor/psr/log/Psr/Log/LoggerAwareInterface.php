<?php

namespace _PhpScoper3ba93baeac18\Psr\Log;

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
    public function setLogger(\_PhpScoper3ba93baeac18\Psr\Log\LoggerInterface $logger);
}
