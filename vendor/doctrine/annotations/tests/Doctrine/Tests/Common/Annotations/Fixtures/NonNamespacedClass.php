<?php

namespace _PhpScoperfab1bfb7ec99;

use _PhpScoperfab1bfb7ec99\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperfab1bfb7ec99\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperfab1bfb7ec99\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
