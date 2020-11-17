<?php

namespace _PhpScoperad4b7e2c09d8;

use _PhpScoperad4b7e2c09d8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperad4b7e2c09d8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperad4b7e2c09d8\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
