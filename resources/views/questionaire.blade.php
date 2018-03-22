@extends('layouts.app')

@section('content')
<section class="text-center">

<h1>Take a Quack at it?!</h1>
<h3>Answer the following question below</h3>

</section>

<div class="row text-center mt-3">
    <div class="col-3">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><p class="card-text">{{$question['meta']['result']['question']['chooices']['answer']}}</h5>
            </div>
        </div>
    </div>
</div>
    @if (!empty($question))
    <div class="col-3" "text-center">
        <div class="card mb-3">
            <div class="card-body">
    @endif


@endsection
