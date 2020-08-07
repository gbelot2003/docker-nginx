<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'Gerardo A Belot',
                'email' => 'gbelot2003@hotmail.com',
                'email_verified_at' => '2020-05-15 18:30:21',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '711bsChELT',
                'mobile' => '3372-4555',
                'created_at' => '2020-05-15 18:30:21',
                'updated_at' => '2020-05-15 18:30:21',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Ms. Noemi Kutch V',
                'email' => 'nwiza@example.org',
                'email_verified_at' => '2020-05-15 18:30:21',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'i5MSuEZLp1',
                'mobile' => '2233-6655',
                'created_at' => '2020-05-15 18:30:21',
                'updated_at' => '2020-05-15 18:30:21',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Rickie Jacobson',
                'email' => 'camila44@example.com',
                'email_verified_at' => '2020-05-15 18:30:21',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'dfTdp5SmpQ',
                'mobile' => '2233-6655',
                'created_at' => '2020-05-15 18:30:21',
                'updated_at' => '2020-05-15 18:30:21',
                'status' => 2,
            ),
            3 => 
            array (
                'id' => '4',
                'name' => 'Ladarius McDermott',
                'email' => 'gutmann.urban@example.net',
                'email_verified_at' => '2020-05-15 18:30:21',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'G6TDdqLL0i',
                'mobile' => '2233-6655',
                'created_at' => '2020-05-15 18:30:21',
                'updated_at' => '2020-05-15 18:30:21',
                'status' => 2,
            ),
            4 => 
            array (
                'id' => '5',
                'name' => 'Mr. Major Hand',
                'email' => 'iwalker@example.net',
                'email_verified_at' => '2020-05-15 18:30:21',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'zbausLBA8D',
                'mobile' => '2233-6655',
                'created_at' => '2020-05-15 18:30:22',
                'updated_at' => '2020-05-15 18:30:22',
                'status' => 1,
            ),
            5 => 
            array (
                'id' => '6',
                'name' => 'Miss Katarina Wilderman',
                'email' => 'olindgren@example.com',
                'email_verified_at' => '2020-05-15 18:30:21',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'TDwY79Ep5m',
                'mobile' => '2233-6655',
                'created_at' => '2020-05-15 18:30:22',
                'updated_at' => '2020-05-15 18:30:22',
                'status' => 1,
            ),
            6 => 
            array (
                'id' => '7',
                'name' => 'Domenick Smitham',
                'email' => 'wprice@example.net',
                'email_verified_at' => '2020-05-15 18:30:21',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'xG2Y1PQEa8',
                'mobile' => '2233-6655',
                'created_at' => '2020-05-15 18:30:22',
                'updated_at' => '2020-05-15 18:30:22',
                'status' => 1,
            ),
            7 => 
            array (
                'id' => '8',
                'name' => 'Dr. Dax Vandervort',
                'email' => 'augustine.prohaska@example.com',
                'email_verified_at' => '2020-05-15 18:30:21',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'ZUt5ISIpE9',
                'mobile' => '2233-6655',
                'created_at' => '2020-05-15 18:30:23',
                'updated_at' => '2020-05-15 18:30:23',
                'status' => 1,
            ),
            8 => 
            array (
                'id' => '9',
                'name' => 'Walter Armstrong',
                'email' => 'hhermiston@example.org',
                'email_verified_at' => '2020-05-15 18:30:21',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'VCuWxljhcs',
                'mobile' => '2233-6655',
                'created_at' => '2020-05-15 18:30:23',
                'updated_at' => '2020-05-15 18:30:23',
                'status' => 1,
            ),
            9 => 
            array (
                'id' => '10',
                'name' => 'Ms. Kayla Tillman IV',
                'email' => 'donny.boyer@example.com',
                'email_verified_at' => '2020-05-15 18:30:21',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '987ZYuYPy9',
                'mobile' => '2233-6655',
                'created_at' => '2020-05-15 18:30:23',
                'updated_at' => '2020-05-15 18:30:23',
                'status' => 1,
            ),
        ));

        $user = User::find(1);
        $user->assignRole('Administrador');

        $user = User::find(2);
        $user->assignRole('Editor');

        $user = User::find(3);
        $user->assignRole('usuario');

        $user = User::find(4);
        $user->assignRole('usuario');

        $user = User::find(5);
        $user->assignRole('usuario');

        $user = User::find(6);
        $user->assignRole('usuario');

        $user = User::find(7);
        $user->assignRole('usuario');

        $user = User::find(8);
        $user->assignRole('usuario');

        $user = User::find(9);
        $user->assignRole('usuario');

        $user = User::find(10);
        $user->assignRole('usuario');





    }
}