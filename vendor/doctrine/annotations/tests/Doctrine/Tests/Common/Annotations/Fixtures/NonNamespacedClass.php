<?php

namespace _PhpScopera749ac204cd2;

use _PhpScopera749ac204cd2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera749ac204cd2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera749ac204cd2\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
