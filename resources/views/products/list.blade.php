@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">

                <div class="container-fluid">
                    <dicontainer-fluid mt--7v class="row">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="mb-0">{{ __('Products') }}</h3>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="{{route('products.create')}}" class="btn btn-sm btn-primary">{{ __('Add product') }}</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    @if (session('status'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('status') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                </div>

                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">{{ __('Id') }}</th>
                                            <th scope="col">{{ __('Title') }}</th>
                                            <th scope="col">{{ __('Price') }}</th>
                                            <th scope="col">{{ __('Category') }}</th>
                                            <th scope="col">{{ __('Picture') }}</th>
                                            <th scope="col">{{ __('Actions') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->title }}</td>
                                                <td>$ {{ $product->price }}</td>
                                                <td>
                                                    @if(!empty($product->categories[0]))
                                                        {{$product->categories[0]->name}}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(!empty($product->icons))
                                                        @php
                                                            $img = json_decode($product->icons);
                                                        @endphp
                                                        @if(!empty($img[0]))
                                                            <img src="{{ asset('images').DIRECTORY_SEPARATOR. $img[0]}}" alt="product Image"
                                                            width="32px">
                                                        @else
                                                            -
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                            <a class="dropdown-item" href="{{ route('products.edit', $product) }}">{{ __('Edit') }}</a>
                                                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                    {{ __('Delete') }}
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </dicontainer-fluid>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
    </div>
@endsection