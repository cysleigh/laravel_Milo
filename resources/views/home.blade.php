@extends('layouts.app')

@section('content')
<h1>sleigh_home</h1>
@endsection

@section('inline_js')
    @parent
    alertHook('home.blade.php')
    @endsection