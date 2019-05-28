<?php

namespace App\Http\Controllers;

use Album;
use App\Duration;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Masterfile;
use App\Prizemoney;
use App\Tournament;
use App\Rebuys;
use App\Prize;
use App\Players;
use Excel;
use File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Laravel\Scout\Searchable;
use Session;

class PagesController extends Controller
{

  public function logout(){
        Session::flush();
   /*     Auth::guard($this->getGuard())->logout();*/
        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }
    
   
    public function welcome()
 	{
 		$result =DB::table('banner')->paginate(3);
        return view('welcome', ["data"=>$result]);
/* 		return view('welcome');*/
 	}	



//Non Admin

  public function tournament()
  {
    return view('tournament');
  } 


 	public function dailytournament()
 	{
    $firstTournament = Tournament::firstOrFail();
    $tournaments = Tournament::all();
    $prizemoney = Prizemoney::all();

    $temp = explode('/', $firstTournament->blinds);
    $blindParts = [
      'big' => $temp[1],
      'small' => $temp[0]
    ];


    $allBlinds = [];
    foreach ($tournaments as $tournament) {
      $temp = explode('/', $tournament->blinds);
      $allBlinds[] = [
        'small' => (int)$temp[0],
        'big' => (int)$temp[1]
      ];  
    }

    $duration = Duration::firstOrFail();

    return view('/dailytournament', compact(
      'prizemoney', 
      'firstTournament', 
      'tournaments',
      'blindParts',
      'allBlinds',
      'duration'
    ));
}



  public function saturdaytournament()
  {
    $firstTournament = Tournament::firstOrFail();
    $tournaments = Tournament::all();
    $prizemoney = Prizemoney::all();
    $rebuys = Rebuys::firstOrFail();
    $prize = Prize::firstOrFail();
    $players = Players::firstOrFail();

    $temp = explode('/', $firstTournament->blinds);
    $blindParts = [
      'big' => $temp[1],
      'small' => $temp[0]
    ];


    $allBlinds = [];
    foreach ($tournaments as $tournament) {
      $temp = explode('/', $tournament->blinds);
      $allBlinds[] = [
        'small' => (int)$temp[0],
        'big' => (int)$temp[1]
      ];  
    }

    $duration = Duration::firstOrFail();

    return view('/saturdaytournament', compact(
      'prizemoney',
      'firstTournament', 
      'tournaments',
      'blindParts',
      'allBlinds',
      'duration',
      'rebuys',
      'prize',
      'players'
    ));
}





 public function  updateprize(Request $request)
 {
  $newtotalchips = $_POST['newtotalchips'];

ize::where('user_id',101)->update(array('totalchips'=>$newtotalchips));

 }


    


 	public function search(Request $request)
 	{
 
   		$search = Input::get('search');
        if($search != ''){
        	$data = Masterfile::where('firstname', 'LIKE', '%'.$search.'%')
        					->orWhere('middlename', 'LIKE', '%'.$search.'%')
        					->orWhere('lastname', 'LIKE', '%'.$search.'%')
        					->paginate(3)
        					->setpath('');
            $data->appends(array('search' => Input::get('search'),));
			if(count($data)>0){
				return view('/home')->withData($data);
			}	
			return view('/home')->withMessage("No Results found!");
        }
       	else{
       		$result =DB::table('masterfile')->paginate(3);
        	return view('/home', ["data"=>$result]);
       	}
 	}





//ADMIN SIDE

  public function adminsearch(Request $request)
  {
 
      $search = Input::get('search');
        if($search != ''){
          $data = Masterfile::where('firstname', 'LIKE', '%'.$search.'%')
                  ->orWhere('middlename', 'LIKE', '%'.$search.'%')
                  ->orWhere('lastname', 'LIKE', '%'.$search.'%')
                  ->paginate(3)
                  ->setpath('');
            $data->appends(array('search' => Input::get('search'),));
      if(count($data)>0){
        return view('/adminhome')->withData($data);
      } 
      return view('/adminhome')->withMessage("No Results found!");
        }
        else{
          $result =DB::table('masterfile')->paginate(3);
          return view('/adminhome', ["data"=>$result]);
        }
  }






 	public function destroy($id) {
      DB::delete('delete from manpower where id = ?',[$id]);
      
      session()->flash('status', 'Record deleted Successfully.');
      return redirect('/home');
   }


 	public function destroyall(Request $request) {
 	  

/*if ( ! $request->has('selector')) {
    $checkboxValue = $request->input('selector');
    echo  $checkboxValue;
 }
*/

/* 	 $id=$request->input('selector');*/

 
/*	 $key = count($id);
*/	//multi delete using checkbox as a selector
	
/*
	if($key	<> 0){
	for($i=0;$i<$key;$i++){

      DB::delete('delete from manpower where id = ?',$id[$i]);
      
      session()->flash('status', 'Records deleted Successfully.');
      return redirect('/home');
      	}
	}else{
	  session()->flash('status', 'Please select record to be deleted.'.$key);
      return redirect('/home');
	}
*/
   	}






}
