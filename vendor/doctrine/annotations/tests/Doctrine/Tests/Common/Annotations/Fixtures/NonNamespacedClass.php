<?php

namespace _PhpScoper614deab2c612;

use _PhpScoper614deab2c612\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper614deab2c612\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper614deab2c612\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
