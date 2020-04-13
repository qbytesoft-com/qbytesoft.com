@extends('dashboard.layouts.main')

@section('sidebar')
    @include('dashboard.layouts.partials.sidebar')
@endsection

@section('theme-tool')
    @include('dashboard.layouts.partials.theme')
@endsection

@section('nav')
    @include('dashboard.layouts.partials.nav')
@endsection

@section('content')
    <div class="page-body p-4 text-dark">
        <div class="page-heading border-bottom d-flex flex-row">
            <h5 class="font-weight-normal">Dashboard</h5>
            <small class="mt-2 ml-2">Summary</small>
        </div>
    </div>
@endsection
