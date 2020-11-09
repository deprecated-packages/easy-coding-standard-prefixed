<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere015d8a3273c\Symfony\Component\Debug;

use _PhpScopere015d8a3273c\Psr\Log\AbstractLogger;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.4, use "%s" instead.', \_PhpScopere015d8a3273c\Symfony\Component\Debug\BufferingLogger::class, \_PhpScopere015d8a3273c\Symfony\Component\ErrorHandler\BufferingLogger::class), \E_USER_DEPRECATED);
/**
 * A buffering logger that stacks logs for later.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @deprecated since Symfony 4.4, use Symfony\Component\ErrorHandler\BufferingLogger instead.
 */
class BufferingLogger extends \_PhpScopere015d8a3273c\Psr\Log\AbstractLogger
{
    private $logs = [];
    /**
     * @return void
     */
    public function log($level, $message, array $context = [])
    {
        $this->logs[] = [$level, $message, $context];
    }
    public function cleanLogs()
    {
        $logs = $this->logs;
        $this->logs = [];
        return $logs;
    }
}
