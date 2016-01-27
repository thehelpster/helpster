<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $roger = new User;
        $roger->email = 'roger.sc.chin@gmail.com';
        $roger->password = 'password';
        $roger->password_confirmation = 'password';
        $roger->first_name = 'Roger';
        $roger->last_name = 'Chin';
        $roger->birthday = '1991-01-11';
        $roger->zip = '78230';
        $roger->gender = 'M';
        $roger->confirmation_code = md5(uniqid(mt_rand(), true));
        $roger->confirmed = 1;
        $roger->save();

        $jerald = new User;
        $jerald->email = 'jeraldsaenz@me.com';
        $jerald->password = 'password';
        $jerald->password_confirmation = 'password';
        $jerald->first_name = 'Jerald';
        $jerald->last_name = 'Saenz';
        $jerald->birthday = '1971-01-18';
        $jerald->zip = '78258';
        $jerald->gender = 'M';
        $jerald->confirmation_code = md5(uniqid(mt_rand(), true));
        $jerald->confirmed = 1;
        $jerald->save();

        $sakib = new User;
        $sakib->email = 'sshaikh210@hotmail.com';
        $sakib->password = 'password';
        $sakib->password_confirmation = 'password';
        $sakib->first_name = 'Sakib';
        $sakib->last_name = 'Shaikh';
        $sakib->birthday = '1984-09-02';
        $sakib->zip = '78015';
        $sakib->gender = 'M';
        $sakib->confirmation_code = md5(uniqid(mt_rand(), true));
        $sakib->confirmed = 1;
        $sakib->save();

        $testAdmin = new User;
        $testAdmin->email = 'ryan@orsinger.com';
        $testAdmin->password = 'password';
        $testAdmin->password_confirmation = 'password';
        $testAdmin->first_name = 'Ryan';
        $testAdmin->last_name = 'Orsinger';
        $testAdmin->birthday = '1981-01-01';
        $testAdmin->zip = '11111';
        $testAdmin->gender = 'M';
        $testAdmin->confirmation_code = md5(uniqid(mt_rand(), true));
        $testAdmin->confirmed = 1;
        $testAdmin->save();

        $testVolunteer = new User;
        $testVolunteer->email = 'homer@simpson.com';
        $testVolunteer->password = 'password';
        $testVolunteer->password_confirmation = 'password';
        $testVolunteer->first_name = 'Homer';
        $testVolunteer->last_name = 'Simpson';
        $testVolunteer->birthday = '1974-02-02';
        $testVolunteer->zip = '22222';
        $testVolunteer->gender = 'M';
        $testVolunteer->confirmation_code = md5(uniqid(mt_rand(), true));
        $testVolunteer->confirmed = 1;
        $testVolunteer->save();


        // if(! $user->save()) {
        //     Log::info('Unable to create user '.$user->email, (array)$user->errors());
        // } else {
        //     Log::info('Created user '.$user->email);
        
    }
}