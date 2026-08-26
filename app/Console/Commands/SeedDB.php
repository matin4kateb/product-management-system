<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SeedDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:seed-db {--class=Database\\Seeders\\DatabaseSeeder}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed the application database';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->call('db:seed', ['--class' => $this->option('class')]);
        $this->info('Database seeding complete.');

        return self::SUCCESS;
    }
}
