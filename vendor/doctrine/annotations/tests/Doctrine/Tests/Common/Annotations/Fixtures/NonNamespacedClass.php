<?php

namespace _PhpScoperb730595bc9f4;

use _PhpScoperb730595bc9f4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb730595bc9f4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb730595bc9f4\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
