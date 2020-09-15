@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <div class="col-12"> --}}
                        <div class="col-md-9 float-left">
                            <h1>{{ $title }}</h1>
                        </div>
                        <div class="col-md-3 float-right">
                            <a href="{{ route('books.create') }}" class="btn btn-block btn-primary">
                                <i class="fas fa-fw fa-plus mr-2"></i>
                                @lang('buttons.Add Book')
                            </a>
                        </div>
                        {{-- </div> --}}
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                                <a href="#" class="close" data-dismiss="alert" aria-label="fechar">&times;</a>
                            </div>
                        @endif
                        <div class="col-md-8 mt-2 float-left">
                            <h5>Keep your collection record updated</h5>
                        </div>
                        <div class="col-md-4 float-right mb-3">
                            @include('layouts.partials.paginations.search')
                        </div>
                        <div class="table table-responsive">
                            <table class="table table-responsive table-default">
                                @include('books.partials.table.head')
                                @foreach ($books as $book)
                                    @include('books.partials.table.body')
                                @endforeach
                            </table>
                        </div>
                        @include('layouts.partials.paginations.footer')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
