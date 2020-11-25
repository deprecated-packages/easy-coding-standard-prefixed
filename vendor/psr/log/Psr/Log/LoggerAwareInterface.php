<?php

namespace _PhpScoperca8ca183ac38\Psr\Log;

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
    public function setLogger(\_PhpScoperca8ca183ac38\Psr\Log\LoggerInterface $logger);
}
