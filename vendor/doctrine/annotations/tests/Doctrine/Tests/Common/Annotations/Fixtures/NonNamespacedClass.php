<?php

namespace _PhpScoperaa402dd1b1f1;

use _PhpScoperaa402dd1b1f1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperaa402dd1b1f1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperaa402dd1b1f1\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
