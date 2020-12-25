<?php

namespace _PhpScoperc8fea59b0cb1;

use _PhpScoperc8fea59b0cb1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperc8fea59b0cb1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperc8fea59b0cb1\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
