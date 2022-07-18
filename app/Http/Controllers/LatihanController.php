<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function menu ()
    {
        $a = [
            array('beranda' => "Beranda", 
            'berita' => "Berita", 
            'Berita' => ['Politik','Manca Negara'], 
            'Olahraga' => "Olahraga", 
            'olahraga' => ['Sepak Bola', 'Bulu Tangkis'], 
            'tentang' => "Tentang"),
        ];
        return view('pages1.menu',  ['menu' => $a]);
    }

    public function dosen ()
    {
        $b = [
            ['id' => 1, 'namadosen' => 'Yusuf Bachtiar', 'matkul' => 'Pemograman Mobile', 
            'mahasiswa' => [
                ['nama' => 'Muhammad Soleh', 'nilai' => 78],
                ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                ['nama' => 'Ubay Holin', 'nilai' => 87],
                ['nama' => 'Fadillah', 'nilai' => 95],
            ]
            ],

            ['id' => 1, 'namadosen' => 'Yaris Riyadi', 'matkul' => 'Pemograman Web', 
            'mahasiswa' => [
                ['nama' => 'Alfred McTomminay', 'nilai' => 67],
                ['nama' => 'Bruno Kasmir', 'nilai' => 90],
                ['nama' => 'Akid Hendra', 'nilai' => 50],
                ['nama' => 'Dany Irawan', 'nilai' => 70],
                ['nama' => 'Chandra Mega Putra', 'nilai' => 60],
            ]
            ],

        ];
        // dd($a); 
        return view('pages1.dosen', ['dosen' => $b]);
    }

    public function stasiun ()
    {
        $c = [
            ['nama' => 'NET TV', 'acara' => 'ShinB House', 'jam' => '15.30', 'tanggal' => '17 Agustus'],
            ['nama' => 'TVRI', 'acara' => 'Jejak Islami', 'jam' => '04.00', 'tanggal' => '10 November'],
            ['nama' => 'Ochannel', 'acara' => 'ini bukan talkshow', 'jam' => '13.00', 'tanggal' => '15 Juli'],
            ['nama' => 'BEINSPORT', 'acara' => 'Sepak Bola', 'jam' => '18.00', 'tanggal' => '15 Maret'],
            ['nama' => 'Indosiar', 'acara' => 'DAcademy', 'jam' => '19.00', 'tanggal' => '20 Agustus'],
        ];
         // dd($a); 
         return view('pages1.stasiun', ['stasiun' => $c]);
    }

    public function belanja ()
    {
        $d = [
            ['nama' => 'Alfian', 'membeli' => 
            [
                ['beli' => 'Sepatu', 'harga' => 250000],
                ['beli' => 'Baju', 'harga' => 100000],
                ['beli' => 'Celana', 'harga' => 150000],
                ['beli' => 'Kupluk', 'harga' => 100000],
            ],
            ],
            ['nama' => 'Dida', 'membeli' => 
            [
                ['beli' => 'Topi', 'harga' => 100000],
                ['beli' => 'baju', 'harga' => 75000],
                ['beli' => 'celana', 'harga' => 125000],
            ]
            ]
            ];
          // dd($a); 
          return view('pages1.belanja', ['belanja' => $d]);   
    }
}
