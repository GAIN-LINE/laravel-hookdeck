<?php

namespace GainLine\Hookdeck;

use Hookdeck\Configuration;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\Str;

class HookdeckManager
{
    protected Configuration $config;
    protected GuzzleClient $client;
    protected array $instances = [];

    public function __construct(Configuration $config)
    {
        $this->config = $config;
        $this->client = new GuzzleClient();
    }

    public function __get($name)
    {
        $class = "Hookdeck\\Api\\" . Str::studly($name);
        if (!class_exists($class)) {
            throw new \InvalidArgumentException("API {$class} not found.");
        }

        return $this->instances[$class] ??= new $class($this->client, $this->config);
    }

    public function getApi(string $apiClass)
    {
        if (!class_exists($apiClass)) {
            throw new \InvalidArgumentException("API {$apiClass} not found.");
        }

        return $this->instances[$apiClass] ??= new $apiClass($this->client, $this->config);
    }

    public function __call($name, $arguments)
    {
        return $this->__get($name);
    }
}
