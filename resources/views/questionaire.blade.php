@extends('master')

@section('content')
    <?php dump($question); ?>
<section class="text-center">
<h1>Take a Quack at it?!</h1>
<h3>Answer the following question below</h3>

</section>

<div class="row">
    <div class="col">
        <h5>{{$question['result'][0]['question']}}Question</h5>
                    <p>
                    {{['chooices'][0][1][2][3]}}
                    </p>
                    <p>
                    {{['answer']}}
                    </p>
            </div>
    </div>

    @if (!empty($question))
    <div class="col-3 text-center"></div>
        <div class="card mb-3"></div>
            <div class="card-body"></div>
    @endif


@endsection
