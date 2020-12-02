<?php

namespace _PhpScoperf62d28230928;

use _PhpScoperf62d28230928\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperf62d28230928\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperf62d28230928\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
