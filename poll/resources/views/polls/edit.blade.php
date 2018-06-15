Edit view
<form action="{{ action('PollController@update', ['id' => $poll->id]) }}" method="post">
{{ csrf_field() }}
<div class="form-group prl-5">
{!! Form::label('title', 'Poll title') !!}
{!! Form::text('title', $poll->name) !!}
</div>

<div class="form-group prl-5">
{!! Form::label('year', 'Year') !!}
{!! Form::text('year', $poll->year) !!}
</div>

<div class="form-group prl-5">
{!! Form::submit('Save') !!}
</div>

</form>