<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([                                                                  
            'name'=>'Bintang Akbar',
            'username'=>'Bayy',
            'email'=>'bintangAkbar@gmailcom',
            'email_verified_at'=>now(),
            'password'=>Hash::make('password')
        ]);

        User::create([                                                                  
            'name'=>'Bintang Putra',
            'username'=>'Putt',
            'email'=>'bintangPutra@gmailcom',
            'email_verified_at'=>now(),
            'password'=>Hash::make('password')
        ]);
        
        User::create([                                                                  
            'name'=>'Ahmad Saehuddin',
            'username'=>'Saee',
            'email'=>'ahmadSarhuddin@gmailcom',
            'email_verified_at'=>now(),
            'password'=>Hash::make('password')
        ]);
        
        User::create([                                                                  
            'name'=>'Wafa Andria',
            'username'=>'wawan',
            'email'=>'wafaAndria@gmailcom',
            'email_verified_at'=>now(),
            'password'=>Hash::make('password')
        ]);
        
        User::create([                                                                  
            'name'=>'Zhafran Ramadhanu',
            'username'=>'ZhRa',
            'email'=>'zhafranRamadhanu@gmailcom',
            'email_verified_at'=>now(),
            'password'=>Hash::make('password')
        ]);
        
        User::create([                                                                  
            'name'=>'Mustika Wanti',
            'username'=>'MuWan',
            'email'=>'mustikaWanti@gmailcom',
            'email_verified_at'=>now(),
            'password'=>Hash::make('password')
        ]);
        
    }
}
