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

use _PhpScoper807f8e74693b\LegacyPHPUnit\TestCase as BaseTestCase;
use _PhpScoper807f8e74693b\PHPUnitGoodPractices\Polyfill\PolyfillTrait;
use _PhpScoper807f8e74693b\PHPUnitGoodPractices\Traits\ExpectationViaCodeOverAnnotationTrait;
use _PhpScoper807f8e74693b\PHPUnitGoodPractices\Traits\ExpectOverSetExceptionTrait;
use _PhpScoper807f8e74693b\PHPUnitGoodPractices\Traits\IdentityOverEqualityTrait;
use _PhpScoper807f8e74693b\PHPUnitGoodPractices\Traits\ProphecyOverMockObjectTrait;
use _PhpScoper807f8e74693b\PHPUnitGoodPractices\Traits\ProphesizeOnlyInterfaceTrait;
use _PhpScoper807f8e74693b\Prophecy\PhpUnit\ProphecyTrait;
// we check single, example DEV dependency - if it's there, we have the dev dependencies, if not, we are using PHP-CS-Fixer as library and trying to use internal TestCase...
if (\trait_exists(\_PhpScoper807f8e74693b\PHPUnitGoodPractices\Traits\ProphesizeOnlyInterfaceTrait::class)) {
    if (\trait_exists(\_PhpScoper807f8e74693b\Prophecy\PhpUnit\ProphecyTrait::class)) {
        /**
         * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
         *
         * @internal
         */
        abstract class InterimTestCase extends \_PhpScoper807f8e74693b\LegacyPHPUnit\TestCase
        {
            use ProphecyTrait;
        }
    } else {
        /**
         * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
         *
         * @internal
         */
        abstract class InterimTestCase extends \_PhpScoper807f8e74693b\LegacyPHPUnit\TestCase
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
    abstract class TestCase extends \_PhpScoper807f8e74693b\LegacyPHPUnit\TestCase
    {
    }
}
