@extends('layouts.app')
@section('content')

    @foreach($answer as $da)

        <h5 class="card-title text-center">Quection number {!! $da->question_id!!}</h5>
            <div class="line-ellipse light text-center"><span>{!!$da->where('id',$da->id)->first()->user()->get()->last()->name;!!}</span></div>
        <div class="line-ellipse light text-center"><span>{!!$da->body!!}</span></div>
        <p class="card-text-small text-center">Created: {!! $da->created_at !!}<br></p>
        <p class="card-text-small text-center ">card-catagary<br></p>
        <form action="{{route('markAsSolution')}}" method="post" >
            @csrf
            <input type="hidden" name="questionID" value="{!! $da->question_id!!}">
            <input type="hidden" name ="userID" value="{!! $da->where('id',$da->id)->first()->user()->get()->last()->id;!!}">
                <input type="submit" class="btn btn-success pull-right "  value="Mark as solution">
        </form>
    @endforeach
@endsection
