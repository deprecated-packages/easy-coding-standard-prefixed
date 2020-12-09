<?php

namespace _PhpScoper31ba553edf97;

use _PhpScoper31ba553edf97\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper31ba553edf97\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper31ba553edf97\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
