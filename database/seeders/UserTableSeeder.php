<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Instructor;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $role_student = Role::where('name', 'student')->first();
    $role_instructor  = Role::where('name', 'instructor')->first();
    $role_admin  = Role::where('name', 'admin')->first();
    $role_quizmaster = Role::where('name','quizmaster')->first();

    $is_exist = User::all();

    if (!$is_exist->count()) {
        $student = new User();
        $student->first_name = 'Osman';
        $student->last_name = 'Kanu';
        $student->email = 'student@gmail.com';
        $student->password = bcrypt('12345678');
        $student->is_active = 1;
        $student->save();
        $student->roles()->attach($role_student);
        
        $admin = new User();
        $admin->first_name = 'Admin';
        $admin->last_name = 'A';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('12345678');
        $admin->is_active = 1;
        $admin->save();
        $admin->roles()->attach($role_admin);
        // For quiz master  
        $admin = new User();
        $admin->first_name = 'Nahid';
        $admin->last_name = 'hasan';
        $admin->email = 'quizmaster@gmail.com';
        $admin->password = bcrypt('12345678');
        $admin->is_active = 1;
        $admin->save();
        $admin->roles()->attach($role_quizmaster);


        //import instructors
        $instructor_user = new User();
        $instructor_user->first_name = 'Israfil';
        $instructor_user->last_name = 'Hossain';
        $instructor_user->email = 'instructor@gmail.com';
        $instructor_user->password = bcrypt('12345678');
        $instructor_user->is_active = 1;
        $instructor_user->save();
        $instructor_user->roles()->attach($role_student);
        
        $instructor = new Instructor();
        $instructor->user_id = $instructor_user->id;
        $instructor->first_name = 'Israfil';
        $instructor->last_name = 'Hossain';
        $instructor->instructor_slug = 'Israfil-Hossain';
        $instructor->contact_email = 'instructor@gmail.com';
        $instructor->mobile = '+880-1843566251';
        $instructor->Bkash_id = '+880-1843566251';
        $instructor->biography = '<p>Aenean commodo ligula eget dolor. Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, eta rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis. Lorem ipsum dolor sit amet,Aenean commodo ligula eget dolor. Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, eta rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis. Lorem ipsum dolor sit amet,Aenean commodo ligula eget dolor. Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>';
        $instructor->instructor_image = 'instructor/1/angela.jpg';
        $instructor->save();
        $instructor_user->roles()->attach($role_instructor);

        
    }
    }
}
