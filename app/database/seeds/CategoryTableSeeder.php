<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$names = [['name' => 'ধান', 'is_main' => 1], 
		['name' => 'তেল জাতীয় ফসল', 'is_main' => 1], 
		['name' => 'শস্য জাতীয় ফসল', 'is_main' => 1],
		['name' => 'লবণসহিষ্ঞু ধানের নতুন জাত', 'is_main' => 0],
		['name' => 'সোনার ধান বাংলামতি','is_main' => 0],
		['name' => 'খরাসহিষ্ণু ধান', 'is_main' => 0],
		['name' => 'তিল', 'is_main' => 0],
		['name' => 'সরিষা', 'is_main' => 0],
		['name' => 'সূর্যমুখী', 'is_main' => 0],
		['name' => 'আখ', 'is_main' => 0],
		['name' => 'গম', 'is_main' => 0],
		['name' => 'চিনাবাদাম', 'is_main' => 0],
		];

		foreach($names as $name)
		{
			Category::create([
				'name' => $name['name'],
				'is_main' => $name['is_main'],
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			]);
		}

		$categories = [
			[
				'category' => 1,
				'sub_category' => [4,5,6]
			],
			[
				'category' => 2,
				'sub_category' => [7,8,9]
			],
			[
				'category' => 3,
				'sub_category' => [10,11,12]
			]
		];
		foreach($categories as $category) { 
			foreach ($category['sub_category'] as $key) {
				CategoryMap::create([
					'category_id' => $category['category'],
					'sub_category_id' => $key,
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s')
				]);
			}
		}
		
	}

}