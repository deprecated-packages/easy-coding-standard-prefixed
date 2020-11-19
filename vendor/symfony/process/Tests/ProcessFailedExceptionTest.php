<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper63567e560066\Symfony\Component\Process\Tests;

use _PhpScoper63567e560066\PHPUnit\Framework\TestCase;
use _PhpScoper63567e560066\Symfony\Component\Process\Exception\ProcessFailedException;
/**
 * @author Sebastian Marek <proofek@gmail.com>
 */
class ProcessFailedExceptionTest extends \_PhpScoper63567e560066\PHPUnit\Framework\TestCase
{
    /**
     * tests ProcessFailedException throws exception if the process was successful.
     */
    public function testProcessFailedExceptionThrowsException()
    {
        $process = $this->getMockBuilder('_PhpScoper63567e560066\\Symfony\\Component\\Process\\Process')->setMethods(array('isSuccessful'))->setConstructorArgs(array('php'))->getMock();
        $process->expects($this->once())->method('isSuccessful')->will($this->returnValue(\true));
        $this->{\method_exists($this, $_ = 'expectException') ? $_ : 'setExpectedException'}('\\InvalidArgumentException', 'Expected a failed process, but the given process was successful.');
        new \_PhpScoper63567e560066\Symfony\Component\Process\Exception\ProcessFailedException($process);
    }
    /**
     * tests ProcessFailedException uses information from process output
     * to generate exception message.
     */
    public function testProcessFailedExceptionPopulatesInformationFromProcessOutput()
    {
        $cmd = 'php';
        $exitCode = 1;
        $exitText = 'General error';
        $output = 'Command output';
        $errorOutput = 'FATAL: Unexpected error';
        $workingDirectory = \getcwd();
        $process = $this->getMockBuilder('_PhpScoper63567e560066\\Symfony\\Component\\Process\\Process')->setMethods(array('isSuccessful', 'getOutput', 'getErrorOutput', 'getExitCode', 'getExitCodeText', 'isOutputDisabled', 'getWorkingDirectory'))->setConstructorArgs(array($cmd))->getMock();
        $process->expects($this->once())->method('isSuccessful')->will($this->returnValue(\false));
        $process->expects($this->once())->method('getOutput')->will($this->returnValue($output));
        $process->expects($this->once())->method('getErrorOutput')->will($this->returnValue($errorOutput));
        $process->expects($this->once())->method('getExitCode')->will($this->returnValue($exitCode));
        $process->expects($this->once())->method('getExitCodeText')->will($this->returnValue($exitText));
        $process->expects($this->once())->method('isOutputDisabled')->will($this->returnValue(\false));
        $process->expects($this->once())->method('getWorkingDirectory')->will($this->returnValue($workingDirectory));
        $exception = new \_PhpScoper63567e560066\Symfony\Component\Process\Exception\ProcessFailedException($process);
        $this->assertEquals("The command \"{$cmd}\" failed.\n\nExit Code: {$exitCode}({$exitText})\n\nWorking directory: {$workingDirectory}\n\nOutput:\n================\n{$output}\n\nError Output:\n================\n{$errorOutput}", $exception->getMessage());
    }
    /**
     * Tests that ProcessFailedException does not extract information from
     * process output if it was previously disabled.
     */
    public function testDisabledOutputInFailedExceptionDoesNotPopulateOutput()
    {
        $cmd = 'php';
        $exitCode = 1;
        $exitText = 'General error';
        $workingDirectory = \getcwd();
        $process = $this->getMockBuilder('_PhpScoper63567e560066\\Symfony\\Component\\Process\\Process')->setMethods(array('isSuccessful', 'isOutputDisabled', 'getExitCode', 'getExitCodeText', 'getOutput', 'getErrorOutput', 'getWorkingDirectory'))->setConstructorArgs(array($cmd))->getMock();
        $process->expects($this->once())->method('isSuccessful')->will($this->returnValue(\false));
        $process->expects($this->never())->method('getOutput');
        $process->expects($this->never())->method('getErrorOutput');
        $process->expects($this->once())->method('getExitCode')->will($this->returnValue($exitCode));
        $process->expects($this->once())->method('getExitCodeText')->will($this->returnValue($exitText));
        $process->expects($this->once())->method('isOutputDisabled')->will($this->returnValue(\true));
        $process->expects($this->once())->method('getWorkingDirectory')->will($this->returnValue($workingDirectory));
        $exception = new \_PhpScoper63567e560066\Symfony\Component\Process\Exception\ProcessFailedException($process);
        $this->assertEquals("The command \"{$cmd}\" failed.\n\nExit Code: {$exitCode}({$exitText})\n\nWorking directory: {$workingDirectory}", $exception->getMessage());
    }
}
