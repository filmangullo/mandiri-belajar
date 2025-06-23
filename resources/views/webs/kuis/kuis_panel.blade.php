@extends('layouts.web')

@section('courses')

menu-active

@endsection

@section('header')

<h1 class="text-white">
    Kuis Panel
</h1>
<p>{{ $forum->kelasMataPelajarans['nama'] }}</p>
<div class="link-nav">
    <span class="box">
        <a href="/">Home </a>
        <i class="lnr lnr-arrow-right"></i>
        <a href="{{ route('index.courses') }}">Courses</a>
        <i class="lnr lnr-arrow-right"></i>
        <a href="{{ route('show.courses', $forum->kelasMataPelajarans['id'] )}}">{{ $forum->kelasMataPelajarans['nama'] }}</a>
        <i class="lnr lnr-arrow-right"></i>
        <a href="{{ route('index.pertemuan', $forum->id )}}">{{ $forum['nama'] }}</a>
        <i class="lnr lnr-arrow-right"></i>
        <a href="{{ route('index.kuispanel', $forum->id )}}">Kuis Panel</a>
    </span>
</div>
@endsection

@section('content')
<!-- Start Align Area -->
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            @include('layouts.alert')
            @if (auth::user()->role == 'pengajar')
            <div class="row mb-10">
                <div class="col-md-12 text-center">
                    <a href="javascript:void(0);" data-href="{{ route('create_soal.kuispanel', $forum->id) }}"
                        class="primary-btn text-center mb-10 openPopup">Buat Soal Kuis</a>
                </div>

                <div class="col-md-4 text-center">
                  <form action="{{ route('update_panel.kuispanel', $panel->id ) }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <label for="cars">Status Kuis :</label>
                    <select id="open_kuis" name="open_kuis" class="form-control">
                      <option value="true" {{ $panel->open_kuis == true ? "selected" : ""}}>Open</option>
                      <option value="false" {{ $panel->open_kuis == false ? "selected" : ""}}>Close</option>
                    </select>
                </div>
                <div class="col-md-4 text-center">
                    <label for="cars">Launch date:
                        {{ $panel->launch_date == null ? "Belum set" :  date('d F Y - H:i a',strtotime($panel->launch_date)) }}</label>
                    <input type="datetime-local" id="launch_date" name="launch_date" value="{{ $panel->launch_date }}"
                        class="form-control">
                </div>
                <div class="col-md-4 text-center">
                    <label for="cars">Dealine:
                        {{ $panel->deadline == null ? "Belum set" :  date('d F Y - H:i a',strtotime($panel->deadline)) }}</label>
                    <input type="datetime-local" id="deadline" name="deadline" value="{{ $panel->deadline }}"
                        class="form-control">
                </div>
                <div class="col-md-6 text-center mt-10">
                  <label for="cars">Jumlah Soal Yg akan di Kerjakan:</label>
                    <input type="number" id="open_soal" name="open_soal" value="{{$panel->open_soal}}" class="form-control">
                </div>
                <div class="col-md-6 text-center mt-10">
                  <label for="cars">Save Setelah Melakukan Perubahan..!</label>
                    <button type="submit" class="genric-btn primary btn-block medium radius form-control ">Save</button>
                </div>
                </form>
            </div>

            @endif

          <h3 class="mb-10">Soal Kuis</h3>
          <div class="row">
            @foreach ($kuis as $key => $value)
            <div class="col-lg-12">
              <div class="row mb-10">
                  <div class="col-md-2 offset-md-8">
                      <a href="javascript:void(0);" data-href="{{ route('edit_soal.kuispanel', $value->id) }}" class="genric-btn info btn-block text-center openPopup">Edit</a>
                  </div>
                  <div class="col-md-2">
                      <form action="{{ route('destroy_soal.kuispanel', $value->id )}}" method="post">
                          <input class="genric-btn danger btn-block text-center" type="submit" value="Delete"
                              onclick="return confirm('Are you sure you want to delete this item?');" />
                          @method('delete')
                          @csrf
                      </form>
                  </div>
              </div>
              <blockquote class="generic-blockquote">
                <p>{{ $key + 1 }}. {{ $value->soal }}</p>
                <?php foreach ($value->forumKuisImgs as $key => $img): ?>
                      <img src="{{asset('storage/'.$img->img)}}" alt="Girl in a jacket" width="50%">
                <?php endforeach; ?>
                <ol>
                  <li>a. {{ $value->pilihan_a }}</li>
                  <li>b. {{ $value->pilihan_b }}</li>
                  <li>c. {{ $value->pilihan_c }}</li>
                  <li>d. {{ $value->pilihan_d }}</li>
                  <li>e. {{ $value->pilihan_e }}</li>
                </ol>
                <strong>Jawaban : {{ $value->jawaban }}</strong>
              </blockquote>
            </div>
            @endforeach
          </div>
        </div>
    </div>
</div>
<!-- End Align Area -->
@include('layouts.modal')
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('.openPopup').on('click', function () {
            var dataURL = $(this).attr('data-href');
            $('.modal-dialog').load(dataURL, function () {
                $('#myModal').modal({
                    show: true
                });
            });
        });
    });

</script>
@endsection
