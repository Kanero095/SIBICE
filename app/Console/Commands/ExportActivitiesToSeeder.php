<?php

namespace App\Console\Commands;

use App\Models\Activities;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ExportActivitiesToSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:export-activities-to-seeder';
    protected $signature = 'export:activities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ekspor data aktivitas ke file seeder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $activities = Activities::all()->toArray();
        $seederFilePath = database_path('seeders/ActivitiesSeeder.php');

        $data = var_export($activities, true);

        $content = <<<PHP
        <?php

        namespace Database\Seeders;

        use Illuminate\Database\Seeder;
        use App\Models\Activities;

        class ActivitiesSeeder extends Seeder
        {
            public function run()
            {
                Activities::truncate();
                Activities::insert($data);
            }
        }
        PHP;

        File::put($seederFilePath, $content);

        $this->info("Data aktivitas berhasil diekspor ke file seeder.");
    }
}
