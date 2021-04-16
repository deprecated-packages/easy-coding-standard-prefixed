<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper0752b31150a1\Symfony\Component\ErrorHandler\ErrorRenderer;

use _PhpScoper0752b31150a1\Symfony\Component\ErrorHandler\Exception\FlattenException;
use _PhpScoper0752b31150a1\Symfony\Component\VarDumper\Cloner\VarCloner;
use _PhpScoper0752b31150a1\Symfony\Component\VarDumper\Dumper\CliDumper;
// Help opcache.preload discover always-needed symbols
\class_exists(CliDumper::class);
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CliErrorRenderer implements \_PhpScoper0752b31150a1\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface
{
    /**
     * {@inheritdoc}
     */
    public function render(\Throwable $exception) : FlattenException
    {
        $cloner = new VarCloner();
        $dumper = new class extends CliDumper
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
        return FlattenException::createFromThrowable($exception)->setAsString($dumper->dump($cloner->cloneVar($exception), \true));
    }
}
