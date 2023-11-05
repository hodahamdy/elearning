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

                                <a href="{{ route('card.create') }}">
                                    <button type="button" class="btn btn-success"><i class="fas fa-plus"></i>Add card</button>
                                </a>
                                <br><br>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>title</th>
                                                <th>paragraph</th>

                                                <th>edit</th>
                                                <th>delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($show as $view )
                                                <tr>
                                                    <td>{{ $view->title}}</td>
                                                    <td>{{ $view->paragraph}}</td>

                                                    <td> <a href="{{ route('card.edit', $view->id) }}" class="btn btn-info" id="edit">
                                                      Edit </a>
                                                     </td>
                                                     <td> <a href="{{ route('card.delete', $view->id) }}" class="btn btn-danger" id="delete">
                                                        Delete </a>
                                                       </td>

                                                </tr>
                                              @endforeach
                                        </tbody>
                                    </table>
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
