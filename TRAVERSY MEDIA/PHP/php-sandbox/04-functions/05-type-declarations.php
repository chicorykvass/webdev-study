<?php

declare(strict_types=1);

function getSum(int $a, int $b): int {
  return $a + $b;
}

echo getSum(1, 3) . '<br />';

function greeting(string $name): void {
  echo "Hello, $name<br />";
}

greeting('John');
