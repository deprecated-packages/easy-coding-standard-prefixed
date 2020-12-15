<?php

namespace _PhpScoperdeea1786e972;

use _PhpScoperdeea1786e972\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperdeea1786e972\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperdeea1786e972\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
