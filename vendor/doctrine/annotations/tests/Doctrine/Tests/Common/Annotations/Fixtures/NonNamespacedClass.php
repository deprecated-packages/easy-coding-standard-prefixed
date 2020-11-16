<?php

namespace _PhpScoperdf6a0b341030;

use _PhpScoperdf6a0b341030\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperdf6a0b341030\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperdf6a0b341030\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
