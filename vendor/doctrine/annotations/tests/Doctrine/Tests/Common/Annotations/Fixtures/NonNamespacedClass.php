<?php

namespace _PhpScoper836bc32aecc2;

use _PhpScoper836bc32aecc2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper836bc32aecc2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper836bc32aecc2\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
