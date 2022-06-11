<?php declare(strict_types=1);

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands;

use PHPUnit\Framework\TestCase;

/**
 * This is the command existence test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class CommandExistenceTest extends TestCase
{
    /**
     * @dataProvider provideFilesToCheck
     */
    public function testExistence($class, $test)
    {
        $this->assertTrue(class_exists($class) || interface_exists($class) || trait_exists($class), "Expected {$class} to exist.");

        if (class_exists($class)) {
            $this->assertTrue(class_exists($test), "Expected there to be tests for {$class}.");
        }
    }

    public function provideFilesToCheck()
    {
        $source = $this->getSourceNamespace();
        $tests = $this->getTestNamespace();
        $path = $this->getSourcePath();
        $len = strlen($path);

        $files = new CallbackFilterIterator(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)), function ($file) {
            return $file->getFilename()[0] !== '.' && !$file->isDir();
        });

        return array_map(function ($file) use ($len, $source, $tests) {
            $name = str_replace('/', '\\', strtok(substr($file->getPathname(), $len), '.'));

            return ["{$source}{$name}", "{$tests}{$name}Test"];
        }, iterator_to_array($files));
    }

    protected function getSourceNamespace()
    {
        return str_replace('\\Tests\\', '\\', $this->getTestNamespace());
    }

    protected function getTestNamespace()
    {
        return (new ReflectionClass($this))->getNamespaceName();
    }

    protected function getSourcePath()
    {
        return realpath(__DIR__.'/../../../app/Bus/Commands');
    }
}
