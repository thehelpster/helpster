<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $user = new User;
        $user->email = 'roger.sc.chin@gmail.com';
        $user->password = 'password';
        $user->password_confirmation = 'password';
        $user->first_name = 'Roger';
        $user->last_name = 'Chin';
        $user->birthday = '1991-01-11';
        $user->zip = '78230';
        $user->gender = 'M';
        $user->confirmation_code = md5(uniqid(mt_rand(), true));
        $user->confirmed = true;

        if(! $user->save()) {
            Log::info('Unable to create user '.$user->email, (array)$user->errors());
        } else {
            Log::info('Created user '.$user->email);
        }
    }
}