@extends('layouts.dashposrd')

@section('title', 'categories')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">categories</li>
    <li class="breadcrumb-item active">edit</li>
@endsection

@section('content')
    <form action="{{ route('dashpoard.categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('dashpoard.Categories.__form', [
            'button_lable' => 'update'
        ])
        </form>
@endsection