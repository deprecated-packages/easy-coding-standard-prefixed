<?php

namespace _PhpScoper64a921a5401b;

use _PhpScoper64a921a5401b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper64a921a5401b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper64a921a5401b\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
