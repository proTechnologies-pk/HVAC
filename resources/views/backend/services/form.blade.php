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

                                            <a href="{{ route('service.index') }}"
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

                                            <form action="{{ $data['route'] }}" method="post">
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
                                                            <input type="text" name="description" id="description" value="{{ isset($data['edit_service']) ? $data['edit_service']->description : '' }}" class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Parent:</label>
                                                            <select name="parent_id" id="parent_id"
                                                                class="form-control form-control-sm">
                                                                <option value="">Select Category</option>
                                                                @foreach ($data['cayegories'] as $cayegory)

                                                                    @php
                                                                        $selected = '';
                                                                        if ($data['is_edit']) {
                                                                            $selected = $cayegory->id == $data['edit_service']->parent_id ? 'Selected' : '';
                                                                        }

                                                                    @endphp

                                                                    <option value="{{ $cayegory->id }}"
                                                                        {{ $selected }}>{{ $cayegory->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>
<div class="row">
    <div class="card bg-light mt-lg-4  rounded  border-0">
        <div class="card-body">
            <label>
                <i class="" tabindex="0" data-toggle="popover" data-trigger="focus"
                   title="Brand Image"
                   data-content="Select Image. Image size should be (120 x 120)"></i>
                {{ __('backoffice.add_image') }}
            </label>
            <form name="brand_images" action="/file-upload" class="dropzone"
                  id="my-awesome-dropzone" enctype="multipart/form-data">
                <div class="fallback">
                    <input name="file" type="file" style="display: none;">
                </div>
            </form>

            {{--                  @dd($model->brand)--}}
            <div class="hidden">
                <div id="hidden-images">
                    @if(isset($data['brands_images']))
                        @php
                            $index = 0;
                        @endphp
                        @foreach($model->brand['brands_images'] as $image)
                            <input type="hidden" form="brands-form"
                                   name="images[{{ $index }}][name]" value="{{ $image['name'] }}"/>
                            <input type="hidden" form="brands-form"
                                   name="images[{{ $index }}][path]" value="{{ $image['url'] }}"/>
                            <input type="hidden" form="brands-form"
                                   name="images[{{ $index }}][size]" value="{{ $image['size'] }}"/>
                            @php
                                $index++;
                            @endphp
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>


                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <hr>
                                            <div class="form-check">
                                                <input class="form-check-input" name="active" type="checkbox" @if ($data['is_edit'])
                                                {{ isset($data['edit_service']) & ($data['edit_service']->is_active == 1) ? 'checked' : '' }}
                                                @endif
                                                id="active">
                                                <label class="form-check-label" for="active">
                                                    Active
                                                </label>
                                            </div>
                                            <hr>
                                            <div class="form-check">
                                                <input class="form-check-input" name="web_display" @if ($data['is_edit'])
                                                {{ isset($data['edit_service']) & ($data['edit_service']->web_display == 1) ? 'checked' : '' }}
                                                @endif
                                                type="checkbox" id="web_display">
                                                <label class="form-check-label" for="web_display">
                                                    Web Display
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
     image_upload_path = '{{ route("service.index")  }}';
        var form_id = 'brands-form';
        p_images = JSON.parse('{!! json_encode($data["button"]) !!}');
        maxFiles = 1;
    </script>
@endsection
