@extends("layouts.public")

@section("content")
<div class="container mt-3">
  <div class="row g-4 d-flex justify-content-center">
    @foreach ($movies as $singleMovie)
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100" style="width: 18rem;">
          <div class="card-body text-center">
            <h5 class="card-title fw-bold fs-3 mb-4">{{ $singleMovie['title']}}</h5>
            <p class="card-text">Original title: {{ $singleMovie['original_title']}}</p>
            <p class="card-text">Nationality: {{ $singleMovie['nationality']}}</p>
            <p class="card-text">Release date: {{ $singleMovie['date']}}</p>
            <p class="card-text">Vote {{ $singleMovie['vote']}}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection