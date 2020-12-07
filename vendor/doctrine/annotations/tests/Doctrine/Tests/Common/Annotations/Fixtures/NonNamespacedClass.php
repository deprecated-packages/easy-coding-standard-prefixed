<?php

namespace _PhpScoperb83706991c7f;

use _PhpScoperb83706991c7f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb83706991c7f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb83706991c7f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
