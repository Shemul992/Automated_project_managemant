@extends('main') {{-- extends the structure of the main.blade.php--}}

@section('title', 'Individual student idea')

@section('content')
     <div class = "row">

       <div class= "col-8 offset-2">

            <h3 class= "text-center" style ="margin-bottom:10px">  Electronics and Communication Projects</h3> {{-- job title php --}}
            

            <div class="row">
              <div class="col-2">
                <span class="font-weight-bold text-center"> Description</span>
              </div> 
              <div class="col-8">
                <p class="lead ">  Nevonprojects help you explore this field with innovative electronics project kits. Get electronics mini projects kits with guidance and learning tutorials so that you not only use the project but also understand it.</p>

              </div>
            </div> <!-- row-->


            <div class="row">
              <div class="col-2">
                <span class="font-weight-bold text-center"> Skills</span>
              </div> 
              <div class="col-8">
                <p class="lead "> JVM, Java </p>
              </div>
            </div> <!-- row-->

            

             <div class="row">
              <div class="col-2">
                <span class="font-weight-bold text-center"> Posted By</span>
              </div> 
              <div class="col-8">
                <p class="lead "> 
                  <a href= "" class="text-muted text-info"> humayra </a>
                </p>

              </div>
            </div> <!-- row-->

                <!-- apply for a project (modal with form) -->
                
            <div class="form-group">
              <form method="POST" action="">
                
                {{ method_field('DELETE') }}
                {{ csrf_field() }}

                <button class="btn btn-info text-light btn-lg" type="submit"> Accept this project idea</button>
                
              </form>
            </div>
      
                  
            
            {{--DELETE a project by its owner--}}
            <div class="form-group">
              <form method="POST" action="">
                
                {{ method_field('DELETE') }}
                {{ csrf_field() }}

                <button class="btn btn-danger text-light btn-lg" type="submit"> Delete this project idea</button>
                
              </form>
            </div>

            

              
            
            



      </div> <!-- col -->

    </div> <!-- row-->


@endsection
  
