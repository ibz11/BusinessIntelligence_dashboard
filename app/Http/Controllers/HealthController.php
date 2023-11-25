<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Patients;
use App\Models\Doctors;
use App\Models\Rating;
use App\Models\Service;
use Haruncpi\LaravelIdGenerator\IdGenerator;
class HealthController extends Controller
{


public function businessdashboard() 
{
return view('business.dashboard');
 }


public function home(){
    return view('home');

}

public function businessanalytics(){
        $totaldoct = DB::table("Doctors")->count('*'); 
        $totalrev = DB::table("services")->sum(DB::raw('Fees'));
        $totalratings = DB::table("ratings")->where('score',5)->count();
        $totalpatients = DB::table("patients")->count();
    
        $trained=floor(((DB::table("Doctors")->where('AI_trained','yes')->count())/ (DB::table("Doctors")->count()))*100);
        $not_trained=floor(((DB::table("Doctors")->where('AI_trained','no')->count())/ (DB::table("Doctors")->count()))*100);

       $time_lesser35 =DB::table("services")->where('service_time','<',35)->count();
       $time_greater40=DB::table("services")->where('service_time','>',35)->count();

       $rating=DB::table("ratings")->select('score')->where('score','>=',0)->get();
       $jsonArray = $rating;
       $array=json_decode($jsonArray, true);
       $rating_data;

    //    foreach ($array as $element) {
    //    $rating_data[] = $element['score']; // Push the element to the new array
    // }
       //select('score')->get();
       //Rating::all();
       //
     

return view('business.dashboard',compact('totaldoct','totalrev','totalratings','totalpatients','trained',
'not_trained','time_lesser35' ,'time_greater40','rating',));
    }














    public function adddata(){
        $patients=Patients::all();
        $doctors=Doctors::all();
        $rating=Patients::all();
        return view ('adddata' ,compact('patients','doctors','rating'));
    }
    public function createpatient(Request $request){
     //$id=getPatientID();
    //  $prefix = date("y"); 
    //  $patient_id = IdGenerator::generate(['table' => 'patients', 'length' => 6, 'prefix' =>$prefix]);
    //$patient->Patient_id=  $patient_id ;
    $redirect=$this->adddata();

    $patient=new Patients;
   
    $patient->Patient_name=$request->Patient_name;
    $patient->save();
 //view('adddata');
    return $redirect;
    }
    public function createdoctor(Request $request){
        $doctor=new Doctors;
   
        $doctor->Doctor_name=$request->Doctor_name;
        if($request->AI_trained=='yes'){
            $doctor->AI_trained='yes';
        }
        else if($request->AI_trained=='no'){
            $doctor->AI_trained='no';
        }
        
  
        $doctor->save();
     
        return view('adddata');
    }

// Start of Key metrics
public function createservice(Request $request)
{   
    $redirect=$this->adddata();

    $service=new Service;
    $service->patient_id=$request->patient_id;
    $service->doctor_id=$request->patient_id;
    $service->waiting_time=$request->waiting_time;
    $service->service_time=$request->service_time;
    $service->Fees=$request->Fees;
    $service->diagnosis=$request->diagnosis;
    $service->save();

    return $redirect;

}









public function createrating(Request $request){
$rating=new Rating;

if($request->score==1){
    $rating->score=1;
}
else if($request->score==2){
    $rating->score=2;
}

else if($request->score==3){
    $rating->score=3;
}

else if($request->score==4){
    $rating->score=4;
}

else if($request->score==5){
    $rating->score=5;
}

$redirect=$this->adddata();
$rating->patient_id=$request->patient_id;
$rating->comments=$request->comments;
$rating->save();

return $redirect;

}






























}
