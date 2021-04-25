<?php

namespace _PhpScoperd232d3743ab9\Psr\Log;

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
    public function setLogger(\_PhpScoperd232d3743ab9\Psr\Log\LoggerInterface $logger);
}
