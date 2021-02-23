<?php 
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Database\Seeds\Faker\Factory;
use App\Models\KaryawanModel;
use Faker\Factory as Faker;


class KaryawanTableSeeder extends Seeder
{
	public function run()
	{
		$db = \Config\Database::connect();
		$faker = Faker::create();
		for ($i=0; $i < 10; $i++) { 
			
			$db->table('karyawan')->insert([
				'id'	=> "2021".$i,
				'nama'	=> $faker->name(),
				'nohp'  => $faker->phoneNumber(),
				'gaji'  => $faker->numerify('#######')
			  ]);
		} 
	}
}
