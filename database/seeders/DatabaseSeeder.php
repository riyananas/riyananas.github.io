<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@gudangit.net',
            'password' => bcrypt('Evolution001')
        ]);

        User::create([
            'name' => 'Riyan Anas',
            'username' => 'riyananas002',
            'email' => 'riyananas002@gmail.com',
            'password' => bcrypt('Evolution001')
        ]);
        // User::create([
        //     'name' => 'Rama Kurniawan',
        //     'email' => 'rama_k@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);
        // User::create([
        //     'name' => 'Rizky Cahya Ramadhan',
        //     'email' => 'rizkycr@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);
        User::factory(5)->create();
        Category::create([
            'name' => 'Programing',
            'slug' => 'programing'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(25)->create();

        //         Post::create([
        //             'title' => 'Judul Pertama',
        //             'slug' => 'judul-pertama',
        //             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        // Cras scelerisque congue sem, ac molestie ligula blandit at.
        // In enim urna, posuere eget fermentum accumsan, finibus vitae tortor.
        // Vivamus sed feugiat purus.',
        //             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        // Cras scelerisque congue sem, ac molestie ligula blandit at.
        // In enim urna, posuere eget fermentum accumsan, finibus vitae tortor.
        // Vivamus sed feugiat purus. 
        // Vestibulum sit amet lectus efficitur, gravida lectus in, fringilla felis. 
        // Pellentesque ultrices libero eget magna venenatis ornare. 
        // Etiam ligula nulla, congue ac dolor id, interdum dignissim lectus. 
        // Vestibulum vel ligula arcu. Nunc eget mollis nunc. 
        // Proin ut varius erat. Morbi at condimentum sapien.</p>

        // <p>Quisque vehicula imperdiet leo nec facilisis.
        // Nam et ante nec tellus rhoncus efficitur vitae in ligula.
        // Nam viverra a libero nec porta.
        // Sed a turpis quis eros pharetra fermentum in ac sapien.
        // Curabitur fringilla interdum leo, nec varius est feugiat id.
        // Quisque massa ante, dictum in tellus nec, gravida eleifend sem. 
        // Cras in purus ut tortor tincidunt faucibus.</p>',
        //             'category_id' => 1,
        //             'user_id' => 1
        //         ]);
        //         Post::create([
        //             'title' => 'Judul Kedua',
        //             'slug' => 'judul-kedua',
        //             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        // Cras scelerisque congue sem, ac molestie ligula blandit at.
        // In enim urna, posuere eget fermentum accumsan, finibus vitae tortor.
        // Vivamus sed feugiat purus.',
        //             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        // Cras scelerisque congue sem, ac molestie ligula blandit at.
        // In enim urna, posuere eget fermentum accumsan, finibus vitae tortor.
        // Vivamus sed feugiat purus. 
        // Vestibulum sit amet lectus efficitur, gravida lectus in, fringilla felis. 
        // Pellentesque ultrices libero eget magna venenatis ornare. 
        // Etiam ligula nulla, congue ac dolor id, interdum dignissim lectus. 
        // Vestibulum vel ligula arcu. Nunc eget mollis nunc. 
        // Proin ut varius erat. Morbi at condimentum sapien.</p>

        // <p>Quisque vehicula imperdiet leo nec facilisis.
        // Nam et ante nec tellus rhoncus efficitur vitae in ligula.
        // Nam viverra a libero nec porta.
        // Sed a turpis quis eros pharetra fermentum in ac sapien.
        // Curabitur fringilla interdum leo, nec varius est feugiat id.
        // Quisque massa ante, dictum in tellus nec, gravida eleifend sem. 
        // Cras in purus ut tortor tincidunt faucibus.</p>',
        //             'category_id' => 1,
        //             'user_id' => 2
        //         ]);
        //         Post::create([
        //             'title' => 'Judul Ketiga',
        //             'slug' => 'judul-ketiga',
        //             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        // Cras scelerisque congue sem, ac molestie ligula blandit at.
        // In enim urna, posuere eget fermentum accumsan, finibus vitae tortor.
        // Vivamus sed feugiat purus.',
        //             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        // Cras scelerisque congue sem, ac molestie ligula blandit at.
        // In enim urna, posuere eget fermentum accumsan, finibus vitae tortor.
        // Vivamus sed feugiat purus. 
        // Vestibulum sit amet lectus efficitur, gravida lectus in, fringilla felis. 
        // Pellentesque ultrices libero eget magna venenatis ornare. 
        // Etiam ligula nulla, congue ac dolor id, interdum dignissim lectus. 
        // Vestibulum vel ligula arcu. Nunc eget mollis nunc. 
        // Proin ut varius erat. Morbi at condimentum sapien.</p>

        // <p>Quisque vehicula imperdiet leo nec facilisis.
        // Nam et ante nec tellus rhoncus efficitur vitae in ligula.
        // Nam viverra a libero nec porta.
        // Sed a turpis quis eros pharetra fermentum in ac sapien.
        // Curabitur fringilla interdum leo, nec varius est feugiat id.
        // Quisque massa ante, dictum in tellus nec, gravida eleifend sem. 
        // Cras in purus ut tortor tincidunt faucibus.</p>',
        //             'category_id' => 2,
        //             'user_id' => 1
        //         ]);
        //         Post::create([
        //             'title' => 'Judul Ke Empat',
        //             'slug' => 'judul-ke Empat',
        //             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        // Cras scelerisque congue sem, ac molestie ligula blandit at.
        // In enim urna, posuere eget fermentum accumsan, finibus vitae tortor.
        // Vivamus sed feugiat purus.',
        //             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        // Cras scelerisque congue sem, ac molestie ligula blandit at.
        // In enim urna, posuere eget fermentum accumsan, finibus vitae tortor.
        // Vivamus sed feugiat purus. 
        // Vestibulum sit amet lectus efficitur, gravida lectus in, fringilla felis. 
        // Pellentesque ultrices libero eget magna venenatis ornare. 
        // Etiam ligula nulla, congue ac dolor id, interdum dignissim lectus. 
        // Vestibulum vel ligula arcu. Nunc eget mollis nunc. 
        // Proin ut varius erat. Morbi at condimentum sapien.</p>

        // <p>Quisque vehicula imperdiet leo nec facilisis.
        // Nam et ante nec tellus rhoncus efficitur vitae in ligula.
        // Nam viverra a libero nec porta.
        // Sed a turpis quis eros pharetra fermentum in ac sapien.
        // Curabitur fringilla interdum leo, nec varius est feugiat id.
        // Quisque massa ante, dictum in tellus nec, gravida eleifend sem. 
        // Cras in purus ut tortor tincidunt faucibus.</p>',
        //             'category_id' => 2,
        //             'user_id' => 3
        //         ]);
        //         Post::create([
        //             'title' => 'Judul Kelima',
        //             'slug' => 'judul-keliama',
        //             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        // Cras scelerisque congue sem, ac molestie ligula blandit at.
        // In enim urna, posuere eget fermentum accumsan, finibus vitae tortor.
        // Vivamus sed feugiat purus.',
        //             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        // Cras scelerisque congue sem, ac molestie ligula blandit at.
        // In enim urna, posuere eget fermentum accumsan, finibus vitae tortor.
        // Vivamus sed feugiat purus. 
        // Vestibulum sit amet lectus efficitur, gravida lectus in, fringilla felis. 
        // Pellentesque ultrices libero eget magna venenatis ornare. 
        // Etiam ligula nulla, congue ac dolor id, interdum dignissim lectus. 
        // Vestibulum vel ligula arcu. Nunc eget mollis nunc. 
        // Proin ut varius erat. Morbi at condimentum sapien.</p>

        // <p>Quisque vehicula imperdiet leo nec facilisis.
        // Nam et ante nec tellus rhoncus efficitur vitae in ligula.
        // Nam viverra a libero nec porta.
        // Sed a turpis quis eros pharetra fermentum in ac sapien.
        // Curabitur fringilla interdum leo, nec varius est feugiat id.
        // Quisque massa ante, dictum in tellus nec, gravida eleifend sem. 
        // Cras in purus ut tortor tincidunt faucibus.</p>',
        //             'category_id' => 3,
        //             'user_id' => 3,
        //         ]);
    }
}
