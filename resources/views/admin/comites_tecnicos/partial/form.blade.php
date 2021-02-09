<div class="form-group">
    {{ Form::label('comite', 'Comité Técnico') }}
    {{ Form::text('comite', null, ['class' => 'form-control', 'id' => 'comite']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
