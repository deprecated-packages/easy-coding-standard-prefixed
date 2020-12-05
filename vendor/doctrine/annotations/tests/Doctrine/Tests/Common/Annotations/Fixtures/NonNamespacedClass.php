<?php

namespace _PhpScoperc83f84c90b60;

use _PhpScoperc83f84c90b60\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperc83f84c90b60\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperc83f84c90b60\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
