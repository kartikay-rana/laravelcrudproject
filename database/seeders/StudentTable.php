<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;

class StudentTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_tables')->insert([
            'First_name' => 'Naruto',
            'Last_name' => 'Uzumaki',
            'Age' => '25',
            'Subject'=> 'Non-med',
        ]);
        DB::table('student_tables')->insert([
            'First_name' => 'sasuke',
            'Last_name' => 'uchiha',
            'Age' => '22',
            'Subject'=> 'Med',
        ]);
        DB::table('student_tables')->insert([
            'First_name' => 'Itachi',
            'Last_name' => 'Uchiha',
            'Age' => '22',
            'Subject'=> 'Non-med',
        ]);
        DB::table('student_tables')->insert([
            'First_name' => 'Jiraya',
            'Last_name' => 'Senin',
            'Age' => '23',
            'Subject'=> 'Med',
        ]);
    }
}
