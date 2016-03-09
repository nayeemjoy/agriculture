<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Post::create([
								'title'      => $faker->sentence(6),
								'description'   => $faker->text(200),
								'photo' => 'dhan.JPG',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					]);
		}
	}

}