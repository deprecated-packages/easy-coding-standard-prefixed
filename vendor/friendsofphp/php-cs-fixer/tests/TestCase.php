<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\Tests;

use _PhpScoper7574e8786845\PHPUnit\Framework\TestCase as BaseTestCase;
use _PhpScoper7574e8786845\PHPUnitGoodPractices\Polyfill\PolyfillTrait;
use _PhpScoper7574e8786845\PHPUnitGoodPractices\Traits\ExpectationViaCodeOverAnnotationTrait;
use _PhpScoper7574e8786845\PHPUnitGoodPractices\Traits\ExpectOverSetExceptionTrait;
use _PhpScoper7574e8786845\PHPUnitGoodPractices\Traits\IdentityOverEqualityTrait;
use _PhpScoper7574e8786845\PHPUnitGoodPractices\Traits\ProphecyOverMockObjectTrait;
use _PhpScoper7574e8786845\PHPUnitGoodPractices\Traits\ProphesizeOnlyInterfaceTrait;
if (\trait_exists(\_PhpScoper7574e8786845\PHPUnitGoodPractices\Traits\ProphesizeOnlyInterfaceTrait::class)) {
    /**
     * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
     *
     * @internal
     */
    abstract class TestCase extends \_PhpScoper7574e8786845\PHPUnit\Framework\TestCase
    {
        use ExpectationViaCodeOverAnnotationTrait;
        use ExpectOverSetExceptionTrait;
        use IdentityOverEqualityTrait;
        use PolyfillTrait;
        use ProphecyOverMockObjectTrait;
        use ProphesizeOnlyInterfaceTrait;
    }
} else {
    /**
     * Version without traits for cases when this class is used as a lib.
     *
     * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
     *
     * @internal
     *
     * @todo 3.0 To be removed when we clean up composer prod-autoloader from dev-packages.
     */
    abstract class TestCase extends \_PhpScoper7574e8786845\PHPUnit\Framework\TestCase
    {
    }
}
