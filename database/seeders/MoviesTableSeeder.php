<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
            ['genre_id' => 1, 'title' => 'Crash Landing On You', 'photo' => 'img/drama/cloy.jpg', 'description' => 'When a paragliding mishap lands a beautiful chaebol heiress north of the DMZ, a dashing North Korean officer rescues her and hides her from the authorities.', 'rating' => 5],
            ['genre_id' => 1, 'title' => 'It Is Okay To Not Be Okay', 'photo' => 'img/drama/iotnbo.jpg', 'description' => 'Moon Kang Tae, a community health worker at a psychiatric ward. Moon Kang Tae is a man who was blessed with everything including a great body, smarts, ability to sympathize with others, patience, ability to react quickly, stamina, and more. He has a brother who shows symptoms of autism and is eight years older than him.', 'rating' => 5],
            ['genre_id' => 1, 'title' => 'Start Up', 'photo' => 'img/drama/startup.jpg', 'description' => 'Needing to make $90k to open her own business, Seo Dal Mi drops out of a university and takes up part-time work. She dreams of becoming someone like Steve Jobs. Nam Do San is the founder of Samsan Tech. He is excellent with mathematics. He started Samsan Tech two years ago, but the company is not doing well. Somehow, Nam Do San becomes Seo Dal Mi’s first love. They cheer each others start and growth.', 'rating' => 5],
            ['genre_id' => 1, 'title' => 'Itaewon Class', 'photo' => 'img/drama/itaewon.jpg', 'description' => 'In a colorful Seoul neighborhood, an ex-con and his friends fight a mighty foe to make their ambitious dreams for their street bar a reality.', 'rating' => 5],
            ['genre_id' => 2, 'title' => 'Mickey Mouse Clubhouse', 'photo' => 'img/kids/mickey.jpg', 'description' => 'Mickey, Minnie, Pluto, Goofy, Daisy, Donald and many other clubhouse friends go on educational adventures and impart important lessons in a fun way.', 'rating' => 3],
            ['genre_id' => 2, 'title' => 'Frozen', 'photo' => 'img/kids/frozen.jpg', 'description' => 'Anna sets out on a journey with an iceman, Kristoff, and his reindeer, Sven, in order to find her sister, Elsa, who has the power to convert any object or person into ice.', 'rating' => 4],
            ['genre_id' => 2, 'title' => 'Sophia The First', 'photo' => 'img/kids/sofia.jpg', 'description' => 'The story follows Sofia, an average girl, whose life suddenly changes when her mother marries a king. It depicts how she adjusts to the extraordinary life and makes everyone around her feel special.', 'rating' => 3],
            ['genre_id' => 2, 'title' => 'Cocomelon', 'photo' => 'img/kids/cocomelon.jpg', 'description' => 'Cocomelon is an American YouTube channel and streaming media show acquired by the British company Moonbug Entertainment and maintained by the American company Treasure Studio. Cocomelon specializes in 3D animation videos of both traditional nursery rhymes and their own original children songs.', 'rating' => 5],
            ['genre_id' => 3, 'title' => 'Running Man', 'photo' => 'img/tvshow/runningman.jpg', 'description' => 'Running Man is a South Korean variety show, forming part of SBS Good Sunday lineup', 'rating' => 5],
            ['genre_id' => 3, 'title' => 'Knowing Brothers', 'photo' => 'img/tvshow/knowing.jpg', 'description' => 'Male comedians play high school students, welcoming star transfer students every week and engaging in battles of witty humour and slapstick.', 'rating' => 5],
            ['genre_id' => 3, 'title' => 'Friends', 'photo' => 'img/tvshow/friends.jpg', 'description' => 'Follow the lives of six reckless adults living in Manhattan, as they indulge in adventures which make their lives both troublesome and happening.', 'rating' => 5],
            ['genre_id' => 3, 'title' => 'Happy Together', 'photo' => 'img/tvshow/happy.jpg', 'description' => 'Happy Together is a South Korean talk show which first ran on November 8, 2001 on KBS2. It was the most popular show on KBS from 2002–2003, and further continued its success in two more seasons.', 'rating' => 4]
        ]);
    }
}
