@extends('layouts.app')
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{{ config('app.name', 'Laravel') }}</title>
<link href="css/css.css" rel="stylesheet">	
<link rel="stylesheet" href="{{asset('css/header.css')}}">	
<link rel="stylesheet" href="css/respensive.css">
</head>
<body>


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

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
