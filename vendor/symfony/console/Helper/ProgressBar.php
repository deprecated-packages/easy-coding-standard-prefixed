<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper3e7ab659bd82\Symfony\Component\Console\Helper;

use _PhpScoper3e7ab659bd82\Symfony\Component\Console\Exception\LogicException;
use _PhpScoper3e7ab659bd82\Symfony\Component\Console\Output\ConsoleOutputInterface;
use _PhpScoper3e7ab659bd82\Symfony\Component\Console\Output\ConsoleSectionOutput;
use _PhpScoper3e7ab659bd82\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper3e7ab659bd82\Symfony\Component\Console\Terminal;
/**
 * The ProgressBar provides helpers to display progress output.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Chris Jones <leeked@gmail.com>
 */
final class ProgressBar
{
    private $barWidth = 28;
    private $barChar;
    private $emptyBarChar = '-';
    private $progressChar = '>';
    private $format;
    private $internalFormat;
    private $redrawFreq = 1;
    private $writeCount;
    private $lastWriteTime;
    private $minSecondsBetweenRedraws = 0;
    private $maxSecondsBetweenRedraws = 1;
    private $output;
    private $step = 0;
    private $max;
    private $startTime;
    private $stepWidth;
    private $percent = 0.0;
    private $formatLineCount;
    private $messages = [];
    private $overwrite = \true;
    private $terminal;
    private $previousMessage;
    private static $formatters;
    private static $formats;
    /**
     * @param int $max Maximum steps (0 if unknown)
     */
    public function __construct(\_PhpScoper3e7ab659bd82\Symfony\Component\Console\Output\OutputInterface $output, int $max = 0, float $minSecondsBetweenRedraws = 0.1)
    {
        if ($output instanceof \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Output\ConsoleOutputInterface) {
            $output = $output->getErrorOutput();
        }
        $this->output = $output;
        $this->setMaxSteps($max);
        $this->terminal = new \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Terminal();
        if (0 < $minSecondsBetweenRedraws) {
            $this->redrawFreq = null;
            $this->minSecondsBetweenRedraws = $minSecondsBetweenRedraws;
        }
        if (!$this->output->isDecorated()) {
            // disable overwrite when output does not support ANSI codes.
            $this->overwrite = \false;
            // set a reasonable redraw frequency so output isn't flooded
            $this->redrawFreq = null;
        }
        $this->startTime = \time();
    }
    /**
     * Sets a placeholder formatter for a given name.
     *
     * This method also allow you to override an existing placeholder.
     *
     * @param string   $name     The placeholder name (including the delimiter char like %)
     * @param callable $callable A PHP callable
     */
    public static function setPlaceholderFormatterDefinition(string $name, callable $callable) : void
    {
        if (!self::$formatters) {
            self::$formatters = self::initPlaceholderFormatters();
        }
        self::$formatters[$name] = $callable;
    }
    /**
     * Gets the placeholder formatter for a given name.
     *
     * @param string $name The placeholder name (including the delimiter char like %)
     *
     * @return callable|null A PHP callable
     */
    public static function getPlaceholderFormatterDefinition(string $name) : ?callable
    {
        if (!self::$formatters) {
            self::$formatters = self::initPlaceholderFormatters();
        }
        return isset(self::$formatters[$name]) ? self::$formatters[$name] : null;
    }
    /**
     * Sets a format for a given name.
     *
     * This method also allow you to override an existing format.
     *
     * @param string $name   The format name
     * @param string $format A format string
     */
    public static function setFormatDefinition(string $name, string $format) : void
    {
        if (!self::$formats) {
            self::$formats = self::initFormats();
        }
        self::$formats[$name] = $format;
    }
    /**
     * Gets the format for a given name.
     *
     * @param string $name The format name
     *
     * @return string|null A format string
     */
    public static function getFormatDefinition(string $name) : ?string
    {
        if (!self::$formats) {
            self::$formats = self::initFormats();
        }
        return isset(self::$formats[$name]) ? self::$formats[$name] : null;
    }
    /**
     * Associates a text with a named placeholder.
     *
     * The text is displayed when the progress bar is rendered but only
     * when the corresponding placeholder is part of the custom format line
     * (by wrapping the name with %).
     *
     * @param string $message The text to associate with the placeholder
     * @param string $name    The name of the placeholder
     */
    public function setMessage(string $message, string $name = 'message')
    {
        $this->messages[$name] = $message;
    }
    public function getMessage(string $name = 'message')
    {
        return $this->messages[$name];
    }
    public function getStartTime() : int
    {
        return $this->startTime;
    }
    public function getMaxSteps() : int
    {
        return $this->max;
    }
    public function getProgress() : int
    {
        return $this->step;
    }
    private function getStepWidth() : int
    {
        return $this->stepWidth;
    }
    public function getProgressPercent() : float
    {
        return $this->percent;
    }
    public function getBarOffset() : int
    {
        return \floor($this->max ? $this->percent * $this->barWidth : (null === $this->redrawFreq ? \min(5, $this->barWidth / 15) * $this->writeCount : $this->step) % $this->barWidth);
    }
    public function setBarWidth(int $size)
    {
        $this->barWidth = \max(1, $size);
    }
    public function getBarWidth() : int
    {
        return $this->barWidth;
    }
    public function setBarCharacter(string $char)
    {
        $this->barChar = $char;
    }
    public function getBarCharacter() : string
    {
        if (null === $this->barChar) {
            return $this->max ? '=' : $this->emptyBarChar;
        }
        return $this->barChar;
    }
    public function setEmptyBarCharacter(string $char)
    {
        $this->emptyBarChar = $char;
    }
    public function getEmptyBarCharacter() : string
    {
        return $this->emptyBarChar;
    }
    public function setProgressCharacter(string $char)
    {
        $this->progressChar = $char;
    }
    public function getProgressCharacter() : string
    {
        return $this->progressChar;
    }
    public function setFormat(string $format)
    {
        $this->format = null;
        $this->internalFormat = $format;
    }
    /**
     * Sets the redraw frequency.
     *
     * @param int|float $freq The frequency in steps
     */
    public function setRedrawFrequency(?int $freq)
    {
        $this->redrawFreq = null !== $freq ? \max(1, $freq) : null;
    }
    public function minSecondsBetweenRedraws(float $seconds) : void
    {
        $this->minSecondsBetweenRedraws = $seconds;
    }
    public function maxSecondsBetweenRedraws(float $seconds) : void
    {
        $this->maxSecondsBetweenRedraws = $seconds;
    }
    /**
     * Returns an iterator that will automatically update the progress bar when iterated.
     *
     * @param int|null $max Number of steps to complete the bar (0 if indeterminate), if null it will be inferred from $iterable
     */
    public function iterate(iterable $iterable, int $max = null) : iterable
    {
        $this->start($max ?? (\is_countable($iterable) ? \count($iterable) : 0));
        foreach ($iterable as $key => $value) {
            (yield $key => $value);
            $this->advance();
        }
        $this->finish();
    }
    /**
     * Starts the progress output.
     *
     * @param int|null $max Number of steps to complete the bar (0 if indeterminate), null to leave unchanged
     */
    public function start(int $max = null)
    {
        $this->startTime = \time();
        $this->step = 0;
        $this->percent = 0.0;
        if (null !== $max) {
            $this->setMaxSteps($max);
        }
        $this->display();
    }
    /**
     * Advances the progress output X steps.
     *
     * @param int $step Number of steps to advance
     */
    public function advance(int $step = 1)
    {
        $this->setProgress($this->step + $step);
    }
    /**
     * Sets whether to overwrite the progressbar, false for new line.
     */
    public function setOverwrite(bool $overwrite)
    {
        $this->overwrite = $overwrite;
    }
    public function setProgress(int $step)
    {
        if ($this->max && $step > $this->max) {
            $this->max = $step;
        } elseif ($step < 0) {
            $step = 0;
        }
        $redrawFreq = $this->redrawFreq ?? ($this->max ?: 10) / 10;
        $prevPeriod = (int) ($this->step / $redrawFreq);
        $currPeriod = (int) ($step / $redrawFreq);
        $this->step = $step;
        $this->percent = $this->max ? (float) $this->step / $this->max : 0;
        $timeInterval = \microtime(\true) - $this->lastWriteTime;
        // Draw regardless of other limits
        if ($this->max === $step) {
            $this->display();
            return;
        }
        // Throttling
        if ($timeInterval < $this->minSecondsBetweenRedraws) {
            return;
        }
        // Draw each step period, but not too late
        if ($prevPeriod !== $currPeriod || $timeInterval >= $this->maxSecondsBetweenRedraws) {
            $this->display();
        }
    }
    public function setMaxSteps(int $max)
    {
        $this->format = null;
        $this->max = \max(0, $max);
        $this->stepWidth = $this->max ? \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Helper\Helper::strlen((string) $this->max) : 4;
    }
    /**
     * Finishes the progress output.
     */
    public function finish() : void
    {
        if (!$this->max) {
            $this->max = $this->step;
        }
        if ($this->step === $this->max && !$this->overwrite) {
            // prevent double 100% output
            return;
        }
        $this->setProgress($this->max);
    }
    /**
     * Outputs the current progress string.
     */
    public function display() : void
    {
        if (\_PhpScoper3e7ab659bd82\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_QUIET === $this->output->getVerbosity()) {
            return;
        }
        if (null === $this->format) {
            $this->setRealFormat($this->internalFormat ?: $this->determineBestFormat());
        }
        $this->overwrite($this->buildLine());
    }
    /**
     * Removes the progress bar from the current line.
     *
     * This is useful if you wish to write some output
     * while a progress bar is running.
     * Call display() to show the progress bar again.
     */
    public function clear() : void
    {
        if (!$this->overwrite) {
            return;
        }
        if (null === $this->format) {
            $this->setRealFormat($this->internalFormat ?: $this->determineBestFormat());
        }
        $this->overwrite('');
    }
    private function setRealFormat(string $format)
    {
        // try to use the _nomax variant if available
        if (!$this->max && null !== self::getFormatDefinition($format . '_nomax')) {
            $this->format = self::getFormatDefinition($format . '_nomax');
        } elseif (null !== self::getFormatDefinition($format)) {
            $this->format = self::getFormatDefinition($format);
        } else {
            $this->format = $format;
        }
        $this->formatLineCount = \substr_count($this->format, "\n");
    }
    /**
     * Overwrites a previous message to the output.
     */
    private function overwrite(string $message) : void
    {
        if ($this->previousMessage === $message) {
            return;
        }
        $originalMessage = $message;
        if ($this->overwrite) {
            if (null !== $this->previousMessage) {
                if ($this->output instanceof \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Output\ConsoleSectionOutput) {
                    $lines = \floor(\_PhpScoper3e7ab659bd82\Symfony\Component\Console\Helper\Helper::strlen($message) / $this->terminal->getWidth()) + $this->formatLineCount + 1;
                    $this->output->clear($lines);
                } else {
                    // Erase previous lines
                    if ($this->formatLineCount > 0) {
                        $message = \str_repeat("\33[1A\33[2K", $this->formatLineCount) . $message;
                    }
                    // Move the cursor to the beginning of the line and erase the line
                    $message = "\r\33[2K{$message}";
                }
            }
        } elseif ($this->step > 0) {
            $message = \PHP_EOL . $message;
        }
        $this->previousMessage = $originalMessage;
        $this->lastWriteTime = \microtime(\true);
        $this->output->write($message);
        ++$this->writeCount;
    }
    private function determineBestFormat() : string
    {
        switch ($this->output->getVerbosity()) {
            // OutputInterface::VERBOSITY_QUIET: display is disabled anyway
            case \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_VERBOSE:
                return $this->max ? 'verbose' : 'verbose_nomax';
            case \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_VERY_VERBOSE:
                return $this->max ? 'very_verbose' : 'very_verbose_nomax';
            case \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_DEBUG:
                return $this->max ? 'debug' : 'debug_nomax';
            default:
                return $this->max ? 'normal' : 'normal_nomax';
        }
    }
    private static function initPlaceholderFormatters() : array
    {
        return ['bar' => function (self $bar, \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Output\OutputInterface $output) {
            $completeBars = $bar->getBarOffset();
            $display = \str_repeat($bar->getBarCharacter(), $completeBars);
            if ($completeBars < $bar->getBarWidth()) {
                $emptyBars = $bar->getBarWidth() - $completeBars - \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Helper\Helper::strlenWithoutDecoration($output->getFormatter(), $bar->getProgressCharacter());
                $display .= $bar->getProgressCharacter() . \str_repeat($bar->getEmptyBarCharacter(), $emptyBars);
            }
            return $display;
        }, 'elapsed' => function (self $bar) {
            return \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Helper\Helper::formatTime(\time() - $bar->getStartTime());
        }, 'remaining' => function (self $bar) {
            if (!$bar->getMaxSteps()) {
                throw new \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Exception\LogicException('Unable to display the remaining time if the maximum number of steps is not set.');
            }
            if (!$bar->getProgress()) {
                $remaining = 0;
            } else {
                $remaining = \round((\time() - $bar->getStartTime()) / $bar->getProgress() * ($bar->getMaxSteps() - $bar->getProgress()));
            }
            return \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Helper\Helper::formatTime($remaining);
        }, 'estimated' => function (self $bar) {
            if (!$bar->getMaxSteps()) {
                throw new \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Exception\LogicException('Unable to display the estimated time if the maximum number of steps is not set.');
            }
            if (!$bar->getProgress()) {
                $estimated = 0;
            } else {
                $estimated = \round((\time() - $bar->getStartTime()) / $bar->getProgress() * $bar->getMaxSteps());
            }
            return \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Helper\Helper::formatTime($estimated);
        }, 'memory' => function (self $bar) {
            return \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Helper\Helper::formatMemory(\memory_get_usage(\true));
        }, 'current' => function (self $bar) {
            return \str_pad($bar->getProgress(), $bar->getStepWidth(), ' ', \STR_PAD_LEFT);
        }, 'max' => function (self $bar) {
            return $bar->getMaxSteps();
        }, 'percent' => function (self $bar) {
            return \floor($bar->getProgressPercent() * 100);
        }];
    }
    private static function initFormats() : array
    {
        return ['normal' => ' %current%/%max% [%bar%] %percent:3s%%', 'normal_nomax' => ' %current% [%bar%]', 'verbose' => ' %current%/%max% [%bar%] %percent:3s%% %elapsed:6s%', 'verbose_nomax' => ' %current% [%bar%] %elapsed:6s%', 'very_verbose' => ' %current%/%max% [%bar%] %percent:3s%% %elapsed:6s%/%estimated:-6s%', 'very_verbose_nomax' => ' %current% [%bar%] %elapsed:6s%', 'debug' => ' %current%/%max% [%bar%] %percent:3s%% %elapsed:6s%/%estimated:-6s% %memory:6s%', 'debug_nomax' => ' %current% [%bar%] %elapsed:6s% %memory:6s%'];
    }
    private function buildLine() : string
    {
        $regex = "{%([a-z\\-_]+)(?:\\:([^%]+))?%}i";
        $callback = function ($matches) {
            if ($formatter = $this::getPlaceholderFormatterDefinition($matches[1])) {
                $text = $formatter($this, $this->output);
            } elseif (isset($this->messages[$matches[1]])) {
                $text = $this->messages[$matches[1]];
            } else {
                return $matches[0];
            }
            if (isset($matches[2])) {
                $text = \sprintf('%' . $matches[2], $text);
            }
            return $text;
        };
        $line = \preg_replace_callback($regex, $callback, $this->format);
        // gets string length for each sub line with multiline format
        $linesLength = \array_map(function ($subLine) {
            return \_PhpScoper3e7ab659bd82\Symfony\Component\Console\Helper\Helper::strlenWithoutDecoration($this->output->getFormatter(), \rtrim($subLine, "\r"));
        }, \explode("\n", $line));
        $linesWidth = \max($linesLength);
        $terminalWidth = $this->terminal->getWidth();
        if ($linesWidth <= $terminalWidth) {
            return $line;
        }
        $this->setBarWidth($this->barWidth - $linesWidth + $terminalWidth);
        return \preg_replace_callback($regex, $callback, $this->format);
    }
}
