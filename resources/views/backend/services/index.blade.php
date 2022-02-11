@extends('backend.layouts.app')
@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card daily-sales">
                                        <div class="card-block p-5">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h3>Services</h3>
                                                </div>
                                                <div class="col-md-6" style="text-align: right;">
                                                    <a href="{{ route('service.create') }}"
                                                        class="btn btn-success pl-5 pr-5">
                                                        Add Service
                                                    </a>
                                                </div>
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table id="service_table" class="display" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>

                                                                <th>Image</th>
                                                                <th>Name</th>
                                                                <th>Description</th>
                                                                <th>Category</th>

                                                                <th>Web Display</th>
                                                                <th>Active</th>
                                                                <th width="18%">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($services as $service)

                                                                <tr>
                                                                    <td>{{ $service->id }}</td>
                                                                    <td>{{ $service->name }}</td>

                                                                    <td>{{ $service->name }}</td>
                                                                    <td>{{ $service->description }}</td>
                                                                    <td>{{ $service->description }}</td>
                                                                    <td>{{ $service->description }}</td>


                                                                    <td>
                                                                        <label class="switch ">
                                                                            <input type="checkbox" class="primary"
                                                                                {{ $service->web_display == 1 ? 'checked' : '' }}>
                                                                            <span class="slider round"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="switch ">
                                                                            <input type="checkbox" class="primary"
                                                                                {{ $service->is_active == 1 ? 'checked' : '' }}>
                                                                            <span class="slider round"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                    <a href="{{route('service.edit',$service->id)}}" class="btn btn_custome btn-outline-primary btn-sm">Edit</a>
                                                                    <a href="{{route('service.destroy',$service->id)}}" class="btn btn_custome btn-outline-danger btn-sm">Delete</a>

                                                                </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#service_table').DataTable();
        });
    </script>
@endsection
