<?php

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
        // $this->call(UserSeeder::class);

        // compte admin
        $admin = factory("App\User")->create([
            "name" => "Mouaz",
            "email" => "mouazmouaz@hotmail.fr",
            "password" => '$2y$10$lvdZ0P43XlP/3Xd7VCHTDOQx2e1vUT7N7p8zqXdEQxI1PTXflJsMW' // mettre ici des guillements simples sinon il interprète le $ et ce qui suit comme étant une variable avec des guillemets doubles
        ]);

        // 9 autres users
        $users = factory("App\User", 9)->create();

        // 5 catégories
        $users = factory("App\Categorie", 5)->create();

        // posts de l'admin
        $postsAdmin = factory("App\Post", 5)->create(["user_id" => 1]);

        // posts des autres users
        $posts = factory("App\Post", 25)->create();

        //likes d'examples (entrée aléatoire en table de jointure likes)
        for ($i = 0; $i < 10; $i++) {
            $posts->random()->likes()->syncWithoutDetaching($admin->id);
        }
        foreach ($users as $user) {
            for ($i = 0; $i < 3; $i++) {
                $posts->random()->likes()->syncWithoutDetaching($user->id);
            }
        }
    }
}
