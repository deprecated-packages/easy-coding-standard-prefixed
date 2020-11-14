<?php

namespace _PhpScoperd4937ee9b515;

use _PhpScoperd4937ee9b515\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperd4937ee9b515\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperd4937ee9b515\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
