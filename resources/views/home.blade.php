@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2> Share an Image With Your Friends!</h2>
                    <form method="POST" action="{{ url('home') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <input name="image" type="file" class="form-control">

                            <br/>
                            <div class="progress">
                                <div class="bar"></div>
                                <div class="percentage">0%</div>
                            </div>
                            <br/>
                            <input type="submit" value="Upload Photo" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
