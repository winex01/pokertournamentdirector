<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Laravel\Scout\Searchable;
use Session;


//Daily Tournament Databases
use App\EverydayDuration;
use App\EBuyin;
use App\EverydayTournament;
use App\EverydayPrizeMoney;
use App\EverydayPrize;

//Saturday Tournament Databases
use App\Duration;
use App\Buyin;
use App\Tournament;
use App\Prizemoney;
use App\Prize;


class PagesController extends Controller
{


  protected $posts_per_page = 6;


  public function logout(){
        Session::flush();
   /*     Auth::guard($this->getGuard())->logout();*/
        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }
    
  public function welcome()
 	{
 		return view('welcome');
 	}	

  public function tournament()
  {
    return view('tournament');
  } 

 	public function dailytournament()
 	{
    $posts = EverydayTournament::paginate($this->posts_per_page);
    $eduration = EverydayDuration::firstOrFail();
    $etournament = EverydayTournament::firstOrFail();
    $etournaments = EverydayTournament::all();
    $eprizemoney = EverydayPrizeMoney::all();
    $eprize = EverydayPrize::firstOrFail();

    $temp = explode('/', $etournament->blinds);
    $blindParts = [
      'big' => $temp[1],
      'small' => $temp[0]
    ];

    $allBlinds = [];
    foreach ($etournaments as $etournaments) {
      $temp = explode('/', $etournaments->blinds);
      $allBlinds[] = [
        'small' => (int)$temp[0],
        'big' => (int)$temp[1]
      ];  
    }

    return view('/dailytournament', compact(
      'etournaments',
      'blindParts',
      'allBlinds',
      'eduration',
      'etournament',
      'eprizemoney',
      'eprize',
      'posts'

    ));
  }

  public function saturdaytournament(Request $request)
  {
    
    $posts = Tournament::paginate($this->posts_per_page);
    $duration = Duration::firstOrFail();
    $firstTournament = Tournament::firstOrFail();
    $tournaments = Tournament::all();
    $prizemoney = Prizemoney::all();
    $prize = Prize::firstOrFail();

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

    return view('/saturdaytournament', compact(
      'prizemoney',
      'firstTournament', 
      'tournaments',
      'blindParts',
      'allBlinds',
      'duration',
      'prize',
      'posts'
    ));
  }

 public function fetchNextPostsSet($page) {

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

 	public function destroy($id) {
      DB::delete('delete from manpower where id = ?',[$id]);
      
      session()->flash('status', 'Record deleted Successfully.');
      return redirect('/home');
   }


}
