<?php

namespace _PhpScoper7145e5e87de5;

use _PhpScoper7145e5e87de5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper7145e5e87de5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper7145e5e87de5\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
