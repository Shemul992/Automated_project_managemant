@extends('main') {{-- extends the structure of the main.blade.php--}}

@section('title', 'Profile Update')

@section('content')
     <div class = "row">

       <div class= "col-8 offset-2">

          <h2 class="text-center"> Update Info</h2> <br>

          <form method="POST" action="/profiles/{{ Auth::user()->id }}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                  
                 <div class = "form-group"> 
                      <label for="first_name">  <span class="font-weight-bold">First Name </span> </label>
                      <input class = "form-control" type="text" name = "first_name" value= "{{ Auth::user()->first_name }} "> 
                  </div>
                  
                  <div class = "form-group"> 
                      <label for="last_name">  <span class="font-weight-bold">Last Name </span> </label>
                      <input class = "form-control" type="text" name = "first_name" value= "{{ Auth::user()->last_name }} "> 
                  </div>

                  <div class = "form-group"> 
                      <label for="student_id">  <span class="font-weight-bold">{{ Auth::user()->role == 1 ? 'Teacher ' : 'Student '}} ID  </span></label>
                      <input class = "form-control" type="text" name = "stackholder_id" value= "{{ Auth::user()->stackholder_id }} "> 
                  </div>

                  <div class = "form-group"> 
                      <label for="skills">  <span class="font-weight-bold">Skills </span></label>
                      <input class = "form-control" type="text" name = "skills" value= "{{ Auth::user()->skills }} "> 
                  </div>

                  <button class = "btn btn-info mt-3 btn-block" type="submit" >Update</button>

            </form>



       </div> {{-- col --}}

     </div> {{-- row --}}     


@endsection
  
