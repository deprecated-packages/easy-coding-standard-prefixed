<?php

namespace _PhpScoper4a718ec9156e;

use _PhpScoper4a718ec9156e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper4a718ec9156e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper4a718ec9156e\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
