<?php

namespace _PhpScoperd9fcac9e904f;

use _PhpScoperd9fcac9e904f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperd9fcac9e904f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperd9fcac9e904f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
