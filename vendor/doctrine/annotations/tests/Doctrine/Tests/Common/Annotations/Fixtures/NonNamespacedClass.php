<?php

namespace _PhpScoperc8b83ee8976a;

use _PhpScoperc8b83ee8976a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperc8b83ee8976a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperc8b83ee8976a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
