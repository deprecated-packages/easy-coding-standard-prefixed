<?php

namespace _PhpScoper7c0f822a05e1;

use _PhpScoper7c0f822a05e1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper7c0f822a05e1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper7c0f822a05e1\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
