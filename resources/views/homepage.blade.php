@extends('layout')

@section('header')
    <div class="title">
        <h2>Scripty Made Easy</h2>
        <span class="byline">Scripty is platform that help editors and producers to orgnize their work efficiently </span>
    </div>
    <ul class="actions">
        <li><a href="{{route('projects.create')}}" class="button">Create Project now</a></li>
    </ul>
@endsection

@section('content')
    <div id="wrapper">
        <div id="three-column" class="container">
            <div class="title">
                <h2>Fusce ultrices fringilla metus</h2>
                <span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
            </div>
            <div class="boxA">
                <span class="fa fa-cloud-download"></span>
                <p>Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad  torquent per conubia nostra.</p>
                <a href="#" class="button button-alt">More Info</a>
            </div>
            <div class="boxB">
                <span class="fa fa-cogs"></span>
                <p>Etiam neque. Vivamus consequat lorem at nisl. Nullam  wisi a sem semper eleifend. Donec mattis.</p>
                <a href="#" class="button button-alt">More Info</a>
            </div>
            <div class="boxC">
                <span class="fa fa-wrench"></span>
                <p> Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus.</p>
                <a href="#" class="button button-alt">More Info</a>
            </div>
        </div>
    </div>
    <div id="welcome">
        <div class="container">
            <div class="title">
                <h2>Fusce ultrices fringilla metus</h2>
                <span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
            </div>
            <p>This is <strong>StoneWork</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
            <ul class="actions">
                <li><a href="#" class="button">Etiam posuere</a></li>
            </ul>
        </div>
    </div>
@endsection
