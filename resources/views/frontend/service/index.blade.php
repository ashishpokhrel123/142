@extends('frontend.layouts.app')

@section('title') Our Service @endsection

@section('content')

    <!-- nav bottom-->
    <div class="container-fluid text-center nav_bottom text-white">
        <div class="row">
            <div class="col-sm-12">
                <h4>OUR SERVICE</h4>
            </div>
        </div>
    </div>

<div class="wrapper">

<!--main content-->
    <div class="container">      
    
     {!!  $tree !!}

     
</div> 

</div>

@endsection