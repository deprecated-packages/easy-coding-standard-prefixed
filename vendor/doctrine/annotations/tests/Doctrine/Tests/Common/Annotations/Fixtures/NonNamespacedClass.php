<?php

namespace _PhpScoperaba240c3d5f1;

use _PhpScoperaba240c3d5f1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperaba240c3d5f1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperaba240c3d5f1\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
