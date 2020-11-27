<?php

namespace _PhpScoper776637f3d3c3\Psr\Log;

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
    public function setLogger(\_PhpScoper776637f3d3c3\Psr\Log\LoggerInterface $logger);
}
