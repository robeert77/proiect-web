@extends('layouts.app')

@section('title', 'Add Story')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Create New Story</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('success-stories.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="member_id" value="{{ request('member_id') }}">

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" value="{{ old('title') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="story" class="form-label">Story</label>
                                <textarea name="story" id="story" class="form-control" placeholder="Enter story" value="{{ old('story') }}"  style="height: 100px"></textarea>
                            </div>
                          
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('success-stories.index', ['member_id' => request('member_id')]) }}">Back to List</a>
                                <button type="submit" class="btn btn-primary rounded-pill">Create Story</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection