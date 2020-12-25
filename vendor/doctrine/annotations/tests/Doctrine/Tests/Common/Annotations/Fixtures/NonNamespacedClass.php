<?php

namespace _PhpScoper745103eaabcd;

use _PhpScoper745103eaabcd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper745103eaabcd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper745103eaabcd\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
