<?php
use Imanee\Imanee;
class UsersTableSeeder extends Seeder {

    public function run()
    {   
        //user id of 1
        $roger = new User;
        $roger->email = 'roger.sc.chin@gmail.com';
        $roger->password = 'password';
        $roger->password_confirmation = 'password';
        $roger->first_name = 'Roger';
        $roger->last_name = 'Chin';
        $roger->birthday = '1991-01-11';
        $roger->zip = '78230';
        $roger->gender = 'M';

        $image = new Imanee(__DIR__.'/../../../public/images/users/roger_headshot.jpg');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/roger_headshot.jpg');
        $roger->image = 'roger_headshot.jpg';

        $roger->confirmation_code = md5(uniqid(mt_rand(), true));
        $roger->confirmed = 1;
        $roger->save();

        //user id of 2
        $jerald = new User;
        $jerald->email = 'jeraldsaenz@me.com';
        $jerald->password = 'password';
        $jerald->password_confirmation = 'password';
        $jerald->first_name = 'Jerald';
        $jerald->last_name = 'Saenz';
        $jerald->birthday = '1971-01-18';
        $jerald->zip = '78258';
        $jerald->gender = 'M';

        $image = new Imanee(__DIR__.'/../../../public/images/users/jerald_headshot.jpg');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/jerald_headshot.jpg');
        $jerald->image = 'jerald_headshot.jpg';

        $jerald->confirmation_code = md5(uniqid(mt_rand(), true));
        $jerald->confirmed = 1;
        $jerald->save();

        //user id of 3
        $sakib = new User;
        $sakib->email = 'sshaikh210@hotmail.com';
        $sakib->password = 'password';
        $sakib->password_confirmation = 'password';
        $sakib->first_name = 'Sakib';
        $sakib->last_name = 'Shaikh';
        $sakib->birthday = '1984-09-02';
        $sakib->zip = '78015';
        $sakib->gender = 'M';

        $image = new Imanee(__DIR__.'/../../../public/images/users/sakib_headshot.jpg');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/sakib_headshot.jpg');
        $sakib->image = 'sakib_headshot.jpg';

        $sakib->confirmation_code = md5(uniqid(mt_rand(), true));
        $sakib->confirmed = 1;
        $sakib->save();




    }
}