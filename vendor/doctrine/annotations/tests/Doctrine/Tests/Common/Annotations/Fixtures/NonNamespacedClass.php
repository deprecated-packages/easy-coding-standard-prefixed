<?php

namespace _PhpScoper4edd80b4ab80;

use _PhpScoper4edd80b4ab80\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper4edd80b4ab80\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper4edd80b4ab80\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
