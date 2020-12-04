<?php

namespace _PhpScopera04bf8e97c06;

use _PhpScopera04bf8e97c06\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera04bf8e97c06\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera04bf8e97c06\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
