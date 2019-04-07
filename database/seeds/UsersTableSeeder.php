<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();
        $user->username='Admin';
        $user->name='admin';
        $user->role_id=1;
        $user->email="admin@gmail.com";
        $user->password=bcrypt('12345678');
        $user->save();

        $user1=new User();
        $user1->username='Author';
        $user1->name='author';
        $user1->role_id=2;
        $user1->email="author@gmail.com";
        $user1->password=bcrypt('87654321');
        $user1->save();

        $user2=new User();
        $user2->username='Mashud';
        $user2->name='mashud';
        $user2->role_id=3;
        $user2->email="user@gmail.com";
        $user2->password=bcrypt('m@$hudr@n@10');
        $user2->save();
    }
}
