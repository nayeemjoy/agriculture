<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 40) as $index)
		{
			Post::create([
								'title'      => $faker->sentence(6),
								'description'   => $faker->text(200),
								'photo' => 'site/dhan.JPG',
								'category_id' => 1,
								'sub_category_id' => 4,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					]);
		}
		foreach(range(1, 40) as $index)
		{
			Post::create([
								'title'      => $faker->sentence(6),
								'description'   => $faker->text(200),
								'category_id' => 1,
								'sub_category_id' => 5,
								'photo' => 'site/dhan.JPG',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					]);
		}
	}

}