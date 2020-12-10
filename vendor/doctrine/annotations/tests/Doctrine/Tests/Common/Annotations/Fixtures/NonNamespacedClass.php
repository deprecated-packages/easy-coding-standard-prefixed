<?php

namespace _PhpScopera1a51450b61d;

use _PhpScopera1a51450b61d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera1a51450b61d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera1a51450b61d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
