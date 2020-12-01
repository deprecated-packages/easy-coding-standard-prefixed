<?php

namespace _PhpScoper96382aaac118;

use _PhpScoper96382aaac118\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper96382aaac118\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper96382aaac118\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
