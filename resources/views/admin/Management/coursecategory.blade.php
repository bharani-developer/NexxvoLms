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
                                <li class="breadcrumb-item "><a href="#">Management</a>
                                </li>
                                <li class="breadcrumb-item active">Course Category
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
                        <h3 class="content-header-title mb-0">Course Category</h3>
                        <br>
                    </div>
                </div>


                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-7">
                            <div class="card">
                                <h5>Course Category List</h5>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">

                                        <table id="coursecategory-table"
                                            class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Category</th>
                                                    <th class="justify-content-center">Action</th>
                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

       
      
                        <div class="content-header-right col-md-5 col-12">
                            <h5>Add Course Category</h5>
                            <br>
                            <br>
                            <form class="validate1" name="category-form" id="category-form" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="hidden" name="coursecategory_id" id="coursecategory_id">
                                            <label class="control-label" for="question">Name<span
                                                    class="text-danger">*</span></label>
                                            <input name="name" type="text" class="form-control" name="question" id="name"
                                                required />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="question">Slug<span
                                                    class="text-danger">*</span></label>
                                            <input name="slug" type="text" class="form-control" name="question" id="slug"
                                                required />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="answer">Short Description<span
                                                    class="text-danger">*</span></label>
                                            <textarea name="short_description" class="form-control editable" rows="5"
                                                id="short_description" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="answer">Summary<span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control editable" rows="5" name="summary" id="summary"
                                                required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="question">Key Feautures<span
                                                    class="text-danger">*</span></label>
                                            <input name="key_feautures" type="text" class="form-control" name="question"
                                                id="key_feautures" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="question">Meta Title<span
                                                    class="text-danger">*</span></label>
                                            <input name="meta_tittle" type="text" class="form-control" name="question"
                                                id="meta_tittle" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="answer">Meta Description<span
                                                    class="text-danger">*</span></label>
                                            <textarea name="meta_description" class="form-control editable" rows="5"
                                                id="meta_description" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="answer">Meta Keywords<span
                                                    class="text-danger">*</span></label>
                                            <textarea name="meta_keywords" id="meta_keywords" class="form-control editable"
                                                rows="5" name="answer" id="answer" required></textarea>
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>


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
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#coursecategory-table').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                bProcessing: true,
                bServerSide: true,
                sPaginationType: "full_numbers",
                bjQueryUI: true,
                ajax: {
                    url: "{{ route('admin.coursecategory.index') }}",
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,

                    },

                ]
            });

            $('body').on('click', '.editCourseCategory', function() {
                var course_id = $(this).data('id');
                $.get("{{ route('admin.coursecategory.index') }}" + '/' + course_id + '/edit', function(data) {


                    $('#coursecategory_id').val(data.id);
                    $('#name').val(data.name);
                    $('#slug').val(data.slug);
                    $('#short_description').val(data.short_description);
                    $('#summary').val(data.summary);
                    $('#key_feautures').val(data.key_feautures);
                    $('#meta_tittle').val(data.meta_tittle);
                    $('#meta_description').val(data.meta_description);
                    $('#meta_keywords').val(data.meta_keywords);
                })
            })

            $('body').on('click', '.deleteCourseCategory', function() {

                var course_id = $(this).data("id");
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('admin.coursecategory.store') }}" + '/' + course_id,
                    success: function(data) {

                        $('#coursecategory-table').DataTable().ajax.reload();
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
                url: "{{ route('admin.coursecategory.store') }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {

                    $('#category-form').trigger("reset");

                    $('#coursecategory-table').DataTable().ajax.reload();

                },
                error: function(data) {
                    console.log('Error:', data);
                    $('#submit').html('Save Changes');
                }
            });
        });

    </script>

@endsection

<!-- ////////////////////////////////////////////////////////////////////////////-->
