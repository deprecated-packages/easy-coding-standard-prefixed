<?php

/**
 * A PHP_CodeSniffer specific test suite for PHPUnit.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */
namespace PHP_CodeSniffer\Tests;

use _PhpScoper842c7347e6be\PHPUnit\Framework\TestSuite as PHPUnit_TestSuite;
use _PhpScoper842c7347e6be\PHPUnit\Framework\TestResult;
class TestSuite extends \_PhpScoper842c7347e6be\PHPUnit\Framework\TestSuite
{
    /**
     * Runs the tests and collects their result in a TestResult.
     *
     * @param \PHPUnit\Framework\TestResult $result A test result.
     *
     * @return \PHPUnit\Framework\TestResult
     */
    public function run(\_PhpScoper842c7347e6be\PHPUnit\Framework\TestResult $result = null) : \_PhpScoper842c7347e6be\PHPUnit\Framework\TestResult
    {
        $result = parent::run($result);
        printPHPCodeSnifferTestOutput();
        return $result;
    }
    //end run()
}
//end class
