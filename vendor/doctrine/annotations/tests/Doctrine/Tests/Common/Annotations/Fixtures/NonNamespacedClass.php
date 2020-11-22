<?php

namespace _PhpScoperac4e86be08e5;

use _PhpScoperac4e86be08e5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperac4e86be08e5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperac4e86be08e5\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
