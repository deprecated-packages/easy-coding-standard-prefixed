<?php

namespace _PhpScoperf7b66f9e3817;

use _PhpScoperf7b66f9e3817\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperf7b66f9e3817\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperf7b66f9e3817\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
