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
                                <li class="breadcrumb-item "><a href="#">Manageent</a>
                                </li>
                                <li class="breadcrumb-item active">Team Members
                                </li>

                            </ol>
                        </div>
                    </div>
                    <br />
                    @if ($message = Session::get('success'))
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
                        <h3 class="content-header-title mb-0">Team Members</h3>
                        <br>
                    </div>
                </div>


                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-7">
                            <div class="card">
                                <h5>Team Members List</h5>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">

                                        <table id="teammember-table"
                                            class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th class="justify-content-center">Action</th>
                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="content-header-right col-md-5 col-12">
                            <h5>Add / Update Team Member</h5>
                            <br>
                            <br>
                            <form class="validate1" action="#" id="teammember-form" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="hidden" name="teammember_id" id="coursecategory_id">

                                            <label class="control-label" for="question">Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" id="name" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="question">Designation<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="designation" id="designation"
                                                required />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="question">Order<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="order" id="order" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="question">Linkedin<span
                                                    class="text-danger">*</span></label>
                                            <input type="url" class="form-control" name="linkedin" id="linkedin" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="answer">Description<span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control editable" rows="5" name="description"
                                                id="description" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <fieldset class="form-group">
                                                <div class="custom-file">
                                                    <label for="teammember_image" class="">Choose file</label>
                                                    <input name="teammember_image" type="file" class=" form-control-file" id="teammember_image">
                                                </div>
                                            </fieldset>
                                            
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
            $('#teammember-table').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                bProcessing: true,
                bServerSide: true,
                sPaginationType: "full_numbers",
                bjQueryUI: true,
                ajax: {
                    url: "{{ route('admin.teammember.index') }}",
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

            $('body').on('click', '.editteammember', function() {

                var teammember_id = $(this).data('id');
                $.get("{{ route('admin.teammember.index') }}" + '/' + teammember_id + '/edit', function(data) {


                    $('#teammember_id').val(data.id);
                    $('#name').val(data.name);
                    $('#designation').val(data.designation);
                    $('#order').val(data.order);
                    $('#linkedin').val(data.linkedin);
                    $('#description').val(data.description);
                    $('#teammember_image').val(data.image);

                })
            })

            $('body').on('click', '.deleteteammember', function() {

                var teammemmber_id = $(this).data("id");
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('admin.teammember.store') }}" + '/' + teammemmber_id,
                    success: function(data) {

                        $('#teammember-table').DataTable().ajax.reload();
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
            $.ajax({
                data: $('#teammember-form').serialize(),
                url: "{{ route('admin.teammember.store') }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {

                    $('#teammember-form').trigger("reset");
                    $('#teammember-table').DataTable().ajax.reload();

                },
                error: function(data) {
                    console.log('Error:', data);
                    $('#submit').html('Save Changes');
                }
            });
        });

    </script>

@endsection
