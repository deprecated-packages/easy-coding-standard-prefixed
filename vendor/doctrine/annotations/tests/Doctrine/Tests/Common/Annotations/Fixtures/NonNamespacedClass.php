<?php

namespace _PhpScoper5384d7276e1f;

use _PhpScoper5384d7276e1f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper5384d7276e1f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper5384d7276e1f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
