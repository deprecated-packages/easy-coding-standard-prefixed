<?php

namespace _PhpScoper908feaf49cd8;

use _PhpScoper908feaf49cd8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper908feaf49cd8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper908feaf49cd8\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
