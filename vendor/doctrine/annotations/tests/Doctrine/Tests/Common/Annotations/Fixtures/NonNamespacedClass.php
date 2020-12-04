<?php

namespace _PhpScoperc233426b15e0;

use _PhpScoperc233426b15e0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperc233426b15e0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperc233426b15e0\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
