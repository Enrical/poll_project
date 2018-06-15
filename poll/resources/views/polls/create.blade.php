Create view
<form action="{{ action('PollController@store') }}" method="post">
FORM

{{ csrf_field() }}
<div class="form-group prl-5">
{!! Form::label('title', 'Poll title') !!}
{!! Form::text('title', '') !!}
</div>

<div class="form-group prl-5">
{!! Form::label('year', 'Year') !!}
{!! Form::text('year', '') !!}
</div>

<select name="poll_options[]">
    @foreach ($poll_options as $poll_option)
        <option value="{{ $poll_option->id }}">{{ $poll_option->name }}</option>
    @endforeach
</select>

<div class="form-group prl-5">
{!! Form::submit('Save') !!}
</div>



</form>