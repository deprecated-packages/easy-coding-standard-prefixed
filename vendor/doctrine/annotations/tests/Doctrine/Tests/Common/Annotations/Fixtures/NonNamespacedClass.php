<?php

namespace _PhpScoperb6ccec8ab642;

use _PhpScoperb6ccec8ab642\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb6ccec8ab642\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb6ccec8ab642\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
