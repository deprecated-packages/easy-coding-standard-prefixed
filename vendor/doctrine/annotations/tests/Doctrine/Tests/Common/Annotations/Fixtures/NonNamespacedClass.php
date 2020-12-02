<?php

namespace _PhpScoper2d2a405cc0f8;

use _PhpScoper2d2a405cc0f8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper2d2a405cc0f8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper2d2a405cc0f8\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
