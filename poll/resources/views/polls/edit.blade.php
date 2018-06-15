Edit view
<form action="{{ action('PollController@update', ['id' => $poll->id]) }}" method="post">
{{ csrf_field() }}
<div class="form-group prl-5">
{!! Form::label('name', 'Poll name') !!}
{!! Form::text('name', $poll->name) !!}
</div>

<div class="form-group prl-5">
{!! Form::label('description', 'description') !!}
{!! Form::text('description', $poll->description) !!}
</div>

<div class="form-group prl-5">
    {!! Form::label('number of options', 'number of options') !!}
    {!! Form::text('number of options', $poll->nr_of_options) !!}
</div>

<div class="form-group prl-5">
{!! Form::submit('Save') !!}
</div>

</form>