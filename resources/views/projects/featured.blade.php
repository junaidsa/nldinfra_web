@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Sticky Actions -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="mb-4 mt-4">Create Featured Section</h5>
                                <div class="row g-3">
                                    <form  action="{{ route('featured.update', $project->id ?? 0) }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $id }}">

                                        <div class="col-md-12">
                                            <label class="form-label" for="title">Title</label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                   value="{{ old('title', $project->title ?? '') }}" />
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label" for="discripation">Description</label>
                                            <textarea name="description"
                                                      class="form-control textarea @error('discripation') is-invalid @enderror"
                                                      id="description" rows="2" placeholder="Description">{{ old('description', $project->description ?? '') }}</textarea>
                                            @error('description')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label" for="image">Image</label>
                                        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror"/>
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    @if(!empty($project?->image))
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">&nbsp;&nbsp;&nbsp;</label>

                                                <img src="{{ asset('public/files/' . $project->image) }}" alt="Image"
                                                     style="max-width: 150px; height: auto; border-radius: 4px;">
                                        </div>
                                        @endif
                                </div>
                                        <div class="action-btns mt-3">
                                            <button class="btn btn-primary" type="submit">Save Change</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- /Sticky Actions -->
    </div>
    <!-- / Content -->
@endsection

