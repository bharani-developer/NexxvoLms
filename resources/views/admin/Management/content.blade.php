@extends('admin.layout.master')


@section('content')

   <div class="app-content content">
       <div class="content-wrapper">
           <div class="content-header ">
               <div class="content-header-left ">
                   <div class="row breadcrumbs-top">
                       <div class="breadcrumb-wrapper col-12">
                           <ol class="breadcrumb">
                               <li class="breadcrumb-item"><a href="index.html">Home</a>
                               </li>
                               <li class="breadcrumb-item"><a href="#">Management</a>
                               </li>
                               <li class="breadcrumb-item active">Content
                               </li>
                           </ol>
                       </div>
                   </div>
                   <br />
                   <br>

               </div>
               @if($message = Session::get('success'))
               <div class="alert alert-success">

                {{ $message }}
                 
               </div>

               @endif
               @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

               <!-- Zero configuration table -->
               <section id="configuration">
                   <div class="row">
                       


                       <div class="content-header-right col-md-12 col-12">
                           <h3>Update Content</h3>
                           <br>
                           
                           <br>
                           <form class="validate1" action="{{ route('admin.content.store') }}" id="curriculum-form" method="post">
                            @csrf

                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="form-group">
                                           <label class="control-label" for="question">Facebook</label>
                                           <input type="text" class="form-control" name="facebook" id="facebook" value={{ $data->facebook ?? '' }} />
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="question">Twitter</label>
                                           <input type="text" class="form-control" name="twitter" id="twitter" value={{ $data->twitter ?? ''}} />
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="question">Linkedin</label>
                                           <input type="text" class="form-control" name="linkedin" id="linkedin" value={{ $data->linkedin ?? '' }} />
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="question">Youtube</label>
                                           <input type="text" class="form-control" name="youtube" id="youtube" value={{ $data->youtube ?? ''}} />
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="question">Instagram</label>
                                           <input type="text" class="form-control" name="instagram" id="instagram" value={{ $data->instagram ?? '' }} />
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="question">Email</label>
                                           <input type="text" class="form-control" name="email" id="email" value={{ $data->email ?? '' }} />
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="question">Phone Number</label>
                                           <input type="text" class="form-control" name="phone_number" id="phone_number" value={{ $data->phone_number ?? '' }} />
                                       </div>
                                   </div>

                               </div>

                               <button type="submit" class="btn btn-primary">Update</button>


                           </form>
                       </div>
                   </div>
               </section>
               <!--/ Zero configuration table -->



           </div>
       </div>

   </div>
   <!-- ////////////////////////////////////////////////////////////////////////////-->


   @endsection