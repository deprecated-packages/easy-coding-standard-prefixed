<?php

namespace _PhpScoper833c56a97273;

use _PhpScoper833c56a97273\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper833c56a97273\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper833c56a97273\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
