@extends('layouts.admin')

@section ('title', 'Dashboard')

@section('main-content')

<div class="m-3">
    <h1>
        Weclome on board, {{ Auth::user()->name }}
    </h1>
</div>

@endsection