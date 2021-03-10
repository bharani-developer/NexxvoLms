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
                                <li class="breadcrumb-item"><a href="index.html">Management</a>
                                </li>
                                <li class="breadcrumb-item active">Page
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
                        <h3 class="content-header-title mb-0">Page Management</h3>
                        <br>
                    </div>
                </div>


                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-7">
                            <div class="card">
                                <h5>Page</h5>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">

                                        <table id="page-table"
                                            class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Page Name</th>
                                                    <th class="justify-content-center">Action</th>
                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="content-header-right col-md-5 col-12">
                            <h5>Update Page</h5>
                            <br>
                            <br>
                            <form class="validate1" action="#" id="curriculum-form" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="hidden" name="page_id" id="page_id">

                                            <label class="control-label" for="question">Page Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="page_name" id="page_name"
                                                required />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="question">Page Title<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="page_title" id="page_title"
                                                required />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="answer">Meta Description<span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control editable" rows="5" name="meta_description" id="meta_description"
                                                required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="answer">Meta Keywords<span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control editable" rows="5" name="meta_keywords" id="meta_keywords"
                                                required></textarea>
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


@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#page-table').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.page.index') }}",
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'page_name',
                        name: 'page_name'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        
                    },

                ]
            });

            $('body').on('click', '.editpage', function() {
                var page_id = $(this).data('id');
                $.get("{{ route('admin.page.index') }}" + '/' + page_id + '/edit', function(data) {


                    $('#page_id').val(data.id);
                    $('#page_name').val(data.page_name);
                    $('#page_title').val(data.page_title);
                    $('#meta_description').val(data.meta_description);
                    $('#meta_keywords').val(data.meta_keyword);
                   
                })
            })
        });

    </script>

@endsection

<!-- ////////////////////////////////////////////////////////////////////////////-->


@endsection
