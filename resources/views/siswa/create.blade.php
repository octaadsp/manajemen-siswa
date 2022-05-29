@extends ('template')

@section ('main')
    <div id="siswa">
        <h2>Tambah Siswa</h2>
        {!! Form::open(['url' => 'siswa']) !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group">
                {!! Form::label ('nisn', 'NISN:', ['class' => 'control-label']) !!}
                {!! Form::text ('nisn', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('nama_siswa', 'Nama:', ['class' => 'control-label']) !!}
                {!! Form::text ('nama_siswa', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('tanggal_lahir', 'Tanggal Lahir:', ['class' => 'control-label '])!!}
                {!! Form::date('tanggal_lahir', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class' => 'control-label']) !!}
                <div class="radio">
                    <label>{!! Form:: radio('jenis_kelamin', 'L') !!} Laki-laki</label>
                 </div>
            
                <div class="radio">
                    <label>{!! Form:: radio('jenis_kelamin', 'P') !!} Perempuan</label>
                </div>
            </div>

                <div class="form-group">
                    {!! Form:: submit('Tambah siswa', ['class' => 'btn btn-primary form-control']) !!}
                </div>

        {!! Form::close() !!}
    </div>

@stop

@section ('footer')
    <div id="footer">
    <p>&copy; 2019 laravelapp</p>
    </div>
@stop