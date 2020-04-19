


@extends('layouts.app')

@section('content')
<div class="container">
    <h4>
            Hello  {{Auth::user()->name}}

    </h4>
    <h6>
        You don't have permission - admin
    </h6>
</div>
@endsection
