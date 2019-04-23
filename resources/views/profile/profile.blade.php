@extends('main') {{-- extends the structure of the main.blade.php--}}

@section('title', 'Profile ')

@section('content')
     <div class = "row">

       <div class= "col-8 offset-2">
          <div class="row">
            <div class ="col offset-4">
              @if (Auth::user()->id == $user['id']) 
                <h2> My Profile</h2>
              @else
                <h2> Profile Of {{ $user['id'] }} </h2>
              @endif 
              <hr>
            </div>
          </div>
          <div class="row">
              <div class="col-4">
              </div> {{-- col--}}
              
              {{-- for info show--}}
              <div class="col-8">
                <p> <span class="font-weight-bold"> Name: </span> {{ $user['first_name']. " "}} {{ $user['last_name'] }} </p>
                <p> <span class="font-weight-bold"> Email: </span> {{ $user['email'] }} </p>
                <p> <span class="font-weight-bold"> 

                  {{ $user['role'] == 1 ? 'Teacher ' : 'Student '}}
                    ID: </span> {{ is_null($user['stackholder_id']) ? 'not submitted' : $user['stackholder_id'] }} <p>
                  
              

                <p> <span class="font-weight-bold"> Skills: </span> {{$user['skills']}} </p>

                <p> <span class="font-weight-bold"> Status: </span>  <span class="text-danger font-weight-bold"> {{ $user['role'] == 1 ? 'Teacher ' : 'Student '}}  
                 </span>
                </p>

                @if(Auth::user()->id != $user['id'])
                  <a class="btn btn-success btn-lg text-light"> Chat with {{ $user['first_name'] }} </a>
                  <br> <br>
                @endif


                {{--@if(Auth::user()->id == $user['id'])
                  <a  href ="/profiles/{{ Auth::user()->id }}/edit" class="btn btn-primary text-light"> Update profile</a>  <a class="btn btn-info text-light"> Change password</a> 
                @endif --}}

              </div> {{--col --}}

          </div> {{-- row (image show)--}}



       </div> {{-- col --}}

     </div> {{-- row --}}     


@endsection
  
