<?php

use Illuminate\Database\Seeder;

use App\Roles;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin1 = Roles::create([
            'id'=>1,
            'name' => 'Admin 1',
            'slug' => 'admin_1',
            'permissions' => json_encode([
                'act-user'=> true,
                'act-teacher'=> true,
                'act-student'=> true,
                'act-class'=> true,
                'act-point'=> true,

                'act-point'=> true,
                'act-exam'=> true,
                'act-question'=> true,
                'act-answer'=> true,

                'view-point'=> true
            ])
        ]);
  
        $admin2 = Roles::create([
            'id'=>2,
            'name' => 'Admin 2',
            'slug' => 'admin_2',
            'permissions' => json_encode([
                'act-teacher'=> true,
                'act-student'=> true,
                'act-class'=> true,
                'act-point'=> true,

                'act-point'=> true,
                'act-exam'=> true,
                'act-question'=> true,
                'act-answer'=> true,

                'view-point'=> true

            ])
        ]);        

        $teacher = Roles::create([
            'id'=>3,
            'name' => 'Teacher',
            'slug' => 'teacher',
            'permissions' => json_encode([
                
                'act-point'=> true,
                'act-exam'=> true,
                'act-question'=> true,
                'act-answer'=> true,

                'view-point'=> true

               
            ])

        ]);

        $student = Roles::create([
            'id'=>4,
            'name' => 'Student',
            'slug' => 'student',
            'permissions' => json_encode([
                
                'view-point'=> true
                
               
            ])
        ]);


    }
}