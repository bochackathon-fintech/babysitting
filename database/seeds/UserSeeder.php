<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (\App\UTrust::getBOCAuthProviders() as $index => $provider) {
            $user = 'user' . $index;

            \App\User::create([
                'name'           => $user,
                'email'          => "{$user}@utrust.it",
                'password'       => bcrypt($user),
                'remember_token' => str_random(10),
                'auth_provider'  => $provider['auth'],
                'auth_id'  => $provider['id'],
                'group_id'  => $provider['group_id'],

            ]);
        }
    }
}
