<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
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
				'nama' => 'Hendri Mahmud Nawawi',
				'nis' => '140022230',
				'email' => 'hendri@gmail.com',
				'password' => password_hash('123456', PASSWORD_BCRYPT),
				'role' => 'siswa'
			]
		];
		foreach ($user_data as $data) {
			// insert semua data ke tabel
			$this->db->table('users')->insert($data);
		}
	}
}
