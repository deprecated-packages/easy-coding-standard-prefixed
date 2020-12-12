<?php

namespace _PhpScoperdaf95aff095b\Psr\Log;

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
    public function setLogger(\_PhpScoperdaf95aff095b\Psr\Log\LoggerInterface $logger);
}
