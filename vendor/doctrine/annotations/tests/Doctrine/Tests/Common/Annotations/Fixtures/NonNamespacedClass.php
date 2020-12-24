<?php

namespace _PhpScopera37d6fb0b1ab;

use _PhpScopera37d6fb0b1ab\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera37d6fb0b1ab\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera37d6fb0b1ab\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
