<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'DELL Monitor LED 21.5 Inch S2216H',
                'description' => '21.5-inch, 1920 x 1080, 1000:1, 250 cd/m², VGA, HDMI, IPS Panel',
                'price' => 171.98,
                'photo' => 'images/DELL-Monitor-LED-21-5-Inch-S2216H--SKU07315715-201610710746.jpg'
            ],
            [
                'name' => 'HP EliteBook X360 1030 G2',
                'description' => 'Processor: Intel Core i5-7200U, RAM: 8GB DDR4, SSD: 256GB SSD, Konektivitas: NIC+ Wifi+Bluetooth, VGA: Intel HD Graphics 620, Ukuran Layar: 13.3 Inch FHD, Sistem Operasi: Windows 10 Pro',
                'price' => 1818.9,
                'photo' => 'images/HPEliteBookX3601030G2.jpg'
            ],
            [
                'name' => 'HP Omen 15-ce503TX [3FG11PA]',
                'description' => 'Processor: Intel Core i7-7700HQ, RAM: 16GB DDR4, HDD: 1TB HDD + 256GB SSD, VGA: GTX1060 6GB, Ukuran Layar: 15.6 Inch, Sistem Operasi: Windows 10 Home',
                'price' => 1870.9,
                'photo' => 'images/5a9e1a407bd16.jpg'
            ],
            [
                'name' => 'ACER Aspire 3 A315-41G Non Windows [NX.GYBSN.001] - Black',
                'description' => 'Prosesor: AMD RYZEN 3 2200U, RAM: 4GB DDR4, HDD: 1TB, Grafik: AMD Radeon 535 2GB, Konektifitas Wifi + Bluetooth, Ukuran Layar: 15.6 inch, Sistem Operasi: Non OS (Alinux)',
                'price' => 483,
                'photo' => 'images/5b0e6dcc0977e.jpg'
            ],
            [
                'name' => 'ASUS ROG Spatha Laser Gaming Mouse',
                'description' => 'Gaming Mouse, Wireless/Wired Mode, 8200 DPI, 150 ips, 30g acceleration, 2000Hz USB polling rate, 12 programmable button, ASUS Aura RGB LED lighting effects, Built-in flash memory',
                'price' => 187,
                'photo' => 'images/asus-rog-mouse.jpg'
            ],
            [
                'name' => 'SHURE Sound Isolating Headset SE115m+',
                'description' => 'Earphone, 22 - 17.500Hz, 16ohm, 105dB',
                'price' => 160.5,
                'photo' => 'images/SHURE-Sound-Isolating-Headset-[SE115m-]-SKU00310350_0-20141210115750.jpg'
            ],
            [
                'name' => 'JABRA Pro 930 [930-25-509-102]',
                'description' => 'Bluetooth Headset Mono, Wireless Technology, Up to 120 meters, Talk up to 8 hours, Crystal Clear Sound, HD Voice, Noise Canceling Microphone',
                'price' => 351,
                'photo' => 'images/599662cda8f0d.jpg'
            ],
            [
                'name' => 'PANASONIC ToughBook CF-54ED001T4 (Win10Pro) [CF-54ED001T4]',
                'description' => 'Processor: Intel Core i5-6300U, RAM: 4GB, HDD: 500GB HDD, Konektivitas: Wifi + Bluetooth + LAN, Ukuran Layar: 14 Inch HD, Sistem Operasi: Windows 10 Pro',
                'price' => 3989,
                'photo' => 'images/5c08df140740a.jpg'
            ],
        ]);
    }
}
