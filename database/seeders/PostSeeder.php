<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($x=0; $x<=10; $x++){
            Post::create([
                'title'=>'What is lorem ipsum?',
                'content'=>'jkdaofjdasof jafjasfjdaofjafjahfa huifdhaifdhajfhajfhajkfhaskljf ahfjaslkfjhalkjfd sahjfkashfdjklajfhsa fhsajkfhsakjdf 
                            jkdaofjdasof jafjasfjdaofjafjahfa huifdhaifdhajfhajfhajkfhaskljf ahfjaslkfjhalkjfd sahjfkashfdjklajfhsa fhsajkfhsakjdf 
                            jkdaofjdasof jafjasfjdaofjafjahfa huifdhaifdhajfhajfhajkfhaskljf ahfjaslkfjhalkjfd sahjfkashfdjklajfhsa fhsajkfhsakjdf',
            ]);
        }
    }
}
