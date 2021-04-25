<?php

namespace _PhpScoper2737ffe13a7b\Psr\Log;

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
    public function setLogger(\_PhpScoper2737ffe13a7b\Psr\Log\LoggerInterface $logger);
}
