<?php

namespace _PhpScoper797695bcfb1f;

use _PhpScoper797695bcfb1f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper797695bcfb1f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper797695bcfb1f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
