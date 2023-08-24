@extends('layout')
@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div>
        <h1 style="font-size: x-large; font-weight:bold">
            {{$guitar['name']}}
        </h1>
        <br>
        <ul>
            <li>
                Made by: {{$guitar['brand']}}
            </li>
        </ul>
        <ul>
            <li>
                Year Made: {{$guitar['year_made']}}
            </li>
        </ul>
        </h3>
    </div>
    @endsection