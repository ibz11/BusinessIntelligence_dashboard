<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patients')->insert([
        'Patient_name' => Str::random(10)]);

       DB::table('patients')->insert([
      'Patient_name' => Str::random(10)]);


     DB::table('patients')->insert([
    'Patient_name' => Str::random(10)]);

      DB::table('patients')->insert([
     'Patient_name' => Str::random(10)]);
    
    DB::table('patients')->insert([
        'Patient_name' => Str::random(10)]);

    DB::table('patients')->insert([
    'Patient_name' => Str::random(10)]);

    DB::table('patients')->insert([
    'Patient_name' => Str::random(10)]);

    
    DB::table('patients')->insert([
        'Patient_name' => Str::random(10)]);

    DB::table('patients')->insert([
        'Patient_name' => Str::random(10)]);
  
    DB::table('patients')->insert([
        'Patient_name' => Str::random(10)]);

    DB::table('patients')->insert([
        'Patient_name' => Str::random(10)]);
       
   
        








}}
