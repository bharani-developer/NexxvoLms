@extends('admin.layout.master')


@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Courses</a>
                                </li>
                                <li class="breadcrumb-item active">Course
                                </li>
                            </ol>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h3 class="content-header-title mb-0">Course Name</h3>
                </div>
                <div class="content-header-right col-md-6 col-12">

                </div>
            </div>
            <div class="btn-group float-md-right row btn-group " role="group"
                aria-label="Button group with nested dropdown">

                <button id="coursecurriculam" type="button" data-id={{ $id }}
                    class="btn btn-primary btn-min-width mr-1 mb-1 square"><i class="fa fa-plus"></i>Curriculum</button>
                <button id="courseintrodesc" type="button" data-id={{ $id }}
                    class="btn btn-primary btn-min-width mr-1 mb-1 square"><i class="fa fa-plus"></i> Course Intro
                    Description</button>
                <button id="coursefaq" type="button" data-id={{ $id }} class="btn btn-primary btn-min-width mr-1 mb-1 square"><i
                        class="fa fa-plus"></i> Course FAQ</button>
                <a  href="coursebranch.php"> <button type="button"
                        class="btn btn-primary btn-min-width mr-1 mb-1 square"><i class="fa fa-plus"></i>
                        Branch</button></a>
                <a href="coursegallery.php"><button type="button" class="btn btn-primary btn-min-width mr-1 mb-1 square"><i
                            class="fa fa-plus"></i> Gallery</button></a>
                <button type="button" id="coursecertificationprocess" data-id={{ $id }}
                        class="btn btn-primary btn-min-width mr-1 mb-1 square"><i class="fa fa-plus"></i> Certification
                        Proccess</button></a>
                <a href="editcourse.php"> <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1 square"><i
                            class="fa fa-edit"></i> Edit</button></a>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content collapse show">
                                <div class="card-body">



                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr class="border-solid">
                                                    <th>Name</th>
                                                    <td>{{ $course->course_tittle }}</td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Short Description
                                                    </th>
                                                    <td>{{ $course->course_short_description }}

                                                    </td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Brochure</th>
                                                    <td>{{ $course->course_file }}</td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Video</th>
                                                    <td>{{ $course->course_video_url }}</td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Label 1 </th>
                                                    <td>Course Name</td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Label 2 </th>
                                                    <td>Course Name</td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Label 3 </th>
                                                    <td>Course Name</td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Label 4 </th>
                                                    <td>Course Name</td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Meta Title </th>
                                                    <td>{{ $course->course_short_description }} </td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Meta Description </th>
                                                    <td>{{ $course->course_short_description }}
                                                    </td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Meta Keywords </th>
                                                    <td>{{ $course->course_short_description }}
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
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

                                    $('body').on('click', '#coursecurriculam', function() {

                                        var course_id = $(this).data('id');
                                        if (course_id) {
                                            window.location = 'coursecurriculam' + '/' + course_id;
                                        }

                                    })
                                    $('body').on('click', '#courseintrodesc', function() {

                                        var course_id = $(this).data('id');
                                        if (course_id) {
                                            window.location = 'courseintrodesc' + '/' + course_id;
                                        }

                                    })

                                    $('body').on('click', '#coursefaq', function() {
alert('hi');
                                        var course_id = $(this).data('id');
                                        if (course_id) {
                                            window.location = 'coursefaq' + '/' + course_id;
                                        }

                                    })
                                    $('body').on('click', '#coursecertificationprocess', function() {
alert('hi');
                                        var course_id = $(this).data('id');
                                        if (course_id) {
                                            window.location = 'coursecertificationprocess' + '/' + course_id;
                                        }

                                    })
                                });

                            </script>

                        @endsection
