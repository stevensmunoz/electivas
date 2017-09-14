<div class="form-group">
	{!! Form::label('username', 'Nombre de Usuario') !!}
	{!! Form::text('username', null, ['class' => 'form-control', 'required' => true]) !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Contraseña') !!}
	{!! Form::password('password', ['class' => 'form-control', 'required' => true]) !!}
</div>

<div class="form-group">
	{!! Form::label('password_confirmation', 'Confirme Contraseña') !!}
	{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirme Contraseña', 'required' => true]) !!}
</div>