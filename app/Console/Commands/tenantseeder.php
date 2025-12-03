<?php

namespace App\Console\Commands;

use App\Models\RegisBinaanUKM;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class tenantseeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:export-activities-to-seeder';
    protected $signature = 'export:Tenants';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ekspor data Tenant ke file seeder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tenants = RegisBinaanUKM::all()->toArray();
        $seederFilePath = database_path('seeders/TenantSeeder.php');

        $data = var_export($tenants, true);

        $content = <<<PHP
        <?php

        namespace Database\Seeders;

        use Illuminate\Database\Seeder;
        use App\Models\RegisBinaanUKM; //sesuai model dari database yang akan ditarik

        class TenantSeeder extends Seeder
        {
            public function run()
            {
                RegisBinaanUKM::truncate();
                RegisBinaanUKM::insert($data);
            }
        }
        PHP;

        File::put($seederFilePath, $content);

        $this->info("Data aktivitas berhasil diekspor ke file seeder.");
    }
}
