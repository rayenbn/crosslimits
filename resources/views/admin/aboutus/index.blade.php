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
                            <h3 class="box-title">About-us Page</h3>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                    @if($aboutus)
                    <form action="{{ route("admin.aboutus.update", [$aboutus->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @else
                        <form action="{{ route("admin.aboutus.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @endif
                            @if(isset($aboutus->banner))
                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <img src="/storage/images/banners/{{ $aboutus->banner }}" width="100%" style="max-height: 300px;" />
                                </div>
                            </div>
                            @endif
                            <div class="form-group row">
                                <label for="banner" class="col-md-2 col-form-label ">{{ trans('global.aboutus.fields.banner') }}</label>
                                <div class="col-md-10">
                                    <div class="input-group">

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="banner" name="banner">
                                            <label class="custom-file-label" for="banner">{{ trans('global.choose_file') }}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="banner">{{ trans('global.upload') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group row {{ $errors->has('banner_title') ? 'has-error' : '' }}">
                                        <label for="col-md-3 col-form-label banner_title">Banner {{ trans('global.aboutus.fields.title') }}</label>
                                        <div class="col-md-9">
                                            <input type="text" id="banner_title" name="banner_title" class="form-control" value="{{ old('banner_title', isset($aboutus) ? $aboutus->banner_title : '') }}" placeholder="Banner title" required>
                                            @if ($errors->has('banner_title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('banner_title') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <strong style="color: #1863AB;">Section 1</strong>
                            <hr>
                            <div class="row">
                                <div class="col-md-7">

                                    <div class="form-group  {{ $errors->has('sec_one_title') ? 'has-error' : '' }}">
                                        <label for="sec_one_title">{{ trans('global.aboutus.fields.title') }}</label>

                                        <input type="text" id="sec_one_title" name="sec_one_title" class="form-control" value="{{ old('sec_one_title', isset($aboutus) ? $aboutus->sec_one_title : '') }}" placeholder="Page section 1 title" required>
                                        @if ($errors->has('sec_one_title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sec_one_title') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('sec_one_text') ? 'has-error' : '' }}">
                                        <label for="sec_one_text">{{ trans('global.aboutus.fields.description') }}</label>
                                        <textarea id="sec_one_text" name="sec_one_text" class="form-control ">{{ old('sec_one_text', isset($aboutus) ? $aboutus->sec_one_text : '') }}</textarea>
                                        @if($errors->has('sec_one_text'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('sec_one_text') }}
                                        </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.aboutus.fields.description_helper') }}
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label for="sec_one_img">{{ trans('global.aboutus.fields.image') }}</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="sec_one_img" name="sec_one_img">
                                                <label class="custom-file-label" for="sec_one_img">{{ trans('global.choose_file') }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="sec_one_img">{{ trans('global.upload') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @if(isset($aboutus->sec_one_img))
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <img src="/storage/images/banners/{{ $aboutus->sec_one_img }}" width="100%" />
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <strong style="color: #1863AB;">Section 2</strong>
                            <hr>
                            
                            <!-- <div class="form-group  row{{ $errors->has('sec_two_title') ? 'has-error' : '' }}">
                                <label for="sec_two_title" class="col-md-2 col-form-label ">{{ trans('global.aboutus.fields.title') }}</label>
                                <div class="col-md-10">
                                    <input type="text" id="sec_two_title" name="sec_two_title" class="form-control" value="{{ old('sec_two_title', isset($aboutus) ? $aboutus->sec_two_title : '') }}" placeholder="Page section 2 title" required>
                                    @if ($errors->has('sec_two_title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sec_two_title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-4 border-right">
                                    <div class="form-group  {{ $errors->has('sec_two_t1') ? 'has-error' : '' }}">
                                        <label for="sec_two_t1">{{ trans('global.aboutus.fields.title') }} 1</label>

                                        <input type="text" id="sec_two_t1" name="sec_two_t1" class="form-control" value="{{ old('sec_two_t1', isset($aboutus) ? $aboutus->sec_two_t1 : '') }}" required>
                                        @if ($errors->has('sec_two_t1'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sec_two_t1') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group  {{ $errors->has('sec_two_desc1') ? 'has-error' : '' }}">
                                        <label for="sec_two_desc1">{{ trans('global.aboutus.fields.description') }} 1</label>

                                        <textarea type="text" id="sec_two_desc1" rows="15" name="sec_two_desc1" class="form-control" >{{ old('sec_two_desc1', isset($aboutus) ? $aboutus->sec_two_desc1 : '') }}</textarea>
                                        @if ($errors->has('sec_two_desc1'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sec_two_desc1') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4 border-right">
                                    <div class="form-group  {{ $errors->has('sec_two_t2') ? 'has-error' : '' }}">
                                        <label for="sec_two_t2">{{ trans('global.aboutus.fields.title') }} 2</label>

                                        <input type="text" id="sec_two_t2" name="sec_two_t2" class="form-control" value="{{ old('sec_two_t2', isset($aboutus) ? $aboutus->sec_two_t2 : '') }}" >
                                        @if ($errors->has('sec_two_t2'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sec_two_t2') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group  {{ $errors->has('sec_two_desc2') ? 'has-error' : '' }}">
                                        <label for="sec_two_desc2">{{ trans('global.aboutus.fields.description') }} 2</label>

                                        <textarea type="text" id="sec_two_desc2" rows="15" name="sec_two_desc2" class="form-control">{{ old('sec_two_desc2', isset($aboutus) ? $aboutus->sec_two_desc2 : '') }}</textarea>
                                        @if ($errors->has('sec_two_desc2'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sec_two_desc2') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4 border-right">
                                    <div class="form-group  {{ $errors->has('sec_two_t3') ? 'has-error' : '' }}">
                                        <label for="sec_two_t3">{{ trans('global.aboutus.fields.title') }} 3</label>

                                        <input type="text" id="sec_two_t3" name="sec_two_t3" class="form-control" value="{{ old('sec_two_t3', isset($aboutus) ? $aboutus->sec_two_t3 : '') }}" >
                                        @if ($errors->has('sec_two_t3'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sec_two_t3') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group  {{ $errors->has('sec_two_desc3') ? 'has-error' : '' }}">
                                        <label for="sec_two_desc3">{{ trans('global.aboutus.fields.description') }} 3</label>

                                        <textarea type="text" id="sec_two_desc3" rows="15" name="sec_two_desc3" class="form-control" >{{ old('sec_two_desc3', isset($aboutus) ? $aboutus->sec_two_desc3 : '') }}</textarea>
                                        @if ($errors->has('sec_two_desc3'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sec_two_desc3') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                               
                            </div>

                            <hr>
                            <strong style="color: #1863AB;">Section 3: Gallery</strong>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group  {{ $errors->has('gallery_title') ? 'has-error' : '' }}">
                                        <label for="gallery_title">{{ trans('global.aboutus.fields.title') }}</label>

                                        <input type="text" id="gallery_title" name="gallery_title" class="form-control" value="{{ old('gallery_title', isset($aboutus) ? $aboutus->gallery_title : '') }}" placeholder="Page section 1 title" required>
                                        @if ($errors->has('gallery_title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gallery_title') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group  {{ $errors->has('gallery_subtitle') ? 'has-error' : '' }}">
                                        <label for="gallery_subtitle">{{ trans('global.aboutus.fields.subtitle') }}</label>

                                        <input type="text" id="gallery_subtitle" name="gallery_subtitle" class="form-control" value="{{ old('gallery_subtitle', isset($aboutus) ? $aboutus->gallery_subtitle : '') }}" placeholder="Page section 1 title" required>
                                        @if ($errors->has('gallery_subtitle'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gallery_subtitle') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="gallery_banner">{{ trans('global.aboutus.fields.image') }}</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gallery_banner" name="gallery_banner">
                                                <label class="custom-file-label" for="gallery_banner">{{ trans('global.choose_file') }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="gallery_banner">{{ trans('global.upload') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @if(isset($aboutus->gallery_banner))
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <img src="/storage/images/banners/{{ $aboutus->gallery_banner }}" width="100%" />
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-2 offset-md-10">
                                    <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</section>
@endsection