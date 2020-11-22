<?php

namespace _PhpScoperfacc742d2745;

use _PhpScoperfacc742d2745\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperfacc742d2745\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @Route("foo")
 * @Template
 */
class AnnotationsTestsFixturesNonNamespacedClass
{
}
/**
 * @Route("foo")
 * @Template
 */
\class_alias('_PhpScoperfacc742d2745\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
