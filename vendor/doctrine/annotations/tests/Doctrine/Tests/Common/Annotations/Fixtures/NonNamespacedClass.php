<?php

namespace _PhpScoperad68e34a80c5;

use _PhpScoperad68e34a80c5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperad68e34a80c5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperad68e34a80c5\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
