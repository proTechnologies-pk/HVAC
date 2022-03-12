@extends('backend.layouts.app')
@section('content')

    {{-- @dd($setting) --}}

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="card">
                                <div class="card-block p-5 ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>{{ $data['title'] }}</h3>
                                        </div>
                                        <div class="col-md-6" style="text-align: right;">

                                            <a href="{{ route('setting.banner') }}"
                                                class="btn btn-primary pl-5 pr-5 btn_custome">
                                                back
                                            </a>
                                        </div>
                                        <div class="col-md-12">

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

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-9 border-right-0">

                                            <form action="{{ $data['route'] }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @if ($data['is_edit'])
                                                    {{ method_field('put') }}
                                                    <input type="hidden" name="id" id="id"
                                                        value="{{ isset($data['edit_service']) ? $data['edit_service']->id : '' }}">
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="">Title:</label>
                                                            <input type="text" name="title"
                                                                value="{{ isset($data['edit_service']) ? $data['edit_service']->name : '' }}"
                                                                id="title" class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label for="">Description:</label>
                                                            <input type="text" name="description" id="description"
                                                                value="{{ isset($data['edit_service']) ? $data['edit_service']->description : '' }}"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Banner Image:</label>
                                                            <input type="file" name="banner_img" id="banner_img" class="form-control">

                                                        </div>
                                                    </div>
                                                </div>


                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <hr>
                                            <div class="form-check">
                                                <input class="form-check-input" name="active" type="checkbox"
                                                    @if ($data['is_edit']) {{ isset($data['edit_service']) & ($data['edit_service']->is_active == 1) ? 'checked' : '' }} @endif
                                                    id="active">
                                                <label class="form-check-label" for="active">
                                                    Active
                                                </label>
                                            </div>
                                            <hr>
                                            <div class="form-check">
                                                <input class="form-check-input" name="title_active"
                                                    @if ($data['is_edit']) {{ isset($data['edit_service']) & ($data['edit_service']->web_display == 1) ? 'checked' : '' }} @endif
                                                    type="checkbox" id="title_active">
                                                <label class="form-check-label" for="title_display">
                                                    Display Title
                                                </label>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12" style="text-align: right;">
                                            <button type="submit"
                                                class="btn btn-success pl-5 pr-5">{{ $data['button'] }}</button>
                                        </div>
                                    </div>
                                    </form>
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
        image_upload_path = '{{ route('service.index') }}';
        var form_id = 'brands-form';
        p_images = JSON.parse('{!! json_encode($data['button']) !!}');
        maxFiles = 1;
    </script>
@endsection
