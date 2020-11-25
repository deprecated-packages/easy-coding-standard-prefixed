<?php

namespace _PhpScoperaac5f7c652e4;

use _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperaac5f7c652e4\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
