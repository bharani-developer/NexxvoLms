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
                                <li class="breadcrumb-item"><a href="index.html">Courses</a>
                                </li>

                                <li class="breadcrumb-item active">Create Courses
                                </li>
                            </ol>
                        </div>
                    </div>
                    </<br>
                    
                    </<br>
                    <h3 class="content-header-title mb-0"></h3>
                </div>
            </div>
            <div class="container">
                <div class="content-body">
                    <!-- Basic Elements start -->
                    <section class="basic-elements">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Create Courses</h4>
                                    </div>
                                    <div class="card-content">
                                        <form class="validate-form" method="POST"
                                            action="{{ route('admin.course.store') }}" data-ajax='false'
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Course Title<span
                                                                    class="text-danger">*</span></label>
                                                            <input name="course_tittle" type="text" class="form-control"
                                                                id="basicInput">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Course Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input name="course_name" type="text" class="form-control"
                                                                id="basicInput">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="customSelect">Course Category<span
                                                                    class="text-danger">*</span></label>
                                                            <select name="course_category_id" class="custom-select block"
                                                                id="customSelect">
                                                                <option selected>Open this for Categories</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Short Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input name="course_shortname" type="text" class="form-control"
                                                                id="basicInput">
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Video URL<span
                                                                    class="text-danger">*</span></label>
                                                            <input name="course_video_url" type="text" class="form-control"
                                                                id="basicInput">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="course_logo">Course Logo<span
                                                                    class="text-danger">*</span></label>


                                                            <input name="course_logo" type="file" class=" form-control-file"
                                                                id="course_logo">


                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Year of Expirenced Trainers<span
                                                                    class="text-danger">*</span></label>
                                                            <input name="course_trainer_experience" type="text"
                                                                class="form-control" id="basicInput">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Professional Enrolled<span
                                                                    class="text-danger">*</span></label>
                                                            <input name="course_professional_enrolled" type="text"
                                                                class="form-control" id="basicInput">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Ratings<span
                                                                    class="text-danger">*</span></label>
                                                            <input name="course_rating" type="text" class="form-control"
                                                                id="basicInput">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label>Short Description<span
                                                                    class="text-danger">*</span></label>
                                                            <div class="form-group">
                                                                <textarea name="course_short_description" class='summernote'
                                                                    id='summernote' rows='5' cols="100"></textarea>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Delivered By<span
                                                                    class="text-danger">*</span></label>
                                                            <input name="course_delivered_by" type="text"
                                                                class="form-control" id="basicInput">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Delivered By Text<span
                                                                    class="text-danger">*</span></label>
                                                            <input name="course_delivered_by_text" type="text"
                                                                class="form-control" id="basicInput">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="course_intro_logo_1">Intro Logo 1<span
                                                                    class="text-danger">*</span></label>

                                                            <input name="course_intro_logo_1" type="file"
                                                                class=" form-control-file" id="course_intro_logo_1">

                                                    </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="course_intro_logo_2">Intro Logo 2<span
                                                                class="text-danger">*</span></label>

                                                        <input name="course_intro_logo_2" type="file"
                                                            class=" form-control-file" id="course_intro_logo_2">


                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Summary Title<span
                                                                class="text-danger">*</span></label>
                                                        <input name="course_summary_tittle" type="text" class="form-control"
                                                            id="basicInput">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="intro_text">Review Schema
                                                            Description<span class="text-danger">*</span></label>
                                                        <textarea name="course_review_schema_desc"
                                                            class="form-control no-resize " rows="5" id="summernote"
                                                            d></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                    <div class="form-group">
                                                        <label class="control-label" for="intro_text">Summarry Text<span
                                                                class="text-danger">*</span></label>
                                                        <textarea class="form-control no-resize " rows="5"
                                                            name="course_summary_text" id="summernote" d></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="course_file">Course Broucher <span
                                                                class="text-danger">*</span></label>

                                                        <input name="course_file" type="file" class=" form-control-file"
                                                            id="course_file">


                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="course_content">Course Content<span
                                                                class="text-danger">*</span></label>

                                                        <input name="course_content" type="file" class=" form-control-file"
                                                            id="course_content">


                                                    </fieldset>
                                                </div>
                                            </div>
                                    </div>
                    </section>
                    <!-- Basic Inputs end -->
                    <!-- Basic Elements start -->
                    <section class="basic-elements">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">SEO</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Meta Title<span
                                                                class="text-danger">*</span></label>
                                                        <input name="course_seo_meta_tittle" type="text"
                                                            class="form-control" id="basicInput">
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Meta Description<span
                                                                class="text-danger">*</span></label>
                                                        <input name="course_meta_description" type="text"
                                                            class="form-control" id="basicInput">
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Meta Keywords <span
                                                                class="text-danger">*</span></label>
                                                        <input name="course_meta_keyword" type="text" class="form-control"
                                                            id="basicInput">
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>




                        </form>

                </div>

                </section>
            </div>




        @endsection


        <!-- ////////////////////////////////////////////////////////////////////////////-->
