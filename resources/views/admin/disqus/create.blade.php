@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Disqus</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('disqus.store', $forum->id) }}">
                            @csrf

                            <div class="form-group">
                                <label for="body">Disqus Body</label>
                                <textarea class="form-control" id="body" name="body" rows="5"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
