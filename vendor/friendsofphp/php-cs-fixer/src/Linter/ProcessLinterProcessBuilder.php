<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\Linter;

use _PhpScoperd74b3ed28382\Symfony\Component\Process\Process;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * @internal
 */
final class ProcessLinterProcessBuilder
{
    /**
     * @var string
     */
    private $executable;
    /**
     * @param string $executable PHP executable
     */
    public function __construct($executable)
    {
        $this->executable = $executable;
    }
    /**
     * @param string $path
     *
     * @return Process
     */
    public function build($path)
    {
        return new \_PhpScoperd74b3ed28382\Symfony\Component\Process\Process([$this->executable, '-l', $path]);
    }
}
