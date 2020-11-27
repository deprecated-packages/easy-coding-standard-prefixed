<?php

namespace _PhpScoper578a67c80b2b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper578a67c80b2b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @NoAnnotation
 * @IgnoreAnnotation("NoAnnotation")
 * @Route("foo")
 */
class InvalidAnnotationUsageButIgnoredClass
{
}
