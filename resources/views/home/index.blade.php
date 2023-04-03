@extends('layouts.app')
@section('title', $viewData['title'])

@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('storage/game.png') }}" alt="Game" class="img-fluid rounded">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('storage/safe.png') }}" alt="Safe" class="img-fluid rounded">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('storage/submarine.png') }}" alt="Submarine" class="img-fluid rounded">
        </div>
    </div>
@endsection
