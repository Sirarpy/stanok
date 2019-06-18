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
                                            <h3 class="mb-0">{{ __('Categories Management') }}</h3>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="{{ route('categories.index') }}"
                                               class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{ route('categories.store') }}" autocomplete="off" enctype="multipart/form-data">
                                        @csrf

                                        <h6 class="heading-small text-muted mb-4">{{ __('Categories information') }}</h6>

                                        <div class="pl-lg-4">

                                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                                <label class="form-control-label"
                                                       for="input-name">{{ __('Name') }}</label>
                                                <input type="text" name="name" id="input-name"
                                                       class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                       placeholder="{{ __('Name') }}" value="{{ old('name') }}"
                                                       required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group {{ $errors->has('type') ? ' has-danger' : '' }}">
                                                <label class="form-control-label"
                                                       for="input-type">{{ __('Category Type') }}</label>
                                                <br>
                                                <input type="radio" name="type" value="1" checked>
                                                {{ __('Food Item') }} <br>

                                                <input type="radio" name="type" value="0">
                                                {{ __('Non-Food Item') }}

                                                @if ($errors->has('type'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('type') }}</strong>
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