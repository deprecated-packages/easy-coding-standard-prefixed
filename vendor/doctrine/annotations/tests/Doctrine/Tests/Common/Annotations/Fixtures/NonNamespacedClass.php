<?php

namespace _PhpScoper992f4af8b9e0;

use _PhpScoper992f4af8b9e0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper992f4af8b9e0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper992f4af8b9e0\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
