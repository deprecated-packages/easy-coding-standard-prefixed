<?php

namespace _PhpScoper0ba97041430d\Psr\Log;

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
    public function setLogger(\_PhpScoper0ba97041430d\Psr\Log\LoggerInterface $logger);
}
