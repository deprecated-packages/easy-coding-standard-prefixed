<?php

namespace _PhpScoper83b3b9a317c0;

use _PhpScoper83b3b9a317c0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper83b3b9a317c0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper83b3b9a317c0\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
