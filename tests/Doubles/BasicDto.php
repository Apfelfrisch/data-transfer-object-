<?php

namespace Apfelfrisch\DataTransferObject\Test\Doubles;

use Apfelfrisch\DataTransferObject\DataTransferObject;

class BasicDto extends DataTransferObject
{
    public function __construct(
        public int $int,
        public float $float,
        public string $string,
    ) { }
}
