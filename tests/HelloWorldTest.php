<?php

namespace Jimeneztdavid\Package;

use PHPUnit\Framework\TestCase;
use Jimeneztdavid\Package\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testHelloWorldFunction(): void
    {
        $this->assertSame('Hello World', (new HelloWorld)->helloWorld());
    }
}