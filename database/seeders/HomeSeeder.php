<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homes')->insert([
            "name" =>"Alex Smith",
            "image" =>"profile-img.jpg",
            "image_cover" =>"hero-bg.jpg",
            "skil_one" =>"Designer",
            "skil_two" =>"Developer",
            "skil_three" =>"Freelancer",
            "skil_four" =>"Photographer",
            "twitter" =>"https://twitter.com/?lang=fr",
            "facebook" =>"https://fr-fr.facebook.com/",
            "instagram" =>"https://www.instagram.com/",
            "skype" =>"https://www.skype.com/fr/",
            "linkdin" =>"https://fr.linkedin.com/",
        ]);
    }
}
