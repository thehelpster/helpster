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

        //user id of 4
        $testAdmin = new User;
        $testAdmin->email = 'ryan@orsinger.com';
        $testAdmin->password = 'password';
        $testAdmin->password_confirmation = 'password';
        $testAdmin->first_name = 'Ryan';
        $testAdmin->last_name = 'Orsinger';
        $testAdmin->birthday = '1981-01-01';
        $testAdmin->zip = '11111';
        $testAdmin->gender = 'M';

        $image = new Imanee(__DIR__.'/../../../public/images/users/ryan.jpg');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/ryan.jpg');
        $testAdmin->image = 'ryan.jpg';

        $testAdmin->confirmation_code = md5(uniqid(mt_rand(), true));
        $testAdmin->confirmed = 1;
        $testAdmin->save();

        //user id of 5
        $testVolunteer = new User;
        $testVolunteer->email = 'homer@simpson.com';
        $testVolunteer->password = 'password';
        $testVolunteer->password_confirmation = 'password';
        $testVolunteer->first_name = 'Homer';
        $testVolunteer->last_name = 'Simpson';
        $testVolunteer->birthday = '1974-02-02';
        $testVolunteer->zip = '22222';
        $testVolunteer->gender = 'M';

        $image = new Imanee(__DIR__.'/../../../public/images/users/homer.jpg');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/homer.jpg');
        $testVolunteer->image = 'homer.jpg';

        $testVolunteer->confirmation_code = md5(uniqid(mt_rand(), true));
        $testVolunteer->confirmed = 1;
        $testVolunteer->save();

        //user id of 6
        $volunteer1 = new User;
        $volunteer1->email = 'ryan@smith.com';
        $volunteer1->password = 'password';
        $volunteer1->password_confirmation = 'password';
        $volunteer1->first_name = 'Ryan';
        $volunteer1->last_name = 'Smith';
        $volunteer1->birthday = '1981-03-23';
        $volunteer1->zip = '78324';
        $volunteer1->gender = 'M';

        $image = new Imanee(__DIR__.'/../../../public/images/users/ryansmith.jpeg');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/ryansmith.jpeg');
        $volunteer1->image = 'ryansmith.jpeg';

        $volunteer1->confirmation_code = md5(uniqid(mt_rand(),true));
        $volunteer1->confirmed = 1;
        $volunteer1->save();

        //user id of 7
        $volunteer2 = new User;
        $volunteer2->email = 'bryan@chase.com';
        $volunteer2->password = 'password';
        $volunteer2->password_confirmation = 'password';
        $volunteer2->first_name = 'Bryan';
        $volunteer2->last_name = 'Chase';
        $volunteer2->birthday = '1975-02-03';
        $volunteer2->zip = '78834';
        $volunteer2->gender = 'M';

        $image = new Imanee(__DIR__.'/../../../public/images/users/bryanchase.jpg');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/bryanchase.jpg');
        $volunteer2->image = 'bryanchase.jpg';

        $volunteer2->confirmation_code = md5(uniqid(mt_rand(),true));
        $volunteer2->confirmed = 1;
        $volunteer2->save();

        //user id of 8
        $volunteer3 = new User;
        $volunteer3->email = 'Samantha@smith.com';
        $volunteer3->password = 'password';
        $volunteer3->password_confirmation = 'password';
        $volunteer3->first_name = 'Samantha';
        $volunteer3->last_name = 'Smith';
        $volunteer3->birthday = '1991-04-24';
        $volunteer3->zip = '79934';
        $volunteer3->gender = 'F';

        $image = new Imanee(__DIR__.'/../../../public/images/users/samanthasmith.jpg');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/samanthasmith.jpg');
        $volunteer3->image = 'samanthasmith.jpg';

        $volunteer3->confirmation_code = md5(uniqid(mt_rand(),true));
        $volunteer3->confirmed = 1;
        $volunteer3->save();

        //user id of 9
        $volunteer4 = new User;
        $volunteer4->email = 'dwightschrute@schrutebeetfarms.com';
        $volunteer4->password = 'password';
        $volunteer4->password_confirmation = 'password';
        $volunteer4->first_name = 'Dwight';
        $volunteer4->last_name = 'Schrute';
        $volunteer4->birthday = '1968-01-20';
        $volunteer4->zip = '23590';
        $volunteer4->gender = 'M';

        $image = new Imanee(__DIR__.'/../../../public/images/users/dwight.jpeg');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/dwight.jpeg');
        $volunteer4->image = 'dwight.jpeg';

        $volunteer4->confirmation_code = md5(uniqid(mt_rand(), true));
        $volunteer4->confirmed = 1;
        $volunteer4->save();
        
        //user id of 10
        $volunteer5 = new User;
        $volunteer5->email = 'isaac@castillo.com';
        $volunteer5->password = 'password';
        $volunteer5->password_confirmation = 'password';
        $volunteer5->first_name = 'Isaac';
        $volunteer5->last_name = 'Castillo';
        $volunteer5->birthday = '1968-01-20';
        $volunteer5->zip = '77374';
        $volunteer5->gender = 'M';

        $image = new Imanee(__DIR__.'/../../../public/images/users/isaac.jpg');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/isaac.jpg');
        $volunteer5->image = 'isaac.jpg';

        $volunteer5->confirmation_code = md5(uniqid(mt_rand(), true));
        $volunteer5->confirmed = 1;
        $volunteer5->save();

        // user id of 11
        $volunteer6 = new User;
        $volunteer6->email = 'mister@apple.com';
        $volunteer6->password = 'password';
        $volunteer6->password_confirmation = 'password';
        $volunteer6->first_name = 'Mister';
        $volunteer6->last_name = 'Apple';
        $volunteer6->birthday = '1968-01-20';
        $volunteer6->zip = '77374';
        $volunteer6->gender = 'M';

        $image = new Imanee(__DIR__.'/../../../public/images/users/apple.jpeg');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/apple.jpeg');
        $volunteer6->image = 'apple.jpeg';

        $volunteer6->confirmation_code = md5(uniqid(mt_rand(), true));
        $volunteer6->confirmed = 1;
        $volunteer6->save();

        //user id of 12
        $volunteer7 = new User;
        $volunteer7->email = 'Mister@bic.com';
        $volunteer7->password = 'password';
        $volunteer7->password_confirmation = 'password';
        $volunteer7->first_name = 'Mister';
        $volunteer7->last_name = 'Bic';
        $volunteer7->birthday = '1968-01-20';
        $volunteer7->zip = '77374';
        $volunteer7->gender = 'M';

        $image = new Imanee(__DIR__.'/../../../public/images/users/bicboy.png');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/bicboy.png');
        $volunteer7->image = 'bicboy.png';

        $volunteer7->confirmation_code = md5(uniqid(mt_rand(), true));
        $volunteer7->confirmed = 1;
        $volunteer7->save();

        //user id of 13
        $volunteer8 = new User;
        $volunteer8->email = 'Mister@sharpie.com';
        $volunteer8->password = 'password';
        $volunteer8->password_confirmation = 'password';
        $volunteer8->first_name = 'Mister';
        $volunteer8->last_name = 'Sharpie';
        $volunteer8->birthday = '1968-01-20';
        $volunteer8->zip = '77374';
        $volunteer8->gender = 'M';

        $image = new Imanee(__DIR__.'/../../../public/images/users/sharpie.jpg');
        $image->resize(200,150)->write(__DIR__.'/../../../public/images/users/sharpie.jpg');
        $volunteer8->image = 'sharpie.jpg';

        $volunteer8->confirmation_code = md5(uniqid(mt_rand(), true));
        $volunteer8->confirmed = 1;
        $volunteer8->save();


    }
}