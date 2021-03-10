@extends('admin.layout.master')
@section('content')
   <!-------- fixed-side end ---------------->
   <div class="app-content content">
    <div class="content-wrapper">
       <div class="content-header ">
          <div class="content-header-left ">
             <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper">
                   <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a>
                      </li>
                      <li class="breadcrumb-item "><a href="#">Management</a>
                      </li>
                      <li class="breadcrumb-item active">Venues
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
                <h3 class="content-header-title mb-0">Venues</h3>
                <br>
             </div>
          </div>


          <!-- Zero configuration table -->
          <section id="configuration">
             <div class="row">
                <div class="col-7">
                   <div class="card">
                      <h5>Venues List</h5>
                      <div class="card-content collapse show">
                         <div class="card-body card-dashboard">

                            <table id="venue-table" class="table table-striped table-bordered zero-configuration">
                               <thead>
                                  <tr>
                                     <th>S.No</th>
                                     <th>Address</th>
                                     <th class="justify-content-center">Action</th>
                                  </tr>
                               </thead>
                             
                            </table>
                         </div>
                      </div>
                   </div>
                </div>


                <div class="content-header-right col-md-5 col-12">
                   <h5>Add / Update Venues</h5>
                   <br>
                   <br>
                   <form class="validate1" action="#" id="curriculum-form" method="POST">
                     {{ csrf_field() }}
                      <div class="row">
                         <div class="col-md-12">

                            <div class="form-group">
                              <input type="hidden" name="venue_id" id="venue_id">
                               <label class="control-label" for="answer">Address<font class="text-danger">*</font></label>
                               <textarea class="form-control editable" rows="5" name="address" id="address" required></textarea>
                            </div>
                         </div>

                      </div>
                    
                         <button type="submit" class="btn btn-primary">Submit</button>
                  

                   </form>
                </div>
             </div>
          </section>
          <!--/ Zero configuration table -->



       </div>
    </div>

 </div>
@endsection
 <!-- ////////////////////////////////////////////////////////////////////////////-->

 @section('script')
 <script type="text/javascript">
     $(document).ready(function() {
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         $('#venue-table').DataTable({
             destroy: true,
             processing: true,
             serverSide: true,
             bProcessing: true,
             bServerSide: true,
             sPaginationType: "full_numbers",
             bjQueryUI: true,
             ajax: {
                 url: "{{ route('admin.venue.index') }}",
             },
             columns: [{
                     data: 'id',
                     name: 'id'
                 },
                 {
                     data: 'address',
                     name: 'address'
                 },
                 {
                     data: 'action',
                     name: 'action',
                     orderable: false,
                     searchable: false,

                 },

             ]
         });

         $('body').on('click', '.editvenue', function() {
             var venue_id = $(this).data('id');
             $.get("{{ route('admin.venue.index') }}" + '/' + venue_id + '/edit', function(data) {


                 $('#venue_id').val(data.id);
                 $('#address').val(data.address);
             
             })
         })

         $('body').on('click', '.deletevenue', function() {

             var venue_id = $(this).data("id");
             $.ajax({
                 type: "DELETE",
                 url: "{{ route('admin.venue.store') }}" + '/' + venue_id,
                 success: function(data) {

                     $('#venue-table').DataTable().ajax.reload();
                 },
                 error: function(data) {
                     console.log('Error:', data);
                 }
             });
         });
     });



     $('#submit').click(function(e) {
         e.preventDefault();
         $(this).html('Sending..');
         console.log($('#category-form').serialize());
         $.ajax({
             data: $('#category-form').serialize(),
             url: "{{ route('admin.venue.store') }}",
             type: "POST",
             dataType: 'json',
             success: function(data) {

                 $('#category-form').trigger("reset");

                 $('#venue-table').DataTable().ajax.reload();

             },
             error: function(data) {
                 console.log('Error:', data);
                 $('#submit').html('Save Changes');
             }
         });
     });

 </script>

@endsection
