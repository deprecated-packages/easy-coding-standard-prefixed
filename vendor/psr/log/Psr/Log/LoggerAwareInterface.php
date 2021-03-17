<?php

namespace _PhpScoper246d3630afdd\Psr\Log;

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
    public function setLogger(\_PhpScoper246d3630afdd\Psr\Log\LoggerInterface $logger);
}
