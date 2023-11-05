@extends('admin.navbar')

@section('content')

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->

                                <section id="multiple-column-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <!-- Basic Horizontal form layout section start -->
                                                    <form class="form form-horizontal" method="POST" action="{{ route('card.store' ) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                             <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> title </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="title" />
                                                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> paragraph </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="paragraph" />
                                                                        <span class="text-danger">{{ $errors->first('paragraph') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-9 offset-sm-3">
                                                                <button type="submit" class="btn btn-primary me-1"> save </button>
                                                                <a class="btn btn-outline-secondary" href="{{ route('card.index') }}">back</a>
                                                            </div>

                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection('content')
