<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\Publisher;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::truncate();
        Genre::truncate();
        Publisher::truncate();
        Artist::truncate();
        Album::truncate();


        $user = User::factory(3)->create();

        User::create([
            'name'=>'Tina',
            'email'=>'tina@gmail.com',
            'password'=>bcrypt('tina123')
        ]);

        //zanrovi

       $g1 = Genre::create([
        'name' => "R&B",
       ]);

       $g2 = Genre::create([
        'name' => "POP",
       ]);

       $g3 = Genre::create([
        'name' => "Rock",
       ]);

       $g4 = Genre::create([
        'name' => "Indie",
       ]);

       $g5 = Genre::create([
        'name' => "HIP HOP",
       ]);
       
        //record labels

       $p1 = Publisher::create([
        'name' => "Parkwood Entertainment",
        'PIB' => 121,
       ]);

       $p2 = Publisher::create([
        'name' => "Interscope Records",
        'PIB' => 450,
       ]);

       $p3 = Publisher::create([
        'name' => "Columbia Records",
        'PIB' => 788,
       ]);
       
       $p4 = Publisher::create([
        'name' => "Republic Records",
        'PIB' => 1010,
       ]);

       $p5 = Publisher::create([
        'name' => "Polydor Records",
        'PIB' => 1110,
       ]);

        //umetnici

        $a1 = Artist::create([
            'name'=>"Beyonce",
            'country'=>"USA",
        ]);
        $a2 = Artist::create([
            'name'=>"Lana Del Rey",
            'country'=>"USA",
        ]);
        $a3 = Artist::create([
            'name'=>"Tame Impala",
            'country'=>"Australia",
        ]);
        $a4 = Artist::create([
            'name'=>"The Weeknd",
            'country'=>"Canada",
        ]);
        $a5 = Artist::create([
            'name'=>"Kendrick Lamar",
            'country'=>"USA",
        ]);
        $a6 = Artist::create([
            'name'=>"Prince",
            'country'=>"USA",
        ]);
        $a7 = Artist::create([
            'name'=>"Adele",
            'country'=>"United Kingdom",
        ]);

        //albumi

        Album::create([
            'title'=>"Lemonade",
            'description'=>"Lemonade is a visual album – a number of music videos offset by chapter titles like “Intuition,” “Denial,” “Apathy,” “Emptiness” and, eventually, “Resurrection” - connected by a voiceover from Beyoncé reading poetry by Warsan Shire.",
            'tracklist'=>"
            1. Pray You Catch Me
            2. Hold Up
            3. Don’t Hurt Yourself
            4. Sorry
            5. 6 Inch
            6. Daddy Lessons
            7. Love Drought
            8. Sandcastles
            9. Forward
            10. Freedom
            11. All Night
            12. Formation",
            'artist_id'=>$a1->id,
            'genre_id'=>$g1->id,
            'publisher_id'=>$p1->id,
        ]);
        Album::create([
            'title'=>"Honeymoon",
            'description'=>"Honeymoon is the fourth studio album by American singer-songwriter Lana Del Rey. It was released on September 18, 2015, by Polydor Records and Interscope Records, and was produced by Del Rey alongside longtime collaborators Rick Nowels and Kieron Menzies. The album marked a departure from the more guitar-driven instrumentation of Del Rey's previous album Ultraviolence and a return to the baroque pop of Born to Die and Paradise. Lyrically, the album touches on themes of tortured romance, resentment, lust, escapism, and violence.",
            'tracklist'=>"
            1. Honeymoon
            2. Music to Watch Boys to
            3. Terrence Loves You
            4. God Knows I Tried
            5. High by the Beach
            6. Freak
            7. Art Deco
            8. Burnt Norton (Interlude)
            9. Religion
            10. Salvatore
            11. The Blackest Day
            12. 24
            13. Swan Song
            14. Don’t Let Me Be Misunderstood",
            'artist_id'=>$a2->id,
            'genre_id'=>$g4->id,
            'publisher_id'=>$p5->id,
        ]);
        Album::create([
            'title'=>"Currents",
            'description'=>"Currents follows the progression of someone feeling like they are becoming something else. They're becoming the kind of person they thought they'd never become. The lyrical themes of Currents centre on personal transition and growing older. Parker's lyrics on the album are entirely autobiographical",
            'tracklist'=>"
            1   Let It Happen	
            2	Nangs	
            3	The Moment	
            4	Yes I'm Changing	
            5	Eventually	
            6	Gossip	
            7	The Less I Know The Better	
            8	Past Life	
            9	Disciples	
            10	Cause I'm A Man	
            11	Reality In Motion	
            12	Love / Paranoia	
            13	New Person, Same Old Mistakes",
            'artist_id'=>$a3->id,
            'genre_id'=>$g4->id,
            'publisher_id'=>$p2->id,
        ]);
        Album::create([
            'title'=>"After Hours",
            'description'=>"After Hours is the sixth studio album by the Toronto crooner, released a year ago this past weekend. After the pop/braggadocio-fuelled energy of Starboy, Abel would delve into a direction that would encompass elements from all of his previous works. Sticking mainly to his dark, art-house roots while blending pop and new wave sounds.",
            'tracklist'=>"
            1	Alone Again	
            2	Too Late	
            3	Hardest To Love	
            4	Scared To Live	
            5	Snowchild	
            6	Escape From LA	
            7	Heartless	
            8	Faith	
            9	Blinding Lights	
            10	In Your Eyes	
            11	Save Your Tears	
            12	Repeat After Me (Interlude)	
            13	After Hours	
            14	Until I Bleed Out",
            'artist_id'=>$a4->id,
            'genre_id'=>$g2->id,
            'publisher_id'=>$p4->id,
        ]);
        Album::create([
            'title'=>"Renaissance",
            'description'=>"Beyoncé conceived and recorded Renaissance during the COVID-19 pandemic, seeking to inspire joy and escapism in listeners who had experienced isolation and to celebrate a club era in which marginalized people sought liberation through dance music.",
            'tracklist'=>"
            1. “I'm That Girl”
            2. “Cozy”
            3. “Alien Superstar”
            4. “Cuff It”
            5. “Energy”
            6. “Break My Soul”
            7. “Church Girl”
            8. “Plastic Off the Sofa”
            9. “Virgo’s Groove”
            10. “Move”
            11. “Heated”
            12. “Thique”
            13. “All Up in Your Mind”
            14. “America Has a Problem”
            15. “Pure/Honey”
            16. “Summer Renaissance”",
            'artist_id'=>$a1->id,
            'genre_id'=>$g1->id,
            'publisher_id'=>$p1->id,
        ]);
        Album::create([
            'title'=>"DAMN.",
            'description'=>"The main themes in Kendrick Lamar's DNA. focus on how the past continues to impact the present and how racism and prejudices against African Americans and their culture exist today due to the animosity caused by continued police brutality and the existence of respectability politics and racial stereotyping.",
            'tracklist'=>"
            1. Blood
            2. DNA
            3. Yah
            4. Element
            5. Feel
            6. Loyalty f. Rihanna
            7. Pride
            8. Humble
            9. Lust
            10. Love
            11. xxx f. U2
            12. Fear
            13. God
            14. Duckworth",
            'artist_id'=>$a5->id,
            'genre_id'=>$g5->id,
            'publisher_id'=>$p2->id,
        ]);
        Album::create([
            'title'=>"Purple rain",
            'description'=>"Purple Rain is the sixth studio album by American singer, songwriter, producer, and multi-instrumentalist Prince. It was released on June 25, 1984, by Warner Bros. Records, as the soundtrack album to the 1984 film of the same name. Purple Rain was musically denser than Prince's previous albums, emphasizing full band performances, and multiple layers of guitars, keyboards, electronic synthesizer effects, drum machines, and other instruments.",
            'tracklist'=>"
            Let's Go Crazy 
            Take Me With U 
            The Beautiful Ones 
            Computer Blue 
            Darling Nikki 
            When Doves Cry 
            I Would Die 4 U 
            Baby I’m A Star 
            Purple Rain",
            'artist_id'=>$a6->id,
            'genre_id'=>$g3->id,
            'publisher_id'=>$p3->id,
        ]);
        Album::create([
            'title'=>"30",
            'description'=>"30 is the fourth studio album by English singer-songwriter Adele. It was released on 19 November 2021 by Columbia Records, as Adele's first studio album since 25 (2015). 30 is inspired by Adele's divorce, motherhood, fame, and heartache, and expresses themes of acceptance and hope.",
            'tracklist'=>"
            01 Strangers by Nature
            02 Easy on Me
            03 My Little Love
            04 Cry Your Heart Out
            05 Oh My God
            06 Can I Get It
            07 I Drink Wine
            08 All Night Parking (With Erroll Garner) Interlude
            09 Woman Like Me
            10 Hold On
            11 To Be Loved
            12 Love Is a Game
            13 Wild Wild West (Bonus Track)
            14 Can’t Be Together (Bonus Track)
            15 Easy on Me (Bonus Track) (with Chris Stapleton)",
            'artist_id'=>$a7->id,
            'genre_id'=>$g4->id,
            'publisher_id'=>$p3->id,
        ]);
    }
}
