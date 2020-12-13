<?php

namespace _PhpScoper8db4616aa69d;

use _PhpScoper8db4616aa69d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper8db4616aa69d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper8db4616aa69d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
