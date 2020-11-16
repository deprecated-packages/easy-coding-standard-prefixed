<?php

namespace _PhpScoper239b374a39c8;

use _PhpScoper239b374a39c8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper239b374a39c8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper239b374a39c8\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
