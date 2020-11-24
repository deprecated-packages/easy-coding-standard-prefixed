<?php

namespace _PhpScoper7108c819f5c5;

use _PhpScoper7108c819f5c5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper7108c819f5c5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper7108c819f5c5\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
