<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory as Faker;

class MenuTableSeeder extends Seeder
{
	public function run()
	{
		$db = \Config\Database::connect();
		$faker = Faker::create();
		for ($i=0; $i < 10; $i++) { 
			
			$db->table('menu')->insert([
				'id'	=> "1010".$i,
				'nama'	=> $faker->word(),
				'harga'	=> $faker->numerify('#####'),
				'foto'  => $faker->image(null, 640, 480),
				'status'=> '1' 
			]);
		} 
	}
}
