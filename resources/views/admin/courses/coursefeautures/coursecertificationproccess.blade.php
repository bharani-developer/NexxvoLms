@extends('admin.layout.master')
@section('content')

<div class="app-content content">
    <div class="content-wrapper">
       <div class="content-header ">
          <div class="content-header-left ">
             <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper">
                   <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a>
                      </li>
                      <li class="breadcrumb-item "><a href="#">Courses</a>
                      </li>
                      <li class="breadcrumb-item active">Course Certification
                      </li>

                   </ol>
                </div>
             </div>
             <br />
             <br>
             <div>
                <h3 class="content-header-title mb-0">Course Certification</h3>
                <br>
             </div>
          </div>


          <!-- Zero configuration table -->
          <section id="configuration">
             <div class="row">
                <div class="col-7">
                   <div class="card">
                   <h5>Certification List</h5>
                      <div class="card-content collapse show">
                         <div class="card-body card-dashboard">

                            <table id="course-certification-process-table" class="table table-striped table-bordered zero-configuration">
                               <thead>
                                  <tr>
                                     <th>S.No</th>
                                     <th>Heading</th>
                                     <th>Description</th>
                                     <th>Position</th>
                                     <th class="justify-content-center">Action</th>
                                  </tr>
                               </thead>
             
                              
                            </table>
                         </div>
                      </div>
                   </div>
                </div>


                <div class="content-header-right col-md-5 col-12">
                   <h5>Add / Update Certification Process</h5>
<br>
<br>
                   <form class="validate1"  id="course-certification-process-form" method="POST">
                      
                      <div class="row">
                         <div class="col-md-12">
                            <div class="form-group">
                              <input type="hidden" value="{{ $id ?? '' }}" name="course_id" id="course_id">
                              <input type="hidden" name="course_certification_process_id" id="course_certification_process_id">

                               <label class="control-label" for="question">Heading</font></label>
                               <input type="text" class="form-control" name="heading" id="heading" required />
                            </div>
                            <div class="form-group">
                               <label class="control-label" for="answer">Description<font class="text-danger">*</font></label>
                               <textarea class="form-control summernote" rows="5" name="description" id="description" required></textarea>
                            </div>
                            <div class="form-group">
                               <label class="control-label" for="question">Position</font></label>
                               <input type="text" class="form-control" name="position" id="position" required />
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
 @section('script')
     <script type="text/javascript">
         $(document).ready(function() {
             var id = $('#course_id').val();
             console.log(id);
             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });
             $('#course-certification-process-table').DataTable({
                 "order": [
                     [0, "desc"]
                 ],
 
                 destroy: true,
                 processing: true,
                 serverSide: true,
                 bProcessing: true,
                 bServerSide: true,
                 sPaginationType: "full_numbers",
                 bjQueryUI: true,
                 ajax: {
                     url: "{{ route('admin.coursecertificationprocess.index') }}",
                     data: {
                         "id": id
                     },
 
                 },
                 columns: [{
                         data: 'id',
                         name: 'id'
                     },
                     {
                         data: 'heading',
                         name: 'heading'
                     },
                     {
                         data: 'description',
                         name: 'description'
                     },
                     {
                         data: 'position',
                         name: 'position'
                     },
                     {
                         data: 'action',
                         name: 'action',
                         orderable: false,
                         searchable: false,
 
                     },
 
                 ]
             });
 
             $('body').on('click', '.editCourseCurriculam', function() {
                 alert('hi');
                 var course_curriculam_id = $(this).data('id');
                 $.get("{{ route('admin.coursecertificationprocess.index') }}" + '/' + course_curriculam_id +
                     '/edit',
                     function(data) {
 
 
                         $('#course_curriculam_id').val(data.id);
                         $('#course_id').val(data.course_id);
                         $('#heading').val(data.heading);
                         $('#description').val(data.description);
 
                     })
 
             })
 
             $('body').on('click', '.deleteCourseCurriculam', function() {
 
                 var course_id = $(this).data("id");
                 $.ajax({
                     type: "DELETE",
                     url: "{{ route('admin.coursecurriculam.store') }}" + '/' + course_id,
                     success: function(data) {
                         $('#course-certification-process-table').DataTable().ajax.reload();
                     },
                     error: function(data) {
                         console.log('Error:', data);
                     }
                 });
             });
         });
 
 
 
         $('#course-certification-process-form').on('submit', function(event) {
             event.preventDefault();
 
             let course_id = $('#course_id').val();
             let course_certification_process_id = $('#course_certification_process_id').val();
             let heading = $('#heading').val();
             let position = $('#position').val();
             let description = $('#description').val();
             console.log(course_id);
             $.ajax({
                 url: "{{ route('admin.coursecertificationprocess.store') }}",
                 type: "POST",
                 data: {
                     "_token": "{{ csrf_token() }}",
                     course_id: course_id,
                     course_certification_process_id: course_certification_process_id,
                     heading: heading,
                     
                     description: description,
                     position: position,
                 },
                 success: function(response) {
                   $('#course-certification-process-table').DataTable().ajax.reload();
                     $('#heading').val('');
                     $('#position').val('');
                     $('#description').val('');
                 },
                 error: function(data) {
                     console.log('Error:', data);
                     
 
                 }
             });
         });
 
     </script>
 
 @endsection
 
 <!-- ////////////////////////////////////////////////////////////////////////////-->
 