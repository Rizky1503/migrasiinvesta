@extends('page.index')

@section('content')

<div class="section">
  <table class="table table-striped checkout" data-effect="fade">
    <tr bgcolor="#77B6D0">
      <td colspan="4" align="center"><b>MATERI</b></td>
    </tr>
    <tr>
      <td width="15%" bgcolor="#DBEAF5" align="center"><b>Jenis Ujian</b></td>
      <td width="40%" bgcolor="#DBEAF5" align="center"><b>Topik</b></td>
      <td width="45%" bgcolor="#DBEAF5" align="center"><b>File Name</b></td>
    </tr>
    @foreach($materi as $key => $value)
    <tr bgcolor="#FFFFFF">
      <td align="center">{{$value->jenis_ujian_desc}}</td>
      <td align="">{{ $value->topik }}</td>
      <td align=""><a href="{{ asset('public/assets/materi/'.$value->link_url) }} " target="_blank">{{$value->file_name}}</a></td>
    </tr>
    @endforeach
  </table> 
</div>

@endsection