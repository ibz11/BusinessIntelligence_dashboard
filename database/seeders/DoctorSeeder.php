<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
   //AI trained     
        DB::table('doctors')->insert([
        'Doctor_name' => Str::random(10),
        'AI_trained'=>'yes']);

        DB::table('doctors')->insert([
        'Doctor_name' => Str::random(10),
        'AI_trained'=>'yes']);


        DB::table('doctors')->insert([
        'Doctor_name' => Str::random(10),
        'AI_trained'=>'yes']);


        DB::table('doctors')->insert([
        'Doctor_name' => Str::random(10),
        'AI_trained'=>'yes']);


//Not AI trained
        DB::table('doctors')->insert([
        'Doctor_name' => Str::random(10),
        'AI_trained'=>'no']);

        DB::table('doctors')->insert([
        'Doctor_name' => Str::random(10),
        'AI_trained'=>'no']);

        DB::table('doctors')->insert([
        'Doctor_name' => Str::random(10),
        'AI_trained'=>'no']);

        DB::table('doctors')->insert([
        'Doctor_name' => Str::random(10),
        'AI_trained'=>'no']);

        DB::table('doctors')->insert([
        'Doctor_name' => Str::random(10),
        'AI_trained'=>'no']);

        DB::table('doctors')->insert([
        'Doctor_name' => Str::random(10),
        'AI_trained'=>'no']);

        DB::table('doctors')->insert([
            'Doctor_name' => Str::random(10),
            'AI_trained'=>'no']);
    





            
    
    
    
    
        }
}
