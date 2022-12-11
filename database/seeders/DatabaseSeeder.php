<?php

namespace Database\Seeders;

use App\Models\Merk;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Merk::create([
            'merk_produk' => 'Samsung'
        ]);
        Merk::create([
            'merk_produk' => 'MacBook'
        ]);
        Merk::create([
            'merk_produk' => 'Lenovo'
        ]);
        Merk::create([
            'merk_produk' => 'Dell'
        ]);
        Merk::create([
            'merk_produk' => 'ASUS'
        ]);
        Merk::create([
            'merk_produk' => 'ACER'
        ]);

        Produk::create([
            'kode_produk' => '10011',
            'tipe' => 'Samsung ChromeBook 4',
            'harga' => '15000000',
            'merk_id' => '1',
        ]);
        Produk::create([
            'kode_produk' => '10012',
            'tipe' => 'Samsung Galaxy BookZ Fold',
            'harga' => '35000000',
            'merk_id' => '1',
        ]);
        Produk::create([
            'kode_produk' => '20011',
            'tipe' => 'Apple Macnook Air M1 2020',
            'harga' => '28000000',
            'merk_id' => '2',
        ]);
        Produk::create([
            'kode_produk' => '20012',
            'tipe' => 'Apple Macnook Air M2 2020',
            'harga' => '40000000',
            'merk_id' => '2',
        ]);
        Produk::create([
            'kode_produk' => '30011',
            'tipe' => 'Thinkpad T470S',
            'harga' => '21000000',
            'merk_id' => '3',
        ]);
        Produk::create([
            'kode_produk' => '30022',
            'tipe' => 'Thinkpad T470',
            'harga' => '18000000',
            'merk_id' => '3',
        ]);
        Produk::create([
            'kode_produk' => '40011',
            'tipe' => 'Dell Inspiron 15 3511',
            'harga' => '12000000',
            'merk_id' => '4',
        ]);
        Produk::create([
            'kode_produk' => '40022',
            'tipe' => 'Dell Inspiron 15 3515',
            'harga' => '14000000',
            'merk_id' => '4',
        ]);
        Produk::create([
            'kode_produk' => '50011',
            'tipe' => 'ASUS ZenBook',
            'harga' => '17000000',
            'merk_id' => '5',
        ]);
        Produk::create([
            'kode_produk' => '50021',
            'tipe' => 'ASUS VivoBook',
            'harga' => '18000000',
            'merk_id' => '5',
        ]);
        Produk::create([
            'kode_produk' => '60011',
            'tipe' => 'ACer Nitro 5',
            'harga' => '14000000',
            'merk_id' => '6',
        ]);
        Produk::create([
            'kode_produk' => '60013',
            'tipe' => 'ACer Nitro 6',
            'harga' => '15000000',
            'merk_id' => '6',
        ]);
        
    }
}