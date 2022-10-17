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
        $data = [
            [
                'id' => 1228,
                'lname' => 'sacedon',
                'fname' => 'christian james',
                'address' => 'Tinangnan',
                'phone' => '09486306766',
                'email' => 'sacedonchristian71@gmail.com',
                'password' => bcrypt('admin123')
            ],
            [
                'id' => 3238,
                'lname' => 'Raval',
                'fname' => 'Aj',
                'address' => 'Tondo, Manila',
                'phone' => '09307665033',
                'email' => 'christiansacedon3@gmail.com',
                'password' => 'admin1234'
            ],
            [
                'id' => 2344,
                'lname' => 'Coco',
                'fname' => 'Buko',
                'address' => 'zabuangga, Manila',
                'phone' => '09495473745',
                'email' => 'christiansacedon5@gmail.com',
                'password' => 'admin12345'
            ],
            
        ];

        foreach($data as $u){
            \App\User::create($u);
        }

    }
}