<?php

namespace GainLine\Hookdeck\Console\Commands;

use Illuminate\Console\Command;
use GainLine\Hookdeck\HookdeckManager;

class ListConnections extends Command
{
    protected $signature = 'hookdeck:connections';
    protected $description = 'List Hookdeck connections';

    public function handle(HookdeckManager $hookdeck)
    {
        $connections = $hookdeck->connectionsApi->listConnections();
        foreach ($connections['data'] ?? [] as $conn) {
            $this->info("{$conn['id']}: {$conn['name']}");
        }
    }
}
