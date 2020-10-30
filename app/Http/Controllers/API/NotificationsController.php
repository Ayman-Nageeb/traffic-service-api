<?php

namespace App\Http\Controllers\API ;
use App\Citizen ;
use App\CarLicense ;
use App\Violation ;
use App\License ;
use Carbon\Carbon ;

class NotificationsController
{
    public function index($id)
    {
       
       $citizen = Citizen::find($id);

       $car = CarLicense::Where('citizen_id' , '=' ,$id)->first();

       $license = License::Where('citizen_id' , '=' ,$id)->first();

       $violations = Violation::Where('plate_number' , '=' , $car['number'])->get() ;

       $carLicenseExpirationDate = Carbon::parse($car['date_expired']);
       $LicenseExpirationDate = Carbon::parse($license['date_expired']);
       $now = Carbon::now();



       $outPut = [
           "licenceExpiration" => $LicenseExpirationDate->diffInDays($now) ,
           "CarLicenceExpiration" => $carLicenseExpirationDate->diffInDays($now),
           "vilations" => $violations
       ];

       if ($carLicenseExpirationDate->lte($now)){
           $outPut['CarLicenceExpiration'] = 0 ;
       }

       if($LicenseExpirationDate->lte($now)){
           $outPut["licenceExpiration"] = 0 ;
       }

       return $outPut ;
    }
}