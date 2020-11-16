<?php

namespace _PhpScoperad4605bb9267;

use _PhpScoperad4605bb9267\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperad4605bb9267\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperad4605bb9267\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
