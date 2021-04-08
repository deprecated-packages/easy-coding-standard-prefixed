<?php

namespace _PhpScoper2f04ef4e8878\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScoper2f04ef4e8878\Psr\Log\LoggerInterface $logger);
}
