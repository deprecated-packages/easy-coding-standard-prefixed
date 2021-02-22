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

use _PhpScoperfcee700af3df\LegacyPHPUnit\TestCase as BaseTestCase;
use _PhpScoperfcee700af3df\PHPUnitGoodPractices\Polyfill\PolyfillTrait;
use _PhpScoperfcee700af3df\PHPUnitGoodPractices\Traits\ExpectationViaCodeOverAnnotationTrait;
use _PhpScoperfcee700af3df\PHPUnitGoodPractices\Traits\ExpectOverSetExceptionTrait;
use _PhpScoperfcee700af3df\PHPUnitGoodPractices\Traits\IdentityOverEqualityTrait;
use _PhpScoperfcee700af3df\PHPUnitGoodPractices\Traits\ProphecyOverMockObjectTrait;
use _PhpScoperfcee700af3df\PHPUnitGoodPractices\Traits\ProphesizeOnlyInterfaceTrait;
use _PhpScoperfcee700af3df\Prophecy\PhpUnit\ProphecyTrait;
// we check single, example DEV dependency - if it's there, we have the dev dependencies, if not, we are using PHP-CS-Fixer as library and trying to use internal TestCase...
if (\trait_exists(\_PhpScoperfcee700af3df\PHPUnitGoodPractices\Traits\ProphesizeOnlyInterfaceTrait::class)) {
    if (\trait_exists(\_PhpScoperfcee700af3df\Prophecy\PhpUnit\ProphecyTrait::class)) {
        /**
         * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
         *
         * @internal
         */
        abstract class InterimTestCase extends \_PhpScoperfcee700af3df\LegacyPHPUnit\TestCase
        {
            use ProphecyTrait;
        }
    } else {
        /**
         * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
         *
         * @internal
         */
        abstract class InterimTestCase extends \_PhpScoperfcee700af3df\LegacyPHPUnit\TestCase
        {
        }
    }
    /**
     * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
     *
     * @internal
     */
    abstract class TestCase extends \PhpCsFixer\Tests\InterimTestCase
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
    abstract class TestCase extends \_PhpScoperfcee700af3df\LegacyPHPUnit\TestCase
    {
    }
}
