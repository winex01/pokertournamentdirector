<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
  protected $table = "tournament";
  $result = mysql_query("SELECT * FROM $tournament");          //query
  $array = mysql_fetch_row($result);                          //fetch result    

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  echo json_encode($array);


}
