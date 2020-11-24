<?php

namespace _PhpScoper7c0f822a05e1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7c0f822a05e1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @NoAnnotation
 * @IgnoreAnnotation("NoAnnotation")
 * @Route("foo")
 */
class InvalidAnnotationUsageButIgnoredClass
{
}
