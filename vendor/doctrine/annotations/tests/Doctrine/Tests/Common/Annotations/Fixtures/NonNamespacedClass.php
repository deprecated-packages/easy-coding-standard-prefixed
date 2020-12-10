<?php

namespace _PhpScoper2731c1906fe4;

use _PhpScoper2731c1906fe4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper2731c1906fe4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper2731c1906fe4\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
