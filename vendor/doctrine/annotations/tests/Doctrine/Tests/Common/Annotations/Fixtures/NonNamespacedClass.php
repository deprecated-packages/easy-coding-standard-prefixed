<?php

namespace _PhpScoper5cb8aea05893;

use _PhpScoper5cb8aea05893\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper5cb8aea05893\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper5cb8aea05893\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
