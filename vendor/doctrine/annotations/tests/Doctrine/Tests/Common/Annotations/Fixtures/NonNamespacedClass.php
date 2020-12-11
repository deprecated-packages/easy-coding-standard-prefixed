<?php

namespace _PhpScoper23ef26a4fb01;

use _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper23ef26a4fb01\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
