@extends('layouts.app')

@section('content')
<div class="container">
<h6>Hello  {{Auth::user()->name}} You are admin</h6>
</div>



@endsection
