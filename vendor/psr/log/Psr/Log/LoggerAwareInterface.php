<?php

namespace _PhpScoper4d3fa30a680b\Psr\Log;

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
    public function setLogger(\_PhpScoper4d3fa30a680b\Psr\Log\LoggerInterface $logger);
}
