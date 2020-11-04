<?php

namespace _PhpScoper75713bc3e278;

use _PhpScoper75713bc3e278\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper75713bc3e278\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper75713bc3e278\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
