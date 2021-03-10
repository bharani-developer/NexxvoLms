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
                        <li class="breadcrumb-item active">Course Intro Description
                        </li>

                     </ol>
                  </div>
               </div>
               <br />
               <br>
               <div>
                  <h3 class="content-header-title mb-0">Course Intro Description</h3>
                  <br>
               </div>
            </div>


            <!-- Zero configuration table -->
            <section id="configuration">
               <div class="row">
                  <div class="col-7">
                     <div class="card">
                        <h5>Course Intro List</h5>
                        <div class="card-content collapse show">
                           <div class="card-body card-dashboard">

                              <table id="course-intro-table"class="table table-striped table-bordered zero-configuration">
                                 <thead>
                                    <tr>
                                       <th>S.No</th>
                                       <th>Heading</th>
                                       <th class="justify-content-center">Action</th>
                                    </tr>
                                 </thead>
                               
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>


                  <div class="content-header-right col-md-5 col-12">
                     <h5>Add / Update Course Intro</h5>
                     <br>
                     <br>
                     <form class="validate1" action="#" id="curriculum-form" method="POST">

                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label class="control-label" for="question">Heading<span class="text-danger">*</span></label>
                                 <input type="text" class="form-control" name="question" id="question" required />
                              </div>
                              <div class="form-group">
                                 <label class="control-label" for="answer">Description<span class="text-danger">*</span></label>
                                 <textarea class="form-control summernote" rows="5" name="answer" id="answer" required></textarea>
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
               $('#ccourse-intro-table').DataTable({
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
                       url: "{{ route('admin.courseintrodesc.index') }}",
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
                   $.get("{{ route('admin.coursecurriculam.index') }}" + '/' + course_curriculam_id +
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
                           $('#curriculam-table').DataTable().ajax.reload();
                       },
                       error: function(data) {
                           console.log('Error:', data);
                       }
                   });
               });
           });
   
   
   
           $('#curriculum-form').on('submit', function(event) {
               event.preventDefault();
   
               let course_id = $('#course_id').val();
               let course_curriculam_id = $('#course_curriculam_id').val();
               let heading = $('#heading').val();
               let subject = $('#subject').val();
               let description = $('#description').val();
               console.log(course_id);
               $.ajax({
                   url: "{{ route('admin.coursecurriculam.store') }}",
                   type: "POST",
                   data: {
                       "_token": "{{ csrf_token() }}",
                       course_id: course_id,
                       course_curriculum_id: course_curriculam_id,
                       heading: heading,
                       subject: subject,
                       description: description,
                   },
                   success: function(response) {
                       console.log(response);
                   },
                   error: function(data) {
                       console.log('Error:', data);
                       $('#curriculam-table').DataTable().ajax.reload();
                       $('#heading').val('');
                       $('#subject').val('');
                       $('#description').val('');
   
                   }
               });
           });
   
       </script>
   
   @endsection
   
   <!-- ////////////////////////////////////////////////////////////////////////////-->
   