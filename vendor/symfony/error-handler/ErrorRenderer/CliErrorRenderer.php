<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4ea0f0bd23f\Symfony\Component\ErrorHandler\ErrorRenderer;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\ErrorHandler\Exception\FlattenException;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Cloner\VarCloner;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Dumper\CliDumper;
// Help opcache.preload discover always-needed symbols
\class_exists(\_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Dumper\CliDumper::class);
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CliErrorRenderer implements \_PhpScoperc4ea0f0bd23f\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface
{
    /**
     * {@inheritdoc}
     */
    public function render(\Throwable $exception) : \_PhpScoperc4ea0f0bd23f\Symfony\Component\ErrorHandler\Exception\FlattenException
    {
        $cloner = new \_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Cloner\VarCloner();
        $dumper = new class extends \_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Dumper\CliDumper
        {
            protected function supportsColors() : bool
            {
                $outputStream = $this->outputStream;
                $this->outputStream = \fopen('php://stdout', 'w');
                try {
                    return parent::supportsColors();
                } finally {
                    $this->outputStream = $outputStream;
                }
            }
        };
        return \_PhpScoperc4ea0f0bd23f\Symfony\Component\ErrorHandler\Exception\FlattenException::createFromThrowable($exception)->setAsString($dumper->dump($cloner->cloneVar($exception), \true));
    }
}
