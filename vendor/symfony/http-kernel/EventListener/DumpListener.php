<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaba240c3d5f1\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperaba240c3d5f1\Symfony\Component\Console\ConsoleEvents;
use _PhpScoperaba240c3d5f1\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperaba240c3d5f1\Symfony\Component\VarDumper\Cloner\ClonerInterface;
use _PhpScoperaba240c3d5f1\Symfony\Component\VarDumper\Dumper\DataDumperInterface;
use _PhpScoperaba240c3d5f1\Symfony\Component\VarDumper\Server\Connection;
use _PhpScoperaba240c3d5f1\Symfony\Component\VarDumper\VarDumper;
/**
 * Configures dump() handler.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DumpListener implements \_PhpScoperaba240c3d5f1\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $cloner;
    private $dumper;
    private $connection;
    public function __construct(\_PhpScoperaba240c3d5f1\Symfony\Component\VarDumper\Cloner\ClonerInterface $cloner, \_PhpScoperaba240c3d5f1\Symfony\Component\VarDumper\Dumper\DataDumperInterface $dumper, \_PhpScoperaba240c3d5f1\Symfony\Component\VarDumper\Server\Connection $connection = null)
    {
        $this->cloner = $cloner;
        $this->dumper = $dumper;
        $this->connection = $connection;
    }
    public function configure()
    {
        $cloner = $this->cloner;
        $dumper = $this->dumper;
        $connection = $this->connection;
        \_PhpScoperaba240c3d5f1\Symfony\Component\VarDumper\VarDumper::setHandler(static function ($var) use($cloner, $dumper, $connection) {
            $data = $cloner->cloneVar($var);
            if (!$connection || !$connection->write($data)) {
                $dumper->dump($data);
            }
        });
    }
    public static function getSubscribedEvents()
    {
        if (!\class_exists(\_PhpScoperaba240c3d5f1\Symfony\Component\Console\ConsoleEvents::class)) {
            return [];
        }
        // Register early to have a working dump() as early as possible
        return [\_PhpScoperaba240c3d5f1\Symfony\Component\Console\ConsoleEvents::COMMAND => ['configure', 1024]];
    }
}
