<?php declare(strict_types = 1);

namespace Leadflo\Prophet\Tests\Performance;

use Leadflo\Prophet\Skeleton;

class ExampleBench
{
    public function bench_example()
    {
        $example = new Skeleton();
        $example->example(rand(0, 20));
    }
}
