<div class="form-group">
    {{ Form::text('ta_sempro_id',$sempro[0]->id, ['class' => 'form-control','id' => 'nama', 'placeholder' => 'Nama Mahasiswa', 'hidden'=>'hidden']) }}
</div>
<div class="form-group">
    <label for="nama">Nama Mahasiswa</label>
    {{ Form::text('nama',$sempro[0]->nama, ['class' => 'form-control','id' => 'nama', 'placeholder' => 'Nama Mahasiswa', 'readonly' =>'readonly']) }}
</div>

<div class="form-group">
    <label for="semhas_at">Tanggal</label>
    {{ Form::input('date','semhas_at', null, ['class' => 'form-control', 'id' => 'semhas_at', 'placeholder' => 'Tanggal Semhas']) }}
</div>

<div class="form-group">
    <label for="semhas_time">Jam</label>
    {{ Form::input('time','semhas_time', null, ['class' => 'form-control', 'id' => 'nim', 'placeholder' => 'Jam']) }}
</div>

<div class="form-group">
    <label for="ruangan_id">Ruangan</label>
    {{ Form::select('ruangan_id', $ruangan, null, ['class' => 'form-control', 'id' => 'nama', 'placeholder' => 'Ruangan']) }}
</div>

<div class="form-group">
    {{ Form::hidden('status', '1', null, ['class' => 'form-control', 'id' => 'status', 'hidden'=>'hidden']) }}
</div>

<div class="form-group">
    <label for="rekomendasi">Rekomendasi</label>
    {{ Form::select('rekomendasi', $rekomendasi, null, ['class' => 'form-control', 'id' => 'rekomendasi', 'placeholder' => 'Rekomendasi']) }}
</div>

<div class="form-group">
    <label for="sidang_deadline_at">Tenggat Waktu Sidang</label>
    {{ Form::date('sidang_deadline_at', null, ['class' => 'form-control', 'id' => 'sidang_deadline_at', 'placeholder' => 'Tenggat Waktu Sidang']) }}
</div>

<div class="form-group">
    <label for="file_ba_seminar">File BA Seminar</label>
    {{ Form::file('file_ba_seminar', null, ['class' => 'form-control', 'id' => 'file_ba_seminar', 'placeholder' => 'File BA Seminar']) }}
</div>

<div class="form-group">
    <label for="file_laporan_ta">File Laporan TA</label>
    {{ Form::file('file_laporan_ta', null, ['class' => 'form-control', 'id' => 'file_laporan_ta', 'placeholder' => 'File Laporan TA']) }}
</div>

