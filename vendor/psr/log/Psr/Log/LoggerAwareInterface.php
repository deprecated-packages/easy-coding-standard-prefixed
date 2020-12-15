<?php

namespace _PhpScoper839420027581\Psr\Log;

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
    public function setLogger(\_PhpScoper839420027581\Psr\Log\LoggerInterface $logger);
}
