<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Xabi', 'Mikel', 'Asics', 'Carlos', 'Ana', 'Miguel',
        'Imanol', 'Iri', 'Jon', 'Diego'];
    $first_surname = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown',
        'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor'];
    $second_surname = ['Iturrioz', 'Carrasco', 'Albizu', 'Hidalgo', 'Zendoia',
        'martin', 'Caballero', 'Perez', 'Labayen', 'Goikoetxea'];
    $address = ['Salbe', 'BertsolariTxirrita', 'Zarategi', 'Basotxiki', 'Damaso',
        'Zumardi', 'Magdalena', 'SanMartin', 'Barrenetxe', 'Soreasu'];

    for ($i = 0; $i < 10; $i++) {
        $choosedName=$names[random_int(0, 9)];
        $choosedFirstSurname=$first_surname[random_int(0, 9)];
        $choosedSecondSurname=$second_surname[random_int(0, 9)];

        $gender="";
        if($choosedName=="Ana"){
            $gender="Female";
        }else{
            $gender="Male";
        }
        $gmail = "@gmail.com";
        $email = $choosedName.$choosedFirstSurname.$choosedSecondSurname.$gmail;  
        DB::table('users')->insert([
            'name' => $choosedName,
            'first_surname' => $choosedFirstSurname,
            'second_surname' => $choosedSecondSurname,
            'phone_number' => random_int(610000000, 699999999),
            'email'=>$email,
            'gender'=> $gender,
            'age'=>random_int(16,75),
            'address'=>$address[random_int(0, 9)],
            'username'=>$choosedName.$choosedFirstSurname.random_int(0, 1000),
            'password'=> Hash::make("user1234"),
            'role'=>3,
        ]);
    }
    
    DB::table('users')->insert([
        'name' => "Xabier",
        'first_surname' => "Iturrioz",
        'second_surname' => "Carrasco",
        'phone_number' => 615926688,
        'email'=>"admin@gmail.com",
        'gender'=> "male",
        'age'=> 22,
        'address'=>"Azpeitia",
        'username'=>"lukaxa",
        'password'=> Hash::make("Admin1234"),
        'role'=>1,
    ]);
    }
}
