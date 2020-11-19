<?php

namespace _PhpScoper63567e560066;

use _PhpScoper63567e560066\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper63567e560066\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper63567e560066\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
