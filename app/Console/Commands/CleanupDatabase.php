<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;

class CleanupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cleanup-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Delete posts without any comments
        Post::doesntHave('comments')->delete();

        $this->info('Database cleaned up successfully!');
    }
}
