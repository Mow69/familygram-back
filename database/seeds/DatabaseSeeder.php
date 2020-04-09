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
        $users = factory("App\User")->create([
            "name" => "Mouaz",
            "email" => "mouazmouaz@hotmail.fr",
            "password" => '$2y$10$lvdZ0P43XlP/3Xd7VCHTDOQx2e1vUT7N7p8zqXdEQxI1PTXflJsMW' // mettre ici des guillements simples sinon il interprète le $ et ce qui suit comme étant une variable avec des guillemets doubles
        ]);
    }
}
