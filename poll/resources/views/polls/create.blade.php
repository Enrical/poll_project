Create view
<form action="{{ action('PollController@store') }}" method="post">
FORM

{{ csrf_field() }}
<div class="form-group prl-5">
{!! Form::label('name', 'Poll name') !!}
{!! Form::text('name', '') !!}
</div>


<div class="form-group prl-5">
{!! Form::label('description', 'description') !!}
{!! Form::text('description', '$poll->description') !!}
</div>

<div class="form-group prl-5">
{!! Form::label('number of options', 'number of options') !!}
{!! Form::text('number of options', '$poll->nr_of_options') !!}
</div>



{{-- <select name="poll_options[]">
    @foreach ($poll_options as $poll_option)
        <option value="{{ $poll_option->id }}">{{ $poll_option->name }}</option>
    @endforeach
</select> --}}

<div class="form-group prl-5">
{!! Form::submit('Save') !!}
</div>



</form>