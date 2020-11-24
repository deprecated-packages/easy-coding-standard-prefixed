<?php

namespace _PhpScoperbd5fb781fe24;

use _PhpScoperbd5fb781fe24\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperbd5fb781fe24\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperbd5fb781fe24\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
