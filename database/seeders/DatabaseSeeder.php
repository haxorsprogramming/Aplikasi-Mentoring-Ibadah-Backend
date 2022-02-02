<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

use App\Models\M_User;
use App\Models\M_Profile_Member;

class DatabaseSeeder extends Seeder
{
    protected $faker;

    public function __construct()
    {
        require_once 'vendor/autoload.php';
        $faker = Faker\Factory::create('id_ID');
        $this -> faker = $faker;
    }

    public function run()
    {
        // create mentor 
        $this -> createUserAndProfile('mentor1', 'MENTOR', 'mentor1', 'Aditia Darma', '082272177022', 'L');
        $this -> createUserAndProfile('mentor2', 'MENTOR', 'mentor2', 'Hanifah Mutiara', '081267228932', 'P');
        // create binaan 
        $this -> createUserAndProfile('binaan1', 'BINAAN', 'binaan1', 'Umi Mardiah', '081278229022', 'P');
        $this -> createUserAndProfile('binaan2', 'BINAAN', 'binaan2', 'Alfa Naninda', '08127823311', 'P');

    }
    
    function createUserAndProfile($username, $role, $password, $namaLengkap, $hp, $jk)
    {
        // save tabel use 
        $user = new M_User();
        $user -> username = $username;
        $user -> role = $role;
        $user -> password = password_hash($password, PASSWORD_DEFAULT);
        $user -> active = "1";
        $user -> save();
        // save table profile 
        $profile = new M_Profile_Member();
        $profile -> username = $username;
        $profile -> nama_lengkap = $namaLengkap;
        $profile -> nomor_handphone = $hp;
        $profile -> email = $this -> faker -> email();
        $profile -> jk = $jk;
        $profile -> active = "1";
        $profile -> save();
    }

}
