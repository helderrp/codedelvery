<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('user[name]', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Email','Email:') !!}
    {!! Form::text('user[email]', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Telefone','Telefone:') !!}
    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Endereço','Endereço:') !!}
    {!! Form::textarea('address', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('Estado','Estado:') !!}
    {!! Form::text('state', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Cidade','Cidade:') !!}
    {!! Form::text('city', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Zipcode','Cep:') !!}
    {!! Form::text('zipcode', null, ['class'=>'form-control']) !!}
</div>

{{--<div class="form-group">--}}
    {{--{!! Form::label('State','Estado:') !!}--}}
    {{--{!! Form::select('state', $state ,null, ['class'=>'form-control']) !!}--}}
{{--</div>--}}

{{--<div class="form-group">--}}
    {{--{!! Form::label('City','Cidade:') !!}--}}
    {{--{!! Form::select('city', [], null,['class'=>'form-control']) !!}--}}
{{--</div>--}}


{{--@section('post-script')--}}
    {{--<script type="text/javascript">--}}
        {{--$('select[name=state]').change(function () {--}}
            {{--var id = $(this).val();--}}
            {{--$.get('/admin/clients/get-cidades/' + id, function (cities) {--}}
                {{--$('select[name=city]').empty();--}}
                {{--$.each(cities, function (key, value) {--}}
                    {{--$('select[name=city]').append('<option value=' + value.id + '>' + value.city + '</option>');--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}