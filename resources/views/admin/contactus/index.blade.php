@extends('layouts.admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8">
                            <h3 class="box-title">Contact-us Page</h3>
                        </div>
                    </div>
                </div>

                <!-- /.box-header -->
                @if($contactus)
                    <form action="{{ route('admin.contactus.update', [$contactus->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                @else
                    <form action="{{ route('admin.contactus.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @endif
                    <div class="card-body" id="english-form">
                        <div class="form-group  row{{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="title" class="col-md-2 col-form-label ">{{ trans('global.contactus.fields.title') }}</label>
                            <div class="col-md-10">
                                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($contactus) ? $contactus->title : '') }}" placeholder="Page Title" required>
                                @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group  row{{ $errors->has('address') ? 'has-error' : '' }}">
                            <label for="address" class="col-md-2 col-form-label ">{{ trans('global.contactus.fields.address') }}</label>
                            <div class="col-md-10">
                                <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($contactus) ? $contactus->address : '') }}" placeholder="example, exmaple 8768" required>
                                @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group  row{{ $errors->has('website') ? 'has-error' : '' }}">
                            <label for="website" class="col-md-2 col-form-label ">{{ trans('global.contactus.fields.website') }}</label>
                            <div class="col-md-10">
                                <input type="website" id="website" name="website" class="form-control" value="{{ old('website', isset($contactus) ? $contactus->website : '') }}" placeholder="www.example.com" required>
                                @if ($errors->has('website'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('website') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group  row{{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label for="phone" class="col-md-2 col-form-label ">{{ trans('global.contactus.fields.phone') }}</label>
                            <div class="col-md-10">
                                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($contactus) ? $contactus->phone : '') }}" placeholder="Ex: 123456789" >
                                @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group  row{{ $errors->has('mobile') ? 'has-error' : '' }}">
                            <label for="mobile" class="col-md-2 col-form-label ">{{ trans('global.contactus.fields.mobile') }}</label>
                            <div class="col-md-10">
                                <input type="text" id="mobile" name="mobile" class="form-control" value="{{ old('mobile', isset($contactus) ? $contactus->mobile : '') }}" placeholder="Ex: 123456789" >
                                @if ($errors->has('mobile'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-2 offset-md-10">
                                <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</section>
@endsection