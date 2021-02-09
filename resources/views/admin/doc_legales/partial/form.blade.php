{{ Form::hidden('user_id', auth()->user()->id )}}

{{ csrf_field() }}

<div class="form-group">
    {{ Form::label('regulation_id', 'Categoría tipo de ley') }}
    {{ Form::select('regulation_id', $regulations, null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('nro_norma', 'Código Norma') }}
    {{ Form::text('nro_norma', null, ['class' => 'form-control', 'id' => 'nro_norma']) }}
</div>

<div class="form-group">
    {{ Form::label('ano', 'Año') }}
    {{ Form::text('ano', null, ['class' => 'form-control', 'id' => 'ano']) }}
</div>

<div class="form-group">
    {{ Form::label('decreto', 'Decreto') }}
    {{ Form::text('decreto', null, ['class' => 'form-control', 'id' => 'decreto']) }}
</div>

<div class="form-group">
    {{ Form::label('descripcion', 'Descripción') }}
    {{ Form::text('descripcion', null, ['class' => 'form-control', 'id' => 'descripcion']) }}
</div>

<div class="form-group">
  {{ Form::label('file', 'Archivos Legales') }}
  {{ Form::file('file') }}
</div>

<div class="form-group">
  <button type="submit" class="btn btn-info ">
    <i class="fas fa-save"></i> Guardar
  </button>
</div>
