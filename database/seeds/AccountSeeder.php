<?php

use Illuminate\Database\Seeder;


class AccountSeeder extends Seeder

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
                
                'user_id' => 1228,
                'acc_name' => 'Earth',
                'init_invest' => 400.00,
                'start_date' => '2022-11-10',
                'remarks' => 'yes'
            ],
            [
                
                'user_id' => 3238,
                'acc_name' => 'Venus',
                'init_invest' => 500.00,
                'start_date' => '2020-10-15',
                'remarks' => 'yes'
            ],
            [
                
                'user_id' => 2344,
                'acc_name' => 'Mars',
                'init_invest' => 600.00,
                'start_date' => '2021-9-10',
                'remarks' => 'yes'
            ],
        ];
        

        foreach($data as $a){
            \App\Accounts::create($a);
        }
    }
}
