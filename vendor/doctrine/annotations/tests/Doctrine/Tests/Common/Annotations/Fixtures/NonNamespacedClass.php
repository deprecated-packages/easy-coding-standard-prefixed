<?php

namespace _PhpScoperfabf55fef6b7;

use _PhpScoperfabf55fef6b7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperfabf55fef6b7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperfabf55fef6b7\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
