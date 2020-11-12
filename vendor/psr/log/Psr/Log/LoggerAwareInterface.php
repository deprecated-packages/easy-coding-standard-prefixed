<?php

namespace _PhpScoper3d6b50c3ca2f\Psr\Log;

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
    public function setLogger(\_PhpScoper3d6b50c3ca2f\Psr\Log\LoggerInterface $logger);
}
