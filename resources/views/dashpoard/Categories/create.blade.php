@extends('layouts.dashposrd')

@section('title', 'categories')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">categories</li>
@endsection

@section('content')
    <form action="{{ route('dashpoard.categories.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('dashpoard.Categories.__form')
    </form>
@endsection