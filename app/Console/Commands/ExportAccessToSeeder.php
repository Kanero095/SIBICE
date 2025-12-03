<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ExportAccessToSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:export-access-to-seeder';
    protected $signature = 'export:Access';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ekspor data Akses ke file seeder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $access = User::all()->toArray();
        $seederFilePath = database_path('seeders/AccessSeeder.php');

        $data = var_export($access, true);

        $content = <<<PHP
        <?php
        namespace Database\Seeders;

        use App\Models\User;
        use Illuminate\Database\Console\Seeds\WithoutModelEvents;
        use Illuminate\Database\Seeder;

        class ActivitiesSeeder extends Seeder
        {
            public function run() : void
            {
                User::truncate();
                User::create($data);
            }
        }
        PHP;

        File::put($seederFilePath, $content);

        $this->info("Data User berhasil diekspor ke file seeder.");
    }
}
