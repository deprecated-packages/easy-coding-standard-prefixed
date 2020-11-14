<?php

namespace _PhpScoperb09c3ec8e01a;

use _PhpScoperb09c3ec8e01a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb09c3ec8e01a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb09c3ec8e01a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
