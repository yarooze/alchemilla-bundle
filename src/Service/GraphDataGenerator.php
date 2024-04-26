<?php

namespace Yarooze\AlchemillaBundle\Service;

class GraphDataGenerator
{
    public function generateDummyData()
    {
        $data = [
            'nodes' => [['id' => 1], ['id' => 2],['id' => 3]],
            'edges' => [['source'=> 1,'target'=> 2],['source'=> 2,'target'=> 3],['source'=> 1,'target'=> 3]],
        ];

        return $data;
    }
}
