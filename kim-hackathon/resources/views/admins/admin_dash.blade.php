@extends('admins.admin_layout')

@section('sidebar')
    @include('components.sidebar')
@endsection

@section('main')
    @include("components.panel")
@endsection

@section('footer')
<footer>
    <div class="bg-black"></div>
</footer>
@endsection