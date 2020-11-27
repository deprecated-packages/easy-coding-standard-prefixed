<?php

namespace _PhpScoper776637f3d3c3;

use _PhpScoper776637f3d3c3\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper776637f3d3c3\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper776637f3d3c3\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
