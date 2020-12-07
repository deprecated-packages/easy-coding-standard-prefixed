<?php

namespace _PhpScoperfa521053d812;

use _PhpScoperfa521053d812\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperfa521053d812\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperfa521053d812\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
