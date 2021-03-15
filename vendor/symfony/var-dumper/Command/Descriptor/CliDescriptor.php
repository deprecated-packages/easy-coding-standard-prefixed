<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper8a7636b3fdaf\Symfony\Component\VarDumper\Command\Descriptor;

use _PhpScoper8a7636b3fdaf\Symfony\Component\Console\Formatter\OutputFormatterStyle;
use _PhpScoper8a7636b3fdaf\Symfony\Component\Console\Input\ArrayInput;
use _PhpScoper8a7636b3fdaf\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper8a7636b3fdaf\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper8a7636b3fdaf\Symfony\Component\VarDumper\Cloner\Data;
use _PhpScoper8a7636b3fdaf\Symfony\Component\VarDumper\Dumper\CliDumper;
/**
 * Describe collected data clones for cli output.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class CliDescriptor implements \_PhpScoper8a7636b3fdaf\Symfony\Component\VarDumper\Command\Descriptor\DumpDescriptorInterface
{
    private $dumper;
    private $lastIdentifier;
    private $supportsHref;
    public function __construct(\_PhpScoper8a7636b3fdaf\Symfony\Component\VarDumper\Dumper\CliDumper $dumper)
    {
        $this->dumper = $dumper;
        $this->supportsHref = \method_exists(\_PhpScoper8a7636b3fdaf\Symfony\Component\Console\Formatter\OutputFormatterStyle::class, 'setHref');
    }
    public function describe(\_PhpScoper8a7636b3fdaf\Symfony\Component\Console\Output\OutputInterface $output, \_PhpScoper8a7636b3fdaf\Symfony\Component\VarDumper\Cloner\Data $data, array $context, int $clientId) : void
    {
        $io = $output instanceof \_PhpScoper8a7636b3fdaf\Symfony\Component\Console\Style\SymfonyStyle ? $output : new \_PhpScoper8a7636b3fdaf\Symfony\Component\Console\Style\SymfonyStyle(new \_PhpScoper8a7636b3fdaf\Symfony\Component\Console\Input\ArrayInput([]), $output);
        $this->dumper->setColors($output->isDecorated());
        $rows = [['date', \date('r', $context['timestamp'])]];
        $lastIdentifier = $this->lastIdentifier;
        $this->lastIdentifier = $clientId;
        $section = "Received from client #{$clientId}";
        if (isset($context['request'])) {
            $request = $context['request'];
            $this->lastIdentifier = $request['identifier'];
            $section = \sprintf('%s %s', $request['method'], $request['uri']);
            if ($controller = $request['controller']) {
                $rows[] = ['controller', \rtrim($this->dumper->dump($controller, \true), "\n")];
            }
        } elseif (isset($context['cli'])) {
            $this->lastIdentifier = $context['cli']['identifier'];
            $section = '$ ' . $context['cli']['command_line'];
        }
        if ($this->lastIdentifier !== $lastIdentifier) {
            $io->section($section);
        }
        if (isset($context['source'])) {
            $source = $context['source'];
            $sourceInfo = \sprintf('%s on line %d', $source['name'], $source['line']);
            $fileLink = $source['file_link'] ?? null;
            if ($this->supportsHref && $fileLink) {
                $sourceInfo = \sprintf('<href=%s>%s</>', $fileLink, $sourceInfo);
            }
            $rows[] = ['source', $sourceInfo];
            $file = $source['file_relative'] ?? $source['file'];
            $rows[] = ['file', $file];
        }
        $io->table([], $rows);
        if (!$this->supportsHref && isset($fileLink)) {
            $io->writeln(['<info>Open source in your IDE/browser:</info>', $fileLink]);
            $io->newLine();
        }
        $this->dumper->dump($data);
        $io->newLine();
    }
}
