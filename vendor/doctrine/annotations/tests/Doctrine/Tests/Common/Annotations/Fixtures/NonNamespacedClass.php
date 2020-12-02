<?php

namespace _PhpScoper6a0a7eb6e565;

use _PhpScoper6a0a7eb6e565\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper6a0a7eb6e565\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper6a0a7eb6e565\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
