<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Museum;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'fname' => 'John',
            'lname' =>'Doyce',
            'email' => 'test@test.com',
            'password' => 'password',
            'active' =>'Yes',
            'permission' => '1',
        ]);

        User::factory(10)->create();

        Museum::factory()->create([
            'name' => 'Aga Khan Museum',
            'image' => 'uploads/museum/1713289071.jpg',
            'address' => '77 Wynford Dr',
            'type' =>'Museum',
            'summary' =>'Dedicated to sharing the artistic, intellectual, and scientific contributions that Islamic civilizations and cultures have made to world heritage.',
            'phone' =>'416-646-4677',
            'url' =>'https://www.agakhanmuseum.org/',
            'postalcode'=>'M3C 1K1',
            'ward'=> 'Don Valley East',
        ]);

        Museum::factory()->create([
            'name' => 'Black Creek Pioneer Village',
            'image' => 'uploads/museum/1713288374.jpg',
            'address' => '1000 Murray Ross Pkwy',
            'type' =>'Museum',
            'summary' =>'Become immersed in the lifestyles, customs, and surroundings of early residents who built the foundations for modern Toronto and Ontario at this 30-acre site.',
            'phone' =>'416-736-1733',
            'url' =>'https://blackcreek.ca/',
            'postalcode'=>'M3J 2P3',
            'ward'=> 'Humber River-Black Creek',
        ]);

        Museum::factory()->create([
            'name' => 'Scarborough Museum',
            'image' => 'uploads/museum/1713289411.jpg',
            'address' => '1007 Brimley Rd',
            'type' =>'Museum',
            'summary' =>"The Scarborough Museum and its gardens are located within Thomson Memorial Park.It is one of 10 museums operated by the City of Toronto.The Museum looks back on the story of Scarborough's roots and history.",
            'phone' =>'416-338-8807',
            'url' =>'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/scarborough-museum/',
            'postalcode'=>'M1P 3E8',
            'ward'=> 'Scarborough Centre',
        ]);

        Museum::factory()->create([
            'name' => 'Campbell House',
            'image' => 'uploads/museum/1713288436.jpg',
            'address' => '160 Queen St W',
            'type' =>'Museum',
            'summary' =>'The Campbell house dates back to 1822 and was once home to Judge William Campbell.  It is the last example of Palladian architecture in  Toronto.',
            'phone' =>'416-597-0227',
            'url' =>'http://www.campbellhousemuseum.ca/',
            'postalcode'=>'M5H 3H3',
            'ward'=> 'Spadina-Fort York',
        ]);

        Museum::factory()->create([
            'name' => 'Canadian Museum of Cultural Heritage of Indo-Canadian',
            'image' => 'uploads/museum/1713288505.jpg',
            'address' => '61 Claireville Dr',
            'type' =>'Museum',
            'summary' =>'The Canadian Museum of Cultural Heritage of Indo-Canadians is a museum committed to the understanding of India rich cultural heritage. See BAPS Shri Swaminarayan Mandir.',
            'phone' =>'416-798-2277',
            'url' =>'https://www.baps.org/cultureandheritage/ExperienceIndia/Exhibitions/CanadianMuseumofCulturalHeritageofIndo-Canadians.aspx',
            'postalcode'=>'M9W 5Z7',
            'ward'=> 'Etobicoke North',
        ]);

        Museum::factory()->create([
            'name' => 'Colborne Lodge',
            'image' => 'uploads/museum/1713288668.jpg',
            'address' => '11 Colborne Lodge Dr',
            'type' =>'Museum',
            'summary' =>'This quaint cottage located within High Park was home to John and Jemma Howard. In 1873 the couple deeded the part to lodge to the City of Toronto. The house is a great example of a regency style building.',
            'phone' =>'416-392-6916',
            'url' =>'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/colborne-lodge/',
            'postalcode'=>'',
            'ward'=> 'Parkdale-High Park',
        ]);

        Museum::factory()->create([
            'name' => 'Fort York National Historic Site',
            'image' => 'uploads/museum/1713288653.jpg',
            'address' => '250 Fort York Blvd',
            'type' =>'Museum',
            'summary' =>'Birthplace of Toronto in 1793 and scene of the Battle of York in 1813, Fort York has Canada largest collection of original War of 1812 buildings. Open year round for tours, exhibits, and demonstrations.',
            'phone' =>'416-392-6907',
            'url' =>'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/fort-york-national-historic-site/',
            'postalcode'=>'M5V 3K9',
            'ward'=> 'Spadina-Fort York',
        ]);

        Museum::factory()->create([
            'name' => 'Gardiner Museum of Ceramic Art',
            'image' => 'uploads/museum/1713288700.jpg',
            'address' => "111 Queen's Park",
            'type' =>'Museum',
            'summary' =>'A museum dedicated to one of the oldest forms of art. The Gardiner Museum of Ceramic Art is home to over 3,000 historical and contemporary ceramic pieces.',
            'phone' =>'416-586-8080',
            'url' =>'https://www.gardinermuseum.on.ca/',
            'postalcode'=>'M5S 2C7',
            'ward'=> 'University-Rosedale',
        ]);

        Museum::factory()->create([
            'name' => 'Historic Zion Schoolhouse',
            'image' => 'uploads/museum/1713288733.jpg',
            'address' => "1091 Finch Ave E",
            'type' =>'Museum',
            'summary' =>"Built in 1869, the Historic Zion Schoolhouse has been restored to emulate schooling as it once was in the farming  district of L'Amaroux",
            'phone' =>'416-395-7435',
            'url' =>'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/zion-schoolhouse/',
            'postalcode'=>'M2J 2X3',
            'ward'=> 'Don Valley North',
        ]);

        Museum::factory()->create([
            'name' => 'Japan Foundation',
            'image' => 'uploads/museum/1713288775.jpg',
            'address' => '2 Bloor St E',
            'type' =>'Museum',
            'summary' =>"A cultural establishment aiming towards effective development of its international cultural exchange programs in Japanese arts and cultural exchange.",
            'phone' =>'416-966-1600',
            'url' =>'https://jftor.org/',
            'postalcode'=>'M4W 1A8',
            'ward'=> 'University-Rosedale',
        ]);


        // Comment

        Comment::factory()->create([
            'user_id' => 1,
            'museum_id' => 3,
            'comment' => 'This museum is sucked! I hated my visit.',
        ]);

        Comment::factory()->create([
            'user_id' => 2,
            'museum_id' => 5,
            'comment' => 'This museum is okay! I kinda enjoyed my visit.',
        ]);

        Comment::factory()->create([
            'user_id' => 4,
            'museum_id' => 8,
            'comment' => 'This museum is fantastic! I really enjoyed my visit.',
        ]);

        Comment::factory()->create([
            'user_id' => 3,
            'museum_id' => 9,
            'comment' => 'This museum is okay! I kinda enjoyed my visit.',
        ]);

        Comment::factory()->create([
            'user_id' => 8,
            'museum_id' => 8,
            'comment' => 'This museum is sucked! I hated my visit.',
        ]);
        

        // Comment::factory(10)->create();


    }
}
