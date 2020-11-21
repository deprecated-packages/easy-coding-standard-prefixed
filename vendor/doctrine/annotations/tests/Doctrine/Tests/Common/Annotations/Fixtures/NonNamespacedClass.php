<?php

namespace _PhpScoper3639953bb9e5;

use _PhpScoper3639953bb9e5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper3639953bb9e5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper3639953bb9e5\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
