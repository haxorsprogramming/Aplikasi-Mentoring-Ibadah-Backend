<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

use App\Models\M_User;
use App\Models\M_Profile_Member;
use App\Models\M_Kelompok_Binaan;

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
        // create kader 
        $this -> createUserAndProfile('kader1', 'KADER', 'kader1', 'Fitri Ardianti', '083190741788', 'P');

        // create kelompok binaan 
        $this -> createKelompokBinaan("AL Haziq", "mentor1");
        $this -> createKelompokBinaan("AL Imran", "mentor2");
        $this -> createKelompokBinaan("AR Rahman", "mentor1");
    }

    function createKelompokBinaan($nama, $idMentor)
    {
        $kb = new M_Kelompok_Binaan();
        $kb -> id_kelompok_binaan = Str::uuid();
        $kb -> nama_kelompok_binaan = $nama;
        $kb -> deks = "-";
        $kb -> id_mentor = $idMentor;
        $kb -> active = "1"; 
        $kb -> save();
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
