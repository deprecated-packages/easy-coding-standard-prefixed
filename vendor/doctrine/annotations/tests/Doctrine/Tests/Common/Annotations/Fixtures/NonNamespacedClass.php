<?php

namespace _PhpScoperfcf15c26e033;

use _PhpScoperfcf15c26e033\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperfcf15c26e033\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperfcf15c26e033\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
