<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$user = User::create([
			'name' => 'Admin',
			'email' => 'soporte@orange-360.com',
			'password' => bcrypt('123456'),
		]);
		$user->assignRole('administrator');

	}
}
