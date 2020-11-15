<?php

namespace _PhpScoper207eb8f99af3\Psr\Log;

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
    public function setLogger(\_PhpScoper207eb8f99af3\Psr\Log\LoggerInterface $logger);
}
