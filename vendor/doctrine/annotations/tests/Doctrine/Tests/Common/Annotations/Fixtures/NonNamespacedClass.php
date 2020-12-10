<?php

namespace _PhpScoper58a0a169dcfb;

use _PhpScoper58a0a169dcfb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper58a0a169dcfb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper58a0a169dcfb\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
