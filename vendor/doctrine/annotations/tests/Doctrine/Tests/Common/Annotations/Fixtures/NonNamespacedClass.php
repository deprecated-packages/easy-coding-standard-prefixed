<?php

namespace _PhpScoperb44a315fec16;

use _PhpScoperb44a315fec16\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb44a315fec16\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb44a315fec16\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
