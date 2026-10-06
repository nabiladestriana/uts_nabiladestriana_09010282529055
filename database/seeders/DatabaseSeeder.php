<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Kategori
        $fiksi = Category::create([
            'name' => 'Fiksi',
            'description' => 'Buku cerita dan karya sastra.',
        ]);

        $pendidikan = Category::create([
            'name' => 'Pendidikan',
            'description' => 'Buku yang berkaitan dengan pendidikan dan pembelajaran.',
        ]);

        $teknologi = Category::create([
            'name' => 'Teknologi',
            'description' => 'Buku tentang teknologi, komputer, dan pemrograman.',
        ]);

        // Buku kategori Fiksi
        Book::create([
            'category_id' => $fiksi->id,
            'title' => 'Laskar Pelangi',
            'author' => 'Andrea Hirata',
            'publisher' => 'Bentang Pustaka',
            'year' => 2005,
            'stock' => 10,
        ]);

        Book::create([
            'category_id' => $fiksi->id,
            'title' => 'Bumi',
            'author' => 'Tere Liye',
            'publisher' => 'Gramedia Pustaka Utama',
            'year' => 2014,
            'stock' => 8,
        ]);

        Book::create([
            'category_id' => $fiksi->id,
            'title' => 'Negeri 5 Menara',
            'author' => 'Ahmad Fuadi',
            'publisher' => 'Gramedia Pustaka Utama',
            'year' => 2009,
            'stock' => 7,
        ]);

        // Buku kategori Pendidikan
        Book::create([
            'category_id' => $pendidikan->id,
            'title' => 'Dasar-Dasar Pemrograman',
            'author' => 'Abdul Kadir',
            'publisher' => 'Andi',
            'year' => 2017,
            'stock' => 7,
        ]);

        Book::create([
            'category_id' => $pendidikan->id,
            'title' => 'Pengantar Pendidikan',
            'author' => 'Muhammad Ali',
            'publisher' => 'RajaGrafindo Persada',
            'year' => 2019,
            'stock' => 6,
        ]);

        Book::create([
            'category_id' => $pendidikan->id,
            'title' => 'Metodologi Penelitian',
            'author' => 'Sugiyono',
            'publisher' => 'Alfabeta',
            'year' => 2020,
            'stock' => 5,
        ]);

        // Buku kategori Teknologi
        Book::create([
            'category_id' => $teknologi->id,
            'title' => 'Pemrograman Web',
            'author' => 'Budi Raharjo',
            'publisher' => 'Informatika',
            'year' => 2020,
            'stock' => 6,
        ]);

        Book::create([
            'category_id' => $teknologi->id,
            'title' => 'Basis Data',
            'author' => 'Fathansyah',
            'publisher' => 'Informatika',
            'year' => 2018,
            'stock' => 5,
        ]);

        Book::create([
            'category_id' => $teknologi->id,
            'title' => 'Belajar Pemrograman Python',
            'author' => 'Jubilee Enterprise',
            'publisher' => 'Elex Media Komputindo',
            'year' => 2021,
            'stock' => 8,
        ]);
    }
}