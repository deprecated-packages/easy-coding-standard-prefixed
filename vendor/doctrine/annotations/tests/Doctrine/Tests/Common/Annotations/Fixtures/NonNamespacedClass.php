<?php

namespace _PhpScoper1103e00fb46b;

use _PhpScoper1103e00fb46b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper1103e00fb46b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper1103e00fb46b\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
