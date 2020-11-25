<?php

namespace _PhpScoper38a7d00685f8;

use _PhpScoper38a7d00685f8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper38a7d00685f8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper38a7d00685f8\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
