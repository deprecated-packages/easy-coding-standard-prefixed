<?php

namespace _PhpScoper21fff473f90a;

use _PhpScoper21fff473f90a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper21fff473f90a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper21fff473f90a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
