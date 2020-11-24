<?php

namespace _PhpScoper528afa732cbd\Psr\Log;

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
    public function setLogger(\_PhpScoper528afa732cbd\Psr\Log\LoggerInterface $logger);
}
