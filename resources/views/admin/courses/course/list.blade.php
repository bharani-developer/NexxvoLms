@extends('admin.layout.master')


@section('content')

    <!-------- fixed-side end ---------------->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Courses</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                    <br />
                    <br>

                    <h3 class="content-header-title mb-0">Courses</h3>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right">
                        <div class="btn-group" role="group">
                            <a href="{{ route('admin.course.create') }}">
                                <button class="btn btn-outline-primary" id="btnGroupDrop1" type="button"
                                    aria-haspopup="true" aria-expanded="false"><i class="ft-plus icon-left"></i> Add
                                    Course</button></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-content collapse show">
                                    <div style="width:100%;" class="card-body card-dashboard">

                                        <table id="course-table"
                                            class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Course Name</th>
                                                    <th>Short Name</th>
                                                    <th class="justify-content-center">Action</th>
                                                </tr>
                                            </thead>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->

            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var course_id = $(this).data('id');
            $('#course-table').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                bProcessing: true,
                bServerSide: true,
                sPaginationType: "full_numbers",
                bjQueryUI: true,
                ajax: {
                    url: "{{ route('admin.course.index') }}",
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'course_name',
                        name: 'course_name'
                    },
                    {
                        data: 'course_shortname',
                        name: 'course_shortname'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,

                    },

                ]
            });
            $('body').on('click', '.viewCourse', function() {
                var course_id = $(this).data('id');
                if (course_id) {
                    window.location = 'coursefeature' + '/' + course_id;
                }

            })



        });

    </script>

@endsection

<!-- ////////////////////////////////////////////////////////////////////////////-->
