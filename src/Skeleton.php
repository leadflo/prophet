<?php declare(strict_types = 1);

namespace Leadflo\Prophet;

class Skeleton
{
    public function example(int $test): string
    {
        if ($test < 10) {
            return "yes";
        }

        return "no";
    }
}
