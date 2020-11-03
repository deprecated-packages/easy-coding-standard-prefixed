<?php

namespace _PhpScoper3d04c8135695\Psr\Log;

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
    public function setLogger(\_PhpScoper3d04c8135695\Psr\Log\LoggerInterface $logger);
}
