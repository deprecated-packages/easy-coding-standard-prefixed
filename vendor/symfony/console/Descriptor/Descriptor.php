<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfcf15c26e033\Symfony\Component\Console\Descriptor;

use _PhpScoperfcf15c26e033\Symfony\Component\Console\Application;
use _PhpScoperfcf15c26e033\Symfony\Component\Console\Command\Command;
use _PhpScoperfcf15c26e033\Symfony\Component\Console\Exception\InvalidArgumentException;
use _PhpScoperfcf15c26e033\Symfony\Component\Console\Input\InputArgument;
use _PhpScoperfcf15c26e033\Symfony\Component\Console\Input\InputDefinition;
use _PhpScoperfcf15c26e033\Symfony\Component\Console\Input\InputOption;
use _PhpScoperfcf15c26e033\Symfony\Component\Console\Output\OutputInterface;
/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
abstract class Descriptor implements \_PhpScoperfcf15c26e033\Symfony\Component\Console\Descriptor\DescriptorInterface
{
    /**
     * @var OutputInterface
     */
    protected $output;
    /**
     * {@inheritdoc}
     */
    public function describe(\_PhpScoperfcf15c26e033\Symfony\Component\Console\Output\OutputInterface $output, $object, array $options = [])
    {
        $this->output = $output;
        switch (\true) {
            case $object instanceof \_PhpScoperfcf15c26e033\Symfony\Component\Console\Input\InputArgument:
                $this->describeInputArgument($object, $options);
                break;
            case $object instanceof \_PhpScoperfcf15c26e033\Symfony\Component\Console\Input\InputOption:
                $this->describeInputOption($object, $options);
                break;
            case $object instanceof \_PhpScoperfcf15c26e033\Symfony\Component\Console\Input\InputDefinition:
                $this->describeInputDefinition($object, $options);
                break;
            case $object instanceof \_PhpScoperfcf15c26e033\Symfony\Component\Console\Command\Command:
                $this->describeCommand($object, $options);
                break;
            case $object instanceof \_PhpScoperfcf15c26e033\Symfony\Component\Console\Application:
                $this->describeApplication($object, $options);
                break;
            default:
                throw new \_PhpScoperfcf15c26e033\Symfony\Component\Console\Exception\InvalidArgumentException(\sprintf('Object of type "%s" is not describable.', \get_class($object)));
        }
    }
    /**
     * Writes content to output.
     *
     * @param string $content
     * @param bool   $decorated
     */
    protected function write($content, $decorated = \false)
    {
        $this->output->write($content, \false, $decorated ? \_PhpScoperfcf15c26e033\Symfony\Component\Console\Output\OutputInterface::OUTPUT_NORMAL : \_PhpScoperfcf15c26e033\Symfony\Component\Console\Output\OutputInterface::OUTPUT_RAW);
    }
    /**
     * Describes an InputArgument instance.
     *
     * @return string|mixed
     */
    protected abstract function describeInputArgument(\_PhpScoperfcf15c26e033\Symfony\Component\Console\Input\InputArgument $argument, array $options = []);
    /**
     * Describes an InputOption instance.
     *
     * @return string|mixed
     */
    protected abstract function describeInputOption(\_PhpScoperfcf15c26e033\Symfony\Component\Console\Input\InputOption $option, array $options = []);
    /**
     * Describes an InputDefinition instance.
     *
     * @return string|mixed
     */
    protected abstract function describeInputDefinition(\_PhpScoperfcf15c26e033\Symfony\Component\Console\Input\InputDefinition $definition, array $options = []);
    /**
     * Describes a Command instance.
     *
     * @return string|mixed
     */
    protected abstract function describeCommand(\_PhpScoperfcf15c26e033\Symfony\Component\Console\Command\Command $command, array $options = []);
    /**
     * Describes an Application instance.
     *
     * @return string|mixed
     */
    protected abstract function describeApplication(\_PhpScoperfcf15c26e033\Symfony\Component\Console\Application $application, array $options = []);
}
