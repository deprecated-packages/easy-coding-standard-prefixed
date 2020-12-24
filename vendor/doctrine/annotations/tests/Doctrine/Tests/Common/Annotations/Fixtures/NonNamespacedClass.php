<?php

namespace _PhpScopere106f9fd4493;

use _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopere106f9fd4493\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
