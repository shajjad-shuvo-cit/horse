@extends('master')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="card my-3">
          <div class="card-header">
            <h2 class="text-info">{{ $headline }}</h2>
          </div>
          <div class="card-body">
            <p>{{ $para }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
