<?php

namespace _PhpScoper08748c77fa1c\Psr\Log;

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
    public function setLogger(\_PhpScoper08748c77fa1c\Psr\Log\LoggerInterface $logger);
}
