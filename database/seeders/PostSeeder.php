<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;    
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Ramsey\Uuid\Codec\TimestampFirstCombCodec;
use Illuminate\Support\Carbon;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('posts')->insert([[
        //     'title' => "berita harini",
        //     'body' => "banayak berita lnaakdfa",
        //     'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),            
        // ],
        // [
        //     'title' => "berita kamren",
        //     'body' => "banayak berita lnaakdfa",
        //     'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),            
        // ]
        // ]
        Post::factory()->count(1000)->create();

        // DB::table('posts')->insert([
        //     'title' => "berita kamren",
        //     'body' => "banayak berita lnaakdfa",
        //     'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),            
        // ]);

        // DB::table('posts')->insert([
        //     'title' => "berita lusa",
        //     'body' => "banayak berita lnaakdfa",
        //     'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),            
        // ]);
    }

}
