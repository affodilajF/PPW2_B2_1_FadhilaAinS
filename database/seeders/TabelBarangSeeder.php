<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use Faker\Factory as Faker;

class TabelBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            // Membuat data dummy dengan menggunakan Faker
            $nama_barang = $faker->word;
            $harga = $faker->randomFloat(2, 10, 1000); // Harga dengan 2 angka desimal
            $stok = $faker->numberBetween(1, 100);
            $id_supplier = $faker->numberBetween(1, 5); // Gantilah dengan ID supplier yang sesuai

            // Menyimpan data ke dalam tabel "barang"
            Barang::create([
                'nama_barang' => $nama_barang,
                'harga' => $harga,
                'stok' => $stok,
                'id_supplier' => $id_supplier,
            ]);
        }
    }
}
