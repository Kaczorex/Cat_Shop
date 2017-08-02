<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
      factory(App\Cats::class, 100)->create();
      factory(App\Comments::class, 100)->create();

        // $this->call(UsersTableSeeder::class);
  }
}
