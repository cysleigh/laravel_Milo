@extends('layouts.app')

@section('content')
<h1>sleigh_Hello</h1>
@endsection

@section('inline_js')
    @parent
    alertHook('hello.blade.php')
    @endsection