@extends('layouts.defualt')


@section('header')
<h2>this is contact page</h2>
@endsection


@section('maincontent')
{{--
<h1>New home page</h1>
<a href="{{ url('/test') }}">Go to test page!</a>
<a href="{{ route('testpage') }}">Go to test page!</a>
--}}
{{--
    <form action="{{ url('/formsubmitted')}}" method="post"> <!--if we only write /formsubmitted it will say page not found for it to access the /public/formsubmitted since we use blade we should add the currly bracets so it can access it -->

<!--we add the @csrf for securtiy purpose-->
@csrf
<label for="fullname">Full name:</label>
<input type="text" id="fullname" name="fullname" placeholder="type your full name" required>
<br><br>
<label for="email">email:</label>
<input type="text" id="email" name="email" placeholder="type your email" required>
<br><br>
<button type="submit">submit</button>
</form>
--}}
<!--second form with the other option for the cation attribute by definning name in the route-->
<form action="{{ route('formsubmitted')}}" method="post"> <!--if we only write /formsubmitted it will say page not found for it to access the /public/formsubmitted since we use blade we should add the currly bracets so it can access it -->

    <!--we add the @csrf for securtiy purpose-->
    @csrf
    <label for="fullname">Full name:</label>
    <input type="text" id="fullname" name="fullname" placeholder="type your full name" required>
    <br><br>
    <label for="email">email:</label>
    <input type="text" id="email" name="email" placeholder="type your email" required>
    <br><br>
    <button type="submit">submit</button>
</form>
@endsection

@section('footer')
<h2> this is footer</h2>
@endsection