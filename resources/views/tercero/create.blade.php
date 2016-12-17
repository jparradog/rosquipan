@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                	{!! Form::open(['method' => 'POST', 'route' => 'tercero.store']) !!}

                		{!! Field::text('primerNombre') !!}

                		{!! Field::text('segundoNombre') !!}

                		{!! Field::text('primerApellido') !!}

                		{!! Field::text('segundoApellido') !!}

                		{!! Field::text('numeroDocumento') !!}

                		{{-- {!! Field::checkbox('siCredito', 'value', true) !!} --}}

                		{!! Field::text('valorMaxCredito') !!}

                		{{-- {!! Field::checkbox('activo', 'value', true) !!} --}}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection