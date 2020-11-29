<?php

namespace _PhpScoper28ab463fc3ba;

use _PhpScoper28ab463fc3ba\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper28ab463fc3ba\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper28ab463fc3ba\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
