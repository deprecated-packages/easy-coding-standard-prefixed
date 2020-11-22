<?php

namespace _PhpScoper5ade29b97028;

use _PhpScoper5ade29b97028\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper5ade29b97028\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper5ade29b97028\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
