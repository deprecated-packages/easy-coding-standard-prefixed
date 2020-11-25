<?php

namespace _PhpScoper418afc2f157c\Psr\Log;

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
    public function setLogger(\_PhpScoper418afc2f157c\Psr\Log\LoggerInterface $logger);
}
