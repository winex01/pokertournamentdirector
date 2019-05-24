@extends('layouts.master')


@section('contentheader')


  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Upload Manpower List
            <small>Preview</small>
          </h1>


       <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Upload Manpower List</li>
          </ol>


   
        </section>

@endsection



@section('content')
 
 
        
<?php
function current_page($uri = "/") {
    return strstr(request()->path(), $uri);
}
?>

 
        <div class="col-sm-12">
             <ul class="nav nav-tabs">
                <li><a href="addmanpower">Add New Manpower</a></li>
                <li class="active"><a href="active">Upload Manpower List</a></li>
              </ul><hr>



      <div class="panel-body">

 
        <h3>Import File Form:</h3>
        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" action="{{ URL::to('/doimport') }}" class="form-horizontal" method="post" enctype="multipart/form-data">


          <input type="file" name="file" />
          {{ csrf_field() }}
          <br/>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button name="Import" class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>

        </form>
        <br/>



            
              </div>




 
           </div>
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
  
                                                      
 
@endsection






<style>

#uprall {
    text-transform:uppercase;
}

#upr {
    text-transform:capitalize;
}
</style>

