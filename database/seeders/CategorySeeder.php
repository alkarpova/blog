<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'en' => [
                    'meta_title' => 'Beauty',
                    'meta_description' => 'Beauty',
                    'name' => 'Beauty',
                ],
                'lv' => [
                    'meta_title' => 'Skaistums',
                    'meta_description' => 'Skaistums',
                    'name' => 'Skaistums',
                ],
            ],
            [
                'en' => [
                    'meta_title' => 'Fashion',
                    'meta_description' => 'Fashion',
                    'name' => 'Fashion',
                    'slug' => 'fashion',
                ],
                'lv' => [
                    'meta_title' => 'Modes',
                    'meta_description' => 'Modes',
                    'name' => 'Modes',
                ],
            ],
            [
                'en' => [
                    'meta_title' => 'Lifestyle',
                    'meta_description' => 'Lifestyle',
                    'name' => 'Lifestyle',
                ],
                'lv' => [
                    'meta_title' => 'Dzīvesveids',
                    'meta_description' => 'Dzīvesveids',
                    'name' => 'Dzīvesveids',
                ],
            ],
            [
                'en' => [
                    'meta_title' => 'Travel',
                    'meta_description' => 'Travel',
                    'name' => 'Travel',
                ],
                'lv' => [
                    'meta_title' => 'Ceļojumi',
                    'meta_description' => 'Ceļojumi',
                    'name' => 'Ceļojumi',
                ],
            ],
        ];

        foreach ($data as $item) {
            Category::create($item);
        }
    }
}
