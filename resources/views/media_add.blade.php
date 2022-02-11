@extends('master')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="card mt-3">
                    @if (session('insDone'))
                        <div class="alert alert-success">
                            {{ session('insDone') }}
                        </div>
                    @endif

                    <div class="card-header bg-info">
                        <h5 class="card-title">channel add form</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('media-save') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">channel name</label>
                                <input type="text" class="form-control" name="channel_name">
                                @error('channel_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-info">add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


