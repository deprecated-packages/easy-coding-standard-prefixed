<?php

namespace _PhpScoper8751341571b5;

use _PhpScoper8751341571b5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper8751341571b5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper8751341571b5\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
