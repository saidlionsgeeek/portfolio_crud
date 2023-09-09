<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            'info' =>"Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            'skill1' =>"HTML",
            'n1' => 100,
            'skill2'=>"CSS",
            'n2'=>90,
            'skill3'=>"JAVASCRIPT",
            'n3'=>75,
            'skill4'=>"PHP",
            'n4'=>80,
            'skill5'=>"WordPress/CMS",
            'n5'=>90,
            'skill6'=>"Photoshop",
            'n6'=>55,
        ]);
    }
}
