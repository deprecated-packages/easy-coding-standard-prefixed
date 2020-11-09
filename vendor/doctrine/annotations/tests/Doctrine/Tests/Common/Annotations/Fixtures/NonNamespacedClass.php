<?php

namespace _PhpScoperf5f75c22067b;

use _PhpScoperf5f75c22067b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperf5f75c22067b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperf5f75c22067b\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
