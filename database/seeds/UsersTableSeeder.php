<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

		factory(App\User::class)->create(array(
			'user_name'     => 'Badman',
			'email'    => 'hiep.giap@shoppie.vn',
			'password' => Hash::make('12344321'),
			'type'     => 2,
		));
    }
}
