<?php

namespace App\Statics;

trait Product
{

    public function findProduct(string $productName)
    {
        $product = [
            'flipper' => [
                'comfort' => 'Super Comfort',
                'color' => 'Hijau, Coklat, Biru dan Merah',
                'height' => '43cm',
                'guarantee' => '25 Tahun',
                'size' => [
                    '90 x 200 cm',
                    '100 x 200 cm',
                    '120 x 200 cm',
                    '140 x 200 cm',
                    '160 x 200 cm',
                    '180 x 200 cm',
                    '200 x 200 cm',
                ],
                'description' => 'Flipper merupakan Spring Bed yang fleksibel , nyaman, dan ekonomis. Didesain khusus dengan kenyamanan berbeda (lembut & keras) dengan cara dibalik sesuai dengan kebutuhan tidur Anda. Menggunakan tekstil 3D Jacquard design yang multi warna, menjadikan spring bed ini sangat ekslusif.',
            ],
            'harmony' => [
                'comfort' => 'Super Comfort',
                'color' => null,
                'height' => '43cm',
                'guarantee' => '25 Tahun',
                'size' => [
                    '120 x 200 cm',
                    '160 x 200 cm',
                    '180 x 200 cm',
                    '200 x 200 cm',
                ],
                'description' => 'Harmony mempunyai semua kelebihan yang diperlukan untuk kesehatan tubuh. Pillow top setinggi 12 cm untuk kenyamanan tidur dan tampilan yang mewah, 7 support zones untuk kesehatan tulang belakang, menggunakan komposisi double super soft foam dan menggunakan textile knitting yang lembut membuat Harmony semakin nyaman untuk digunakan. Perpaduan warna putih dan hitam membuat kesan Harmony semakin mewah.',
            ],
            'elegance' => [
                'comfort' => 'Soft',
                'color' => 'Coklat, Biru dan Merah',
                'height' => '25cm',
                'guarantee' => '25 Tahun',
                'size' => [
                    '90 x 200 cm',
                    '100 x 200 cm',
                    '120 x 200 cm',
                    '140 x 200 cm',
                    '160 x 200 cm',
                    '180 x 200 cm',
                    '200 x 200 cm',
                ],
                'description' => 'Elegance merupakan flip mattress (bisa di bolak-balik). Menggunakan High Density Foam serta textile knitting warna dengan 3D desain.',
            ],
            'crystal' => [
                'comfort' => 'Comfort',
                'color' => 'Abu-abu dan Kuning',
                'height' => '23cm',
                'guarantee' => '25 Tahun',
                'size' => [
                    '90 x 200 cm',
                    '100 x 200 cm',
                    '120 x 200 cm',
                    '140 x 200 cm',
                    '160 x 200 cm',
                    '180 x 200 cm',
                    '200 x 200 cm',
                ],
                'description' => 'Crystal mempunyai komposisi high density foam serta menggunakan textile Jacquard dengan 12 Pick.',
            ],
            'sporty' => [
                'comfort' => 'Medium Soft',
                'color' => 'Abu-abu dan Kuning',
                'height' => '32cm',
                'guarantee' => '25 Tahun',
                'size' => [
                    '90 x 200 cm',
                    '100 x 200 cm',
                    '120 x 200 cm',
                    '140 x 200 cm',
                    '150 x 200 cm',
                ],
                'description' => 'Sporty didesain modern minimalis dimana bagian divan dan springbed menjadi satu serta ditambah dengan Headboard yang menambah kesan semakin modern. Menggunakan High Density Foam serta textile Jaquard 3D yang memiliki 12 pick. Sporty mempunyai warna abu-abu yang kombinasikan dengan warna hitam sehingga menjadikan semakin terlihat modern dan minimalis.',
            ],
            'prestige' => [
                'comfort' => 'Medium Hard',
                'color' => 'Abu-abu dan Kuning',
                'height' => '27cm',
                'guarantee' => '25 Tahun',
                'size' => [
                    '120 x 200 cm',
                    '140 x 200 cm',
                    '160 x 200 cm',
                    '180 x 200 cm',
                    '200 x 200 cm',
                ],
                'description' => 'Prestige memiliki pillow top setinggi 7 cm dan menjadikan tidur anda nyaman serta berkualitas. Menggunakan High Density Foam serta textile knitting yang lembut dan nyaman. Prestige mempunyai warna putih yang kombinasikan dengan warna grey sehingga menjadikan semakin terlihat mewah.',
            ],
            'elegance-2' => null,
        ];

        if ($productName) {
            foreach ($product as $val => $i) {
                if ($productName === $val) return $i;
            }
        }

        return abort(404);
    }
}
