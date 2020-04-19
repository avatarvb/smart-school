@extends('layouts.app')

@section('content')
<div class="container">
    @if(Auth::check())
        @if (Auth::user()->isAdmin())
            <p>Role : Admin<p>
                <ul>
                    <li>acceuil</li>
                    <li>dashboard</li>
                    <li>set permissions</li>
                </ul>
        @endif
    @endif
{{-- -------------------------------------------- --}}
    @if(Auth::check())
        @if (Auth::user()->isUser())
            <p>Role : User<p>
        @endif
    @endif
{{-- -------------------------------------------- --}}
    @if(Auth::check())
        @if (Auth::user()->isTeacher())
            <p>Role : Teacher<p>
        @endif
    @endif
{{-- -------------------------------------------- --}}
    @if(Auth::check())
        @if (Auth::user()->isParent())
            <p>Role : Parent<p>
        @endif
    @endif
{{-- -------------------------------------------- --}}
    @if(Auth::check())
        @if (Auth::user()->isChild())
            <p>Role : Child<p>
        @endif
    @endif
{{-- -------------------------------------------- --}}
</div>
@endsection
