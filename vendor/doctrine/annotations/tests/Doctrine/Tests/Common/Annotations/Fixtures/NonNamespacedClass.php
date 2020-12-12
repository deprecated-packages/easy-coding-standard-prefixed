<?php

namespace _PhpScoperbd5c5a045153;

use _PhpScoperbd5c5a045153\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperbd5c5a045153\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperbd5c5a045153\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
