@extends('admin.layout.master')
@section('content')
   <!-------- fixed-side end ---------------->
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
                <li class="breadcrumb-item active">Enrollment
                </li>
              </ol>
            </div>
          </div>
          <br />
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

          <br>
          <div>
            <h3 class="content-header-title mb-0">Enrollment</h3>
            <br>
          </div>
        </div>


        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
         


            <div class="content-header-right col-md-12 col-12">
              <h5>Update Enrollment</h5>
              <br>
              <br>
              <form class="validate1" action="#" id="curriculum-form" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label" for="question">label 1 (Course)<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="label_1_course" id="label_1_course" value="{{ $data->label_1_course }}" required />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="question">label 2 (Fee)<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="label_2_fee" id="label_2_fee" value="{{ $data->label_2_fee }}" required />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="question">label 3 (Date)<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="label_3_date" id="label_3_date" value="{{ $data->label_3_date }}" required />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="question">label 4 (Batch ID)<<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="label_4_batch_id" id="label_4_batch_id"  value="{{ $data->label_4_batch_id }}" required />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="question">label 5 (Trainer)<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="label_5_trainer" id="label_5_trainer" value="{{ $data->label_5_trainer }}" required />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="question">label 6 (Duration)<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="label_6_duration" id="label_6_duration"  value="{{ $data->label_6_duration }}"required />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="question">label 7 (Session)<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="label_7_session" id="label_7_session"  value="{{ $data->label_7_session }}" required />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="question">label 8 (Available Seats)<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="label_8_available_seats" id="label_8_available_seats" value="{{ $data->label_8_available_seats }}" required />
                    </div>
  
                    <div class="form-group">
                      <label class="control-label" for="question">label 9 (Venue)<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="label_9_venue" id="label_9_venue" value="{{ $data->label_9_venue }}" required />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="question">label 10 (Timings)<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="label_10_timings" id="label_10_timings" value="{{ $data->label_11_days_count }}" required />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="question">label 11 (Days Count)<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="label_11_days_count" id="label_11_days_count"  value="{{ $data->label_11_days_count }}"required />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="answer">Description<span class="text-danger"><span class="text-danger">*</span></label>
                      <textarea class="form-control editable" rows="5" name="description" id="description" value="{{ $data->description }}" required></textarea>
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