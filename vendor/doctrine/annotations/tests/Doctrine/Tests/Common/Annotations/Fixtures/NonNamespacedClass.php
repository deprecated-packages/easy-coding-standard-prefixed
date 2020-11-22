<?php

namespace _PhpScoper4cd05b62e9f1;

use _PhpScoper4cd05b62e9f1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper4cd05b62e9f1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper4cd05b62e9f1\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
