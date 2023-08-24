@extends('layout')
@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    @if(count($guitars) > 0)

    @foreach ($guitars as $guitar)

    <div>
        <h1 style="font-size: x-large; font-weight:bold">
            <a href="{{route('guitars.show', ['guitar'=>$guitar['id']])}}">{{$guitar['name']}}
        </h1><br>
        <!--  -->
        <ul style=list-style-type:circle>
            <li>
                Made by: {{$guitar['brand']}}
            </li>
            <br>
        </ul>
        <ul style=list-style-type:circle>
            <li>
                Year Made: {{$guitar['year_made']}}
            </li>
            <br>
        </ul>
        </h3>
    </div>
    @endforeach
    @else
    <h2> There are no guitars to display</h2>
    @endif

    <div>
        User Input: {{$userInput}}
    </div>
</div>
@endsection