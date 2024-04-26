<?php

namespace Yarooze\AlchemillaBundle\Tests;

use Yarooze\AlchemillaBundle\DependencyInjection\AlchemillaExtension;
use Yarooze\AlchemillaBundle\AlchemillaBundle;
use PHPUnit\Framework\TestCase;

class YaroozeAlchemillaBundleTest extends TestCase
{
    public function testGetContainerExtension(): void
    {
        $bundle = new AlchemillaBundle();
        $this->assertInstanceOf(AlchemillaExtension::class, $bundle->getContainerExtension());
    }
}
