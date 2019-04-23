@extends('main') {{-- extends the structure of the main.blade.php--}}

@section('title', 'All Notifications')

@section('content')
     <div class = "row">

       <div class= "col-8 offset-2">

            <h1 class= "text-center"> Notifications</h1>

            {{-- notification 1--}}

            <div class = "card border-success"> 

              <div class = "card-body"> 
                  <p> Congratz!! You are assigned for this job. </p>
                  <p> Check your   <span class="text-success"> assigned project list </span> and your email  </p>
                  <form>
                      <button class="btn btn-danger"> Remove</button>
                  </form>
              </div>
            </div>
            <br>

            {{-- notification 2--}}

            <div class = "card border-success"> 

              <div class = "card-body"> 
                  <p> You are selected for the  interview </p>
                  <p> Check the <span class="text-success"> project post </span> and your email  </p>
                  <form>
                      <button class="btn btn-danger"> Remove</button>
                  </form>
              </div>
            </div>
            <br>

            {{-- notification 3--}}


            <div class = "card border-warning"> 

              <div class = "card-body"> 
                  <p> <span class=""> ashik53 </span> is applied for a project</p>
                  <p> Check the <span class="text-success"> project post </span> </p>
                  <form>
                      <button class="btn btn-danger"> Remove</button>
                  </form>
              </div>
            </div>

            <div class = "card border-warning"> 

              <div class = "card-body"> 
                  <p> A new project is on live</p>
                  <p> Check the <span class="text-success"> post </span> and apply</p>
                  <form>
                      <button class="btn btn-danger"> Remove</button>
                  </form>
              </div>
            </div>


              

      </div> <!-- col -->

    </div> <!-- row-->


@endsection
  
