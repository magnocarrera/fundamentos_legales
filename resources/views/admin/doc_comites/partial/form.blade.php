{{ Form::hidden('user_id', auth()->user()->id )}}

{{ csrf_field() }}

<div class="form-group">
    {{ Form::label('committe_id', 'Tipo de Comité') }}
    {{ Form::select('committe_id', $committes, null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('nro_norma', 'Número Norma') }}
    {{ Form::text('nro_norma', null, ['class' => 'form-control', 'id' => 'cod_norma']) }}
</div>

<div class="form-group">
    {{ Form::label('ano', 'Año') }}
    {{ Form::text('ano', null, ['class' => 'form-control', 'id' => 'ano']) }}
</div>

<div class="form-group">
    {{ Form::label('descripcion', 'Descripción') }}
    {{ Form::text('descripcion', null, ['class' => 'form-control', 'id' => 'descripcion']) }}
</div>

<div class="form-group">
    {{ Form::label('cod_norma', 'Código Norma') }}
    {{ Form::text('cod_norma', null, ['class' => 'form-control', 'id' => 'cod_norma']) }}
</div>

<div class="form-group">
    {{ Form::label('type', 'Estado: ') }}
    <label>
      {{ Form::radio('type', 'obligatorio') }} Obligatorio
    </label>
    <label>
      {{ Form::radio('type', 'gratuito') }} Gratuito
    </label>
  </div>

<div class="form-group">
  {{ Form::label('file', 'Cargar norma') }}
  {{ Form::file('file') }}
</div>

<div class="form-group">
  <button type="submit" class="btn btn-info ">
    <i class="fas fa-save"></i> Guardar
  </button>
</div>
