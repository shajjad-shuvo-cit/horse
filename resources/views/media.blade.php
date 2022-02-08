@extends('master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-8 m-auto">
      @foreach($tv_channels as $tv)
        <div class="card my-2">
          <div class="card-header">

            {{ $loop->index + 1 }}
          </div>
          <div class="card-body">
            <p class="{{ ($loop->odd) ? 'text-danger' : 'text-success'  }}" > {{ $tv }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
