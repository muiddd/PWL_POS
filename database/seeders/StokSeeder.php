<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'stok_id' => $i,
                'supplier_id' => ceil($i / 5),
                'barang_id' => $i,
                'user_id' => 1, 
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 100, 
            ];
        }
        DB::table('t_stok')->insert($data);
    }
}