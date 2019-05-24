<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
    


    
//Importing Records From Excel to Database


     public function doimport(Request $request)
    {

           date_default_timezone_set("Asia/Manila");
           $time = date("Y-m-d h:i");

     //validate the xls file
        $this->validate($request, array(
            'file'      => 'required'
        ));
     
        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
     
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
     

              $name= 'default';
              $image= file_get_contents('defaultimage.png');
              $image= base64_encode($image);


                foreach ($data as $key => $value) {
                    $insert[] = [
                    'lastname' => $value->lastname,
                    'firstname' => $value->firstname,
                    'middlename' => $value->middlename,
                    'gender' => $value->gender,
                    'birthdate' => $value->birthdate,
                    'placeofbirth' => $value->placeofbirth,
                    'phone' => $value->phone,
                    'email' => $value->email,
                    'location' => $value->location,
                    'religion' => $value->religion,
                    'civil_status' => $value->civilstatus,
                    'elem_school' => $value->elemschool,
                    'elemgrad' => $value->syelemgrad,
                    'highschool' => $value->highschool,
                    'hsgrad' => $value->syhsgrad,
                    'college' => $value->college,
                    'collegegrad' => $value->sycollegegrad,
                    'sss' => $value->sss,
                    'phil' => $value->philhealth,
                    'pagibig' => $value->pagibig,
                    'tin' => $value->tin,
                    '' => $value->empoyeeno,
                    'card_number' => $value->cardnumber,
                    'company_name' => $value->companyname,
                    'company_address' => $value->region,
                    'company_tel' => $value->comptel,
                    'company_email' => $value->compemail,
                    'position' => $value->position,
                    'datehired' => $value->datehired,
                    'emp_status' => $value->employmentstatus,
                    'created_at' => $time,
                    'updated_at' => $time,
                    'imagename' => $name,
                    'imagefile' => $image,


                    ];
                }
 
                if(!empty($insert)){
 
                    $insertData = DB::table('masterfile')->insert($insert);
                    if ($insertData) {
                         session()->flash('status', 'New Data has successfully imported.');
                          return back();
                    }else {                        

                        session()->flash('status', 'Error inserting the data..');
                         return back();
                    }
                }
            }
 
            return back();
 
        }else {

            session()->flash('status', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
             return back();
        }
    }


    }

//Exporting Record


  public function index()
    {
     $customer_data = DB::table('manpower')->get();
     return view('export_excel')->with('manpower_data', $customer_data);
    }

    public function xls()
    {
     $manpower_data = DB::table('manpower')->get()->toArray();
     $manpower_array[] = array('firstname', 'middlename', 'lastname', 'birthdate', 'place_of_birth', 'email', 'address', 'contact', 'created_at', 'updated_at', 'gender');
     foreach($manpower_data as $manpower)
     {
      $manpower_array[] = array(

                    'firstname' => $manpower->firstname,
                    'middlename' => $manpower->middlename,
                    'lastname' => $manpower->lastname,
                    'birthdate' => $manpower->birthdate,
                    'place_of_birth' => $manpower->place_of_birth,
                    'email' => $manpower->email,
                    'address' => $manpower->address,
                    'contact' => $manpower->contact,
                    'created_at' => $manpower->created_at,
                    'updated_at' => $manpower->updated_at,
                    'gender' => $manpower->gender
      );
     }
     Excel::create('manpower Data', function($excel) use ($manpower_array){
      $excel->setTitle('manpower Data');
      $excel->sheet('manpower Data', function($sheet) use ($manpower_array){
      $sheet->fromArray($manpower_array, null, 'A1', false, false);
      });
     })->download('xls');
    }

  public function xlsx()
    {
     $manpower_data = DB::table('manpower')->get()->toArray();
     $manpower_array[] = array('firstname', 'middlename', 'lastname', 'birthdate', 'place_of_birth', 'email', 'address', 'contact', 'created_at', 'updated_at', 'gender');
     foreach($manpower_data as $manpower)
     {
      $manpower_array[] = array(

                    'firstname' => $manpower->firstname,
                    'middlename' => $manpower->middlename,
                    'lastname' => $manpower->lastname,
                    'birthdate' => $manpower->birthdate,
                    'place_of_birth' => $manpower->place_of_birth,
                    'email' => $manpower->email,
                    'address' => $manpower->address,
                    'contact' => $manpower->contact,
                    'created_at' => $manpower->created_at,
                    'updated_at' => $manpower->updated_at,
                    'gender' => $manpower->gender
      );
     }
     Excel::create('manpower Data', function($excel) use ($manpower_array){
      $excel->setTitle('manpower Data');
      $excel->sheet('manpower Data', function($sheet) use ($manpower_array){
      $sheet->fromArray($manpower_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }

  public function csv()
    {
     $manpower_data = DB::table('manpower')->get()->toArray();
     $manpower_array[] = array('firstname', 'middlename', 'lastname', 'birthdate', 'place_of_birth', 'email', 'address', 'contact', 'created_at', 'updated_at', 'gender');
     foreach($manpower_data as $manpower)
     {
      $manpower_array[] = array(

                    'firstname' => $manpower->firstname,
                    'middlename' => $manpower->middlename,
                    'lastname' => $manpower->lastname,
                    'birthdate' => $manpower->birthdate,
                    'place_of_birth' => $manpower->place_of_birth,
                    'email' => $manpower->email,
                    'address' => $manpower->address,
                    'contact' => $manpower->contact,
                    'created_at' => $manpower->created_at,
                    'updated_at' => $manpower->updated_at,
                    'gender' => $manpower->gender
      );
     }
     Excel::create('manpower Data', function($excel) use ($manpower_array){
      $excel->setTitle('manpower Data');
      $excel->sheet('manpower Data', function($sheet) use ($manpower_array){
      $sheet->fromArray($manpower_array, null, 'A1', false, false);
      });
     })->download('csv');
    }


}
