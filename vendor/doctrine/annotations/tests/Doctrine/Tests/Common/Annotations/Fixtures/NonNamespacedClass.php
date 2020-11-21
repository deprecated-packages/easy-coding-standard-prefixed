<?php

namespace _PhpScoper224ae0b86670;

use _PhpScoper224ae0b86670\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper224ae0b86670\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper224ae0b86670\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
