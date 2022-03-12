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
                                                    <h3>Banners</h3>
                                                </div>
                                                <div class="col-md-6" style="text-align: right;">
                                                    <a href="{{ route('setting.addbanner') }}"
                                                        class="btn btn-success pl-5 pr-5">
                                                        Add banner
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
                                                                <th>Title</th>
                                                                <th>Description</th>
                                                                <th>Status</th>
                                                                <th width="18%">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($banners as $banner)
                                                                <tr>
                                                                    <td>{{ $banner->id }}</td>
                                                                    <td><img src="{{ image_asset($banner->image) }}" height="35px" width="auto" alt=""></td>
                                                                    <td>{{ $banner->title }}</td>
                                                                    <td>{{ $banner->description }}</td>
                                                                    <td> <span
                                                                            class="badge {{ $banner->active == 1 ? 'badge-success' : 'badge-danger' }}">{{ $banner->active == 1 ? 'YES' : 'NO' }}</span>
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
