@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    @foreach ($links as $link)
                    <li>{{ $link->title }}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
