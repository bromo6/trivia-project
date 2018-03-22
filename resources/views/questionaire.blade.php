@extends('layouts.app')

@section('content')
<section class="text-center">

<h1>Take a Quack at it?!</h1>
<h3>Answer the following question below</h3>

</section>
<div class="container">
  <div class="row">
    <div class="col quest">
      <p>{{$question['result'][0]['question']}}</p>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <div class="row">
      {{['chooices'][0]}}
    </div>
    <div class="row">
      {{['chooices'][1]}}
    </div>
    <div class="row">
      {{['chooices'][2]}}
    </div>
    <div class="row">
      {{['chooices'][3]}}
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
