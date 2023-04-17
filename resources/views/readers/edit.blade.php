@extends('layouts.app')

@section('content')
    @include('readers.form', ['reader' => $reader])
@endsection

