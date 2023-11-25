<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Patients;
use App\Models\Doctors;
use App\Models\Rating;
use App\Models\Service;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customeranalyticsL(){
return view("customer.dashboard");
    }

    public function customeranalytics(){
      
     //Average rating
        $rating=Rating::where('patient_id',1)->sum('score');
        $ratingcount=Rating::where('patient_id',1)->count();
        $avgrating=round( $rating/intval($ratingcount));
    //Total medical fees spent
       $totalfees=Service::where('patient_id',1)->sum('Fees');
    //Total services gotten
       $totalservices=Service::where('patient_id',1)->count();
    //total minutes served
       $servicetime=Service::where('patient_id',1)->sum('service_time');
       $servicetimecount=Service::where('patient_id',1)->count();
       $avgservicetime=round( $servicetime/intval($servicetimecount));

        return view("customer.dashboard" ,compact(
        'avgrating',
        'totalfees',
        'totalservices',
        'avgservicetime'
    
    ));  
    }
}
