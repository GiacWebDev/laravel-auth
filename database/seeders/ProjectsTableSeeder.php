<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_project = new Project();
            $new_project->name = $faker->words(2, true);
            $new_project->slug = Project::generateSlug($new_project->name);
            $new_project->status = $faker->word;
            $new_project->start_date = $faker->date();
            $new_project->end_date = $faker->date();

            $new_project->save();
        }
    }
}