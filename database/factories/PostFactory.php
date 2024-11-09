<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence;
        return [
            'title' => $title,                  // Judul acak
            'body' => $this->faker->paragraph(5),      // Isi dengan paragraf acak
            // 'slug' => Str::slug($title),               // Slug dari title
//             'author' => $this->faker->name,            // Nama author acak
  ];
}
}
