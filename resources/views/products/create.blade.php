@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-8" style="padding-top: 13rem !important;">
        <div class="container-fluid">
            <div class="header-body">
                <div class="container-fluid mt--7">
                    <div class="row">
                        <div class="col-xl-12 order-xl-1">
                            <div class="card bg-secondary shadow">
                                <div class="card-header bg-white border-0">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="mb-0">{{ __('Products Management') }}</h3>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="{{ route('products.index') }}"
                                               class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{ route('products.store') }}" autocomplete="off" enctype="multipart/form-data">
                                        @csrf

                                        <h6 class="heading-small text-muted mb-4">{{ __('Products information') }}</h6>

                                        <div class="pl-lg-4">

                                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                                <label class="form-control-label"
                                                       for="input-title">{{ __('Title') }}</label>
                                                <input type="text" name="title" id="input-title"
                                                       class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                                       placeholder="{{ __('Title') }}" value="{{ old('title') }}"
                                                       required autofocus>

                                                @if ($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                <label class="form-control-label"
                                                       for="input-description">{{ __('Description') }}</label>
                                                <textarea name="description" id="input-description" cols="30" rows="10"
                                                          class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                          placeholder="{{ __('Description') }}">{{ old('description') }}</textarea>

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                                <label class="form-control-label"
                                                       for="input-price">{{ __('Price') }}</label>
                                                <input type="number" name="price" id="input-price"
                                                       class="form-control form-control-alternative{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                                       placeholder="{{ __('Price') }}" value="{{ old('price') }}" required>

                                                @if ($errors->has('price'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('price') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
                                                <label class="form-control-label"
                                                       for="input-category">{{ __('Category') }}</label>

                                                <select name="category_id" id="input-category"
                                                        class="form-control form-control-alternative{{ $errors->has('category_id') ? ' is-invalid' : '' }}">
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach

                                                </select>

                                                @if ($errors->has('category_id'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('category_id') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group{{ $errors->has('icons') ? ' has-danger' : '' }}">
                                                <label class="form-control-label"
                                                       for="input-icons">{{ __('Icons') }}</label>
                                                <input type="file" name="icons[]" id="input-icons" multiple
                                                       class="form-control form-control-alternative{{ $errors->has('icons') ? ' is-invalid' : '' }}"
                                                        value="{{ old('icons') }}">

                                                @if ($errors->has('icons'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('icons') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
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
@endsection