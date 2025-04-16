@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Testimonial / </span>Edit</h4>
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Testimonials</h5>
                    <div class="card-body">
                        <form action="{{ url('/admin/testimonials/update/' . $testimonials->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" value="{{$testimonials->id}}" name="id">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="project_id" class="form-label">Project</label>
                                        <select class="form-select @error('project_id') is-invalid @enderror" id="project_id" name="project_id" aria-label="Default select example">
                                            <option disabled selected>Select a project</option>
                                            @foreach($projects as $project)
                                                <option value="{{ $project->id }}" {{ $testimonials->project_id == $project->id ? 'selected' : '' }}>{{ $project->project_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('project_id')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                         @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="subject_name" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" placeholder="Enter  Name" value="{{ $testimonials->name }}"/>
                                        @error('name')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="designation" class="form-label">Designation</label>
                                        <input type="text" class="form-control @error('designation') is-invalid @enderror"
                                            id="designation" name="designation" placeholder="Enter  Designation" value="{{ $testimonials->designation }}"/>
                                        @error('designation')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="avatar" class="form-label">Image</label>
                                        <input type="file" class="form-control @error('avatar') is-invalid @enderror"
                                            id="avatar" name="avatar" />
                                        @error('avatar')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control @error('message') is-invalid @enderror" id="message"
                                            name="message" rows="5" placeholder="Message">{{ $testimonials->message }}</textarea>
                                        @error('message')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-3"><button class="btn btn-primary d-grid w-50">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
