<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Email','Email:') !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Phone','Telefone:') !!}
    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Address','Endereço:') !!}
    {!! Form::text('address', null, ['class'=>'form-control']) !!}
</div>

{{--<div class="form-group">--}}
    {{--{!! Form::label('State','Estado:') !!}--}}
    {{--{!! Form::select('state', null ,null, ['class'=>'form-control']) !!}--}}
{{--</div>--}}

<div class="form-group">
    {!! Form::label('City','Cidade:') !!}
    {!! Form::text('city', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Zipcode','Cep:') !!}
    {!! Form::text('zipcode', null, ['class'=>'form-control']) !!}
</div>
