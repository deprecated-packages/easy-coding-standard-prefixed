<?php

namespace _PhpScoper4936962185e7;

use _PhpScoper4936962185e7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper4936962185e7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper4936962185e7\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
