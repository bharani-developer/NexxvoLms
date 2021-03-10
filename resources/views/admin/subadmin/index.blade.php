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

                                <li class="breadcrumb-item active">Sub Admin
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
                        <h3 class="content-header-title mb-0">Sub Admin</h3>
                        <br>
                    </div>
                </div>


                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-7">
                            <div class="card">
                                <h5>Sub Admin List</h5>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">

                                        <table id="subadmin-table"
                                            class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Role</th>

                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="content-header-right col-md-5 col-12">
                            <h5>Add Sub Admin</h5>
                            <br>
                            <br>
                            <form class="validate1" action="{{ route('admin.subadmin.store') }}" id="subadmin-form"
                                method="POST">
                                {{ csrf_field() }}
                                <div class="row">


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="hidden" name="user_id" id="user_id">

                                            <label class="control-label" for="email"> Email<font class="text-danger">*</font></label>
                                            <input class="form-control" name="email" type="email" id="email"placeholder="xyz@example.com" required>
                                            <div class="form-control-position pl-1"><i class="fa fa-envelope-o"></i></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="name"> Name<font class="text-danger">*</font></label>
                                            <input type="text" class="form-control" name="name" id="name" required />
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="password">Password<font class="text-danger">*</font></label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                required />
                                        </div>
                                        <div class="form-group">
                                            <fieldset class="form-group">
                                                <label for="role">Role<span class="text-danger">*</span></label>
                                                <select class="custom-select block" id="role" name="role">
                                                    @if ($roles)
                                                        @foreach ($roles as $role)
                                                            <option>{{ $role->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

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
            $('#subadmin-table').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                bProcessing: true,
                bServerSide: true,
                sPaginationType: "full_numbers",
                bjQueryUI: true,
                ajax: {
                    url: "{{ route('admin.subadmin.index') }}",
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

            $('body').on('click', '.editsubadmin', function() {
                var user_id = $(this).data('id');

                $.get("{{ route('admin.subadmin.index') }}" + '/' + user_id + '/edit', function(data) {


                    $('#user_id').val(data.id);
                    $('#email').val(data.email);
                    $('#name').val(data.name);

                    $('#password').val(data.password);

                    $('#role').val(data.role);
                })
            })

            $('body').on('click', '.deletesubadmin', function() {

                var course_id = $(this).data("id");
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('admin.subadmin.store') }}" + '/' + course_id,
                    success: function(data) {

                        $('#subadmin-table').DataTable().ajax.reload();
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            });
        });



        // $('#addsubadmin').click(function(e) {
        //     e.preventDefault();
        //     $(this).html('Sending..');

        //     $.ajax({
        //         data: $('#subadmin-form').serialize(),
        //         url: "{{ route('admin.subadmin.store') }}",
        //         type: "POST",
        //         dataType: 'json',
        //         success: function(data) {

        //             $('#subadmin-form').trigger("reset");

        //             $('#subadmin-table').DataTable().ajax.reload();

        //         },
        //         error: function(data) {
        //             console.log('Error:', data);
        //             $('#subadmin-form').html('Save Changes');
        //         }
        //     });
        // });

    </script>

@endsection

<!-- ////////////////////////////////////////////////////////////////////////////-->
