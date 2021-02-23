<?php 

namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $faker = \Faker\Factory::create();

                for($i=0;$i<10;$i++)
                {
                        $data = [
                                'nama' => $faker->nama,
                                'harga' => $faker->harga,
                                'foto' => NULL,
                                'status' => $faker->status,
                                // 'role' => 1,
                                // 'created_by' => 0,
                                // 'created_date' => date("Y-m-d H:i:s"),
                        ];     
                        print_r($data);
                        $this->db->table('menu')->insert($data);
                }
                
        }
}