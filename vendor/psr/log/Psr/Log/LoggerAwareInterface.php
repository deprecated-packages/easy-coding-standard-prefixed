<?php

namespace _PhpScoper4aefa5ecccc4\Psr\Log;

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
    public function setLogger(\_PhpScoper4aefa5ecccc4\Psr\Log\LoggerInterface $logger);
}
