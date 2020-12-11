<?php

namespace _PhpScopere4fa57261c04;

use _PhpScopere4fa57261c04\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopere4fa57261c04\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopere4fa57261c04\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
