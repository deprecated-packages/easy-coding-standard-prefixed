<?php

namespace _PhpScoper3fa05b4669af;

use _PhpScoper3fa05b4669af\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper3fa05b4669af\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper3fa05b4669af\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
