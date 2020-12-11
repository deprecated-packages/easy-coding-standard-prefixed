<?php

namespace _PhpScopera061b8a47e36;

use _PhpScopera061b8a47e36\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera061b8a47e36\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera061b8a47e36\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
