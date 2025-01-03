@extends('layouts.app')

@section('title', 'Add Member')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Create New Member</h4>
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

                        <form action="{{ route('members.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter full name" value="{{ old('name') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email address" value="{{ old('email') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="profession" class="form-label">Profession</label>
                                <input type="text" name="profession" id="profession" class="form-control" placeholder="Enter profession" value="{{ old('profession') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" name="company" id="company" class="form-control" placeholder="Enter company" value="{{ old('company') }}">
                            </div>

                            <div class="mb-3">
                                <label for="linkedin_url" class="form-label">Linkedin profile</label>
                                <input type="text" name="linkedin_url" id="linkedin_url" class="form-control" placeholder="Enter linkedin profile URL" value="{{ old('linkedin_url') }}">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" name="status" id="status" value="{{ old('status') }}">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                           
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('members.index') }}">Back to List</a>
                                <button type="submit" class="btn btn-primary rounded-pill">Create Member</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection