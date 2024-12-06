<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Command
{
    protected $signature = 'db:create {name}';
    protected $description = 'Create a new database';

    public function handle()
    {
        $name = $this->argument('name');

        DB::statement("CREATE DATABASE $name");

        $this->info("Database '$name' created successfully.");
    }
}