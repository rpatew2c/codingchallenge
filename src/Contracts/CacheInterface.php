<?php

declare(strict_types=1);

namespace FakeWeather\Contracts;

interface CacheInterface
{
    /**
     * @param string $key
     * @param int|string|float|array|null $value
     * @param int $duration Duration in seconds
     */
    public function set(string $key, $value, int $duration): void;

    /**
     * @param string $key
     * @return int|string|float|array|null
     */
    public function get(string $key);
}
