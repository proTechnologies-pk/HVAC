@extends('backend.layouts.app')
@section('content')

    {{-- @dd($setting) --}}

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card daily-sales">
                                        <div class="card-block p-5 ">
                                            <form action="{{$data['route'] }}" method="post">
                                                @csrf
                                                @if ($data['is_edit'])
                                                {{ method_field('put') }}
                                                <input type="hidden" name="id" id="id"   value="{{ isset($data['edit_service']) ? $data['edit_service']->id : '' }}">
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h3>{{$data['title']}}</h3>
                                                    </div>
                                                    <div class="col-md-6" style="text-align: right;">

                                                        <a href="{{ route('service.index') }}"
                                                            class="btn btn-primary pl-5 pr-5 btn_custome">
                                                            back
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
                                                {{-- @dd($data['edit_service']) --}}
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
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Slug:</label>
                                                            <input type="hidden" name="slug"  id="slug"  value="{{ isset($data['edit_service']) ? $data['edit_service']->slug : '' }}">
                                                            <input type="text" name="slug" disabled
                                                                value="{{ isset($data['edit_service']) ? $data['edit_service']->slug : '' }}"
                                                                id="slug_display" class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Parent:</label>
                                                            <select name="parent_id" id="parent_id"
                                                                class="form-control form-control-sm">
                                                                <option value="">Select Parent</option>
                                                                @foreach ($data['services'] as $service)

                                                                @php
                                                                     $selected ='';
if($data['is_edit']){
    $selected = $service->id == $data['edit_service']->parent_id ? 'Selected': '';
}

                                                                @endphp

                                                                <option value="{{$service->id}}" {{$selected}}>{{$service->name}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    {{-- @dd($selected) --}}
                                                    <div class="col-md-4 pt-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="active" type="checkbox"
                                                            @if ($data['is_edit'])
                                                            {{isset($data['edit_service']) & $data['edit_service']->is_active == 1 ? 'checked' : '' }}
                                                            @endif
                                                            id="active">
                                                            <label class="form-check-label" for="active">
                                                              Active
                                                            </label>
                                                          </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="web_display"
                                                                                                                      @if ($data['is_edit'])
                                                            {{isset($data['edit_service']) & $data['edit_service']->web_display == 1 ? 'checked' : '' }}
                                                            @endif
                                                            type="checkbox"  id="web_display">
                                                            <label class="form-check-label" for="web_display">
                                                              Web Display
                                                            </label>
                                                          </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12"  style="text-align: right;">
                                                        <button type="submit"
                                                        class="btn btn-success pl-5 pr-5">{{$data['button']}}</button>
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
    </div>
    </div>

@endsection
@section('script')
<script>

    $('#title').on('keyup',function(){
let text = $(this).val();
let slug = convertToSlug(text);
$('#slug_display').val(slug);
$('#slug').val(slug);
    });

function convertToSlug(Text) {
  return Text.toLowerCase()
             .replace(/ /g, '-')
             .replace(/[^\w-]+/g, '');
}
</script>

@endsection
