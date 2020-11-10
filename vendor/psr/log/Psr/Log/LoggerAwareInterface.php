<?php

namespace _PhpScoper470d6df94ac0\Psr\Log;

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
    public function setLogger(\_PhpScoper470d6df94ac0\Psr\Log\LoggerInterface $logger);
}
