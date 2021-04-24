<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertUsers extends Seeder
{
	public function run()
	{
		$user_data = [
			[

			'nama' => 'Administrator',
			'nis' => '0',
			'email' => 'administrator@gmail.com',
			'password' => password_hash('123456', PASSWORD_BCRYPT),
			'role' => 'admin'
			],
			[
			'nama' => 'Ali Mustopa',
			'nis' => '122',
			'email' => 'ali@gmail.com',
			'password' => password_hash('123456', PASSWORD_BCRYPT),
			'role' => 'siswa'
			]
		];
		foreach($user_data as $data){
			// insert semua data ke tabel
			$this->db->table('users')->insert($data);
		}
	}
}