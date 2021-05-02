<?php

namespace _PhpScoperb5b1090524db\Psr\Log;

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
    public function setLogger(\_PhpScoperb5b1090524db\Psr\Log\LoggerInterface $logger);
}
