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
                                            <form action="{{ route('setting.store') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h3>Settings</h3>
                                                    </div>
                                                    <div class="col-md-6" style="text-align: right;">
                                                        <button type="submit"
                                                            class="btn btn-success pl-5 pr-5">Update</button>
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
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Title:</label>
                                                            <input type="text" name="title" value="{{isset($setting) ? $setting->title : ''}}" id="title"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Site Logo:</label>
                                                            <input type="file" name="logo" id="logo"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Owner Name:</label>
                                                            <input type="text" name="owner_name"  value="{{isset($setting) ? $setting->owner_name : ''}}" id="owner_name"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Contact Email:</label>
                                                            <input type="email" name="email"  value="{{isset($setting) ? $setting->email : ''}}" id="email"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Contact Number:</label>
                                                            <input type="number" name="number" value="{{isset($setting) ? $setting->contact_number : ''}}"  id="number"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Address:</label>
                                                            <input type="text" name="address" value="{{isset($setting) ? $setting->address : ''}}"  id="address"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3>Social</h3>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Facebook:</label>
                                                            <input type="text" name="facebook" value="{{isset($setting) ? $setting->facebook : ''}}"  id="facebook"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Twitter:</label>
                                                            <input type="text" name="twitter" value="{{isset($setting) ? $setting->twitter : ''}}"  id="twitter"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Youtube:</label>
                                                            <input type="text" name="youtube" value="{{isset($setting) ? $setting->youtube : ''}}"  id="youtube"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Instagram:</label>
                                                            <input type="text" name="instagram" value="{{isset($setting) ? $setting->instagram : ''}}"  id="instagram"
                                                                class="form-control form-control-sm">
                                                        </div>
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
