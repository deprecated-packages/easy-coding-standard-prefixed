<?php

namespace _PhpScoper04022cd986ec;

use _PhpScoper04022cd986ec\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper04022cd986ec\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper04022cd986ec\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
