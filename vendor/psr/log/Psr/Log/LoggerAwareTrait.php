<?php

namespace _PhpScoper3fd2fa23bf53\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoper3fd2fa23bf53\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
