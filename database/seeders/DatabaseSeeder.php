<?php

namespace Database\Seeders;

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
        $this->call(RoleTableSeeder::class);
		
		$this->call(UserTableSeeder::class);

        $this->call(InstructionLevelTableSeeder::class);

        $this->call(CategoryTableSeeder::class);

        $this->call(ConfigTableSeeder::class);

        $this->call(CourseTableSeeder::class);

        $this->call(BlogTableSeeder::class);
    }
}
