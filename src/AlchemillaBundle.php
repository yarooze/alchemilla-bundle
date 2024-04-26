<?php

namespace Yarooze\AlchemillaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AlchemillaBundle extends Bundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }
}
