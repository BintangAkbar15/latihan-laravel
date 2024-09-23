<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([                                                                  
            'name'=>'Web Design',
            'slug'=>'web-design',
            'color'=>'blue'
        ]);
        
        Category::create([                                                                  
            'name'=>'Artificial Intelegent',
            'slug'=>'ai',
            'color'=>'red'
        ]);
        
        Category::create([                                                                  
            'name'=>'Internet Of Things',
            'slug'=>'iot',
            'color'=>'orange'
        ]);
        
        Category::create([                                                                  
            'name'=>'Data Science',
            'slug'=>'data-science',
            'color'=>'green'
        ]);
        
        Category::create([                                                                  
            'name'=>'UI UX',
            'slug'=>'ui-ux',
            'color'=>'skyblue'
        ]);
        
        Category::create([                                                                  
            'name'=>'Cyber Security',
            'slug'=>'cyber-security',
            'color'=>'tomato'
        ]);
        
    }
}
