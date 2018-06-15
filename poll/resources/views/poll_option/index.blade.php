@extends('layout')

@section('content')

    <form>
    @foreach ($poll_options as $poll_option)       
        <div class="form-group prl-5">
            {!! Form::label('option_text', 'description') !!}
            {!! Form::text('option_text', '$poll_option->option_text') !!}
        </div>
    @endforeach

    </form>

@endsection