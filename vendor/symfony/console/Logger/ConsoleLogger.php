<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaad82bb90a86\Symfony\Component\Console\Logger;

use _PhpScoperaad82bb90a86\Psr\Log\AbstractLogger;
use _PhpScoperaad82bb90a86\Psr\Log\InvalidArgumentException;
use _PhpScoperaad82bb90a86\Psr\Log\LogLevel;
use _PhpScoperaad82bb90a86\Symfony\Component\Console\Output\ConsoleOutputInterface;
use _PhpScoperaad82bb90a86\Symfony\Component\Console\Output\OutputInterface;
/**
 * PSR-3 compliant console logger.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @see https://www.php-fig.org/psr/psr-3/
 */
class ConsoleLogger extends \_PhpScoperaad82bb90a86\Psr\Log\AbstractLogger
{
    const INFO = 'info';
    const ERROR = 'error';
    private $output;
    private $verbosityLevelMap = [\_PhpScoperaad82bb90a86\Psr\Log\LogLevel::EMERGENCY => \_PhpScoperaad82bb90a86\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_NORMAL, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::ALERT => \_PhpScoperaad82bb90a86\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_NORMAL, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::CRITICAL => \_PhpScoperaad82bb90a86\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_NORMAL, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::ERROR => \_PhpScoperaad82bb90a86\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_NORMAL, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::WARNING => \_PhpScoperaad82bb90a86\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_NORMAL, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::NOTICE => \_PhpScoperaad82bb90a86\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_VERBOSE, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::INFO => \_PhpScoperaad82bb90a86\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_VERY_VERBOSE, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::DEBUG => \_PhpScoperaad82bb90a86\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_DEBUG];
    private $formatLevelMap = [\_PhpScoperaad82bb90a86\Psr\Log\LogLevel::EMERGENCY => self::ERROR, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::ALERT => self::ERROR, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::CRITICAL => self::ERROR, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::ERROR => self::ERROR, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::WARNING => self::INFO, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::NOTICE => self::INFO, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::INFO => self::INFO, \_PhpScoperaad82bb90a86\Psr\Log\LogLevel::DEBUG => self::INFO];
    private $errored = \false;
    public function __construct(\_PhpScoperaad82bb90a86\Symfony\Component\Console\Output\OutputInterface $output, array $verbosityLevelMap = [], array $formatLevelMap = [])
    {
        $this->output = $output;
        $this->verbosityLevelMap = $verbosityLevelMap + $this->verbosityLevelMap;
        $this->formatLevelMap = $formatLevelMap + $this->formatLevelMap;
    }
    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function log($level, $message, array $context = [])
    {
        if (!isset($this->verbosityLevelMap[$level])) {
            throw new \_PhpScoperaad82bb90a86\Psr\Log\InvalidArgumentException(\sprintf('The log level "%s" does not exist.', $level));
        }
        $output = $this->output;
        // Write to the error output if necessary and available
        if (self::ERROR === $this->formatLevelMap[$level]) {
            if ($this->output instanceof \_PhpScoperaad82bb90a86\Symfony\Component\Console\Output\ConsoleOutputInterface) {
                $output = $output->getErrorOutput();
            }
            $this->errored = \true;
        }
        // the if condition check isn't necessary -- it's the same one that $output will do internally anyway.
        // We only do it for efficiency here as the message formatting is relatively expensive.
        if ($output->getVerbosity() >= $this->verbosityLevelMap[$level]) {
            $output->writeln(\sprintf('<%1$s>[%2$s] %3$s</%1$s>', $this->formatLevelMap[$level], $level, $this->interpolate($message, $context)), $this->verbosityLevelMap[$level]);
        }
    }
    /**
     * Returns true when any messages have been logged at error levels.
     *
     * @return bool
     */
    public function hasErrored()
    {
        return $this->errored;
    }
    /**
     * Interpolates context values into the message placeholders.
     *
     * @author PHP Framework Interoperability Group
     */
    private function interpolate(string $message, array $context) : string
    {
        if (\false === \strpos($message, '{')) {
            return $message;
        }
        $replacements = [];
        foreach ($context as $key => $val) {
            if (null === $val || \is_scalar($val) || \is_object($val) && \method_exists($val, '__toString')) {
                $replacements["{{$key}}"] = $val;
            } elseif ($val instanceof \DateTimeInterface) {
                $replacements["{{$key}}"] = $val->format(\DateTime::RFC3339);
            } elseif (\is_object($val)) {
                $replacements["{{$key}}"] = '[object ' . \get_class($val) . ']';
            } else {
                $replacements["{{$key}}"] = '[' . \gettype($val) . ']';
            }
        }
        return \strtr($message, $replacements);
    }
}
