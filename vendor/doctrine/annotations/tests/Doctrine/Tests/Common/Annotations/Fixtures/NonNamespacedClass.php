<?php

namespace _PhpScoperf3db63c305b2;

use _PhpScoperf3db63c305b2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperf3db63c305b2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperf3db63c305b2\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
