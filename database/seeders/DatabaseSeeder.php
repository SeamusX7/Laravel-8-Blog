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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory([
            'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user
        ]);

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'exerpt' => '<p>Lorem ipsum dolor sit amet.</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut egestas nulla. Suspendisse vitae risus sed ante gravida tincidunt. Nunc volutpat posuere ex. Cras eget est iaculis, dignissim lectus eget, convallis urna. Nam aliquam orci magna, porttitor gravida nibh rhoncus non. Integer pretium ante vestibulum velit cursus, vel sollicitudin massa tristique. Etiam condimentum est ante, vitae faucibus nisl tempus vel. Maecenas lobortis mi ut justo elementum, ut blandit nisl consectetur. Vestibulum non egestas ligula. Nam rhoncus urna libero, at dignissim erat mollis et. Phasellus et mauris vitae lectus consectetur lacinia vel et mi. Aenean vitae varius tellus, placerat efficitur velit. Mauris urna nulla, congue in justo sed, placerat vulputate libero.</p>',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'exerpt' => '<p>Lorem ipsum dolor sit amet.</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut egestas nulla. Suspendisse vitae risus sed ante gravida tincidunt. Nunc volutpat posuere ex. Cras eget est iaculis, dignissim lectus eget, convallis urna. Nam aliquam orci magna, porttitor gravida nibh rhoncus non. Integer pretium ante vestibulum velit cursus, vel sollicitudin massa tristique. Etiam condimentum est ante, vitae faucibus nisl tempus vel. Maecenas lobortis mi ut justo elementum, ut blandit nisl consectetur. Vestibulum non egestas ligula. Nam rhoncus urna libero, at dignissim erat mollis et. Phasellus et mauris vitae lectus consectetur lacinia vel et mi. Aenean vitae varius tellus, placerat efficitur velit. Mauris urna nulla, congue in justo sed, placerat vulputate libero.</p>',
        // ]);
    }
}
