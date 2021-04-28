<?php

namespace _PhpScoper3fd2fa23bf53\Psr\Log;

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
    public function setLogger(\_PhpScoper3fd2fa23bf53\Psr\Log\LoggerInterface $logger);
}
