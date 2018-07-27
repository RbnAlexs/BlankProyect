<div class="form-group">
    {!! Form::label('nombre', 'Nombre', ['for' => 'nombre'] ) !!}
    {!! Form::text('nombre', null , ['class' => 'form-control', 'id' => 'nombre', 'placeholder' => 'Escribe el nombre del pastel...' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('sabor', 'Sabor', ['for' => 'sabor'] ) !!}
    <select name="sabor" class="form-control">
        <option value="" disabled selected>Elige un sabor...</option>
        <option value="chocolate">Chocolate</option>
        <option value="vainilla">Vainilla</option>
        <option value="cheesecake">Cheesecake</option>
    </select>
</div>
