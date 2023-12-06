<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Ahmad Zidane',
        //     'email' => 'ahmad@gmail.com',
        //     'password' => bcrypt('admin'),
        // ]);

        User::create([
            'name' => 'Faturrahman',
            'username' => 'fatur',
            'email' => 'fatur2@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal',
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, reiciendis modi tenetur debitis nam qui id dignissimos cupiditate, saepe magni accusamus ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, reiciendis modi tenetur debitis nam qui id dignissimos cupiditate, saepe magni accusamus repellendus odio accusantium provident autem quis repellat ducimus, quod eum. Officia labore soluta molestiae maiores consectetur? Sunt, obcaecati. Molestiae explicabo vitae nemo non nisi asperiores earum doloribus officiis obcaecati?Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, reiciendis modi tenetur debitis nam qui id dignissimos cupiditate, saepe magni accusamus repellendus odio accusantium provident autem quis repellat ducimus, quod eum. Officia labore soluta molestiae maiores consectetur? Sunt, obcaecati. Molestiae explicabo vitae nemo non nisi asperiores earum doloribus officiis obcaecati?',
        //     'category_id' => 1,
        //     'user_id' => 1,

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, reiciendis modi tenetur debitis nam qui id dignissimos cupiditate, saepe magni accusamus ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, reiciendis modi tenetur debitis nam qui id dignissimos cupiditate, saepe magni accusamus repellendus odio accusantium provident autem quis repellat ducimus, quod eum. Officia labore soluta molestiae maiores consectetur? Sunt, obcaecati. Molestiae explicabo vitae nemo non nisi asperiores earum doloribus officiis obcaecati?Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, reiciendis modi tenetur debitis nam qui id dignissimos cupiditate, saepe magni accusamus repellendus odio accusantium provident autem quis repellat ducimus, quod eum. Officia labore soluta molestiae maiores consectetur? Sunt, obcaecati. Molestiae explicabo vitae nemo non nisi asperiores earum doloribus officiis obcaecati?',
        //     'category_id' => 1,
        //     'user_id' => 2,

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, reiciendis modi tenetur debitis nam qui id dignissimos cupiditate, saepe magni accusamus ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, reiciendis modi tenetur debitis nam qui id dignissimos cupiditate, saepe magni accusamus repellendus odio accusantium provident autem quis repellat ducimus, quod eum. Officia labore soluta molestiae maiores consectetur? Sunt, obcaecati. Molestiae explicabo vitae nemo non nisi asperiores earum doloribus officiis obcaecati?Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, reiciendis modi tenetur debitis nam qui id dignissimos cupiditate, saepe magni accusamus repellendus odio accusantium provident autem quis repellat ducimus, quod eum. Officia labore soluta molestiae maiores consectetur? Sunt, obcaecati. Molestiae explicabo vitae nemo non nisi asperiores earum doloribus officiis obcaecati?',
        //     'category_id' => 2,
        //     'user_id' => 1,

        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, reiciendis modi tenetur debitis nam qui id dignissimos cupiditate, saepe magni accusamus ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, reiciendis modi tenetur debitis nam qui id dignissimos cupiditate, saepe magni accusamus repellendus odio accusantium provident autem quis repellat ducimus, quod eum. Officia labore soluta molestiae maiores consectetur? Sunt, obcaecati. Molestiae explicabo vitae nemo non nisi asperiores earum doloribus officiis obcaecati?Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, reiciendis modi tenetur debitis nam qui id dignissimos cupiditate, saepe magni accusamus repellendus odio accusantium provident autem quis repellat ducimus, quod eum. Officia labore soluta molestiae maiores consectetur? Sunt, obcaecati. Molestiae explicabo vitae nemo non nisi asperiores earum doloribus officiis obcaecati?',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

        Post::factory(20)->create();
    }
}
