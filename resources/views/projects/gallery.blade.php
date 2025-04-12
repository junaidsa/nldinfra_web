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
                                <h5 class="mb-4 mt-4">Create Gallery</h5>
                                <div class="row g-3">
                                    <form id="galleryForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="project_id" value="{{ $id }}">

                                    <div class="col-md-12 col-sm-12 col-12 mb-2">
                                        <label class="form-label">Gallery</label>
                                        <input type="file" name="attachment[]" multiple id="galleries"
                                            class="form-control" data-max-file-size="10MB" data-max-files="5">
                                        @error('galleries')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                        <input type="hidden" name="gallery_path" id="gallery_ids">
                                    </div>
                                    <div class="action-btns">
                                        <button class="btn btn-label-primary me-3">
                                            <span class="align-middle"> Back</span>
                                        </button>
                                        <button class="btn btn-primary" type="submit">Upload</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="mt-4">Our Gallery</h5>
                        <div class="row">
                            @foreach($galleries as $gallery)
                                <div class="col-md-3 mb-3 gallery-image" data-id="{{ $gallery->id }}">
                                    <div class="card">
                                        <img src="{{ asset($gallery->image) }}" class="card-img-top" style="height: 150px; object-fit: cover;">
                                        <div class="card-body text-center">
                                            <button class="btn btn-danger btn-sm delete-image" data-id="{{ $gallery->id }}">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Sticky Actions -->
    </div>
    <!-- / Content -->
@endsection
@section('javascript')
<script>
    document.getElementById('galleryForm').addEventListener('submit', function(e){
        e.preventDefault();

        let formData = new FormData(this);

        fetch("{{ route('project.gallery.upload') }}", {
            method: "POST",
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }).then(res => res.json()).then(data => {
            if(data.success) location.reload();
        });
    });

    document.querySelectorAll('.delete-image').forEach(button => {
        button.addEventListener('click', function(){
            const id = this.dataset.id;

            fetch(`{{ url('admin/project/gallery/delete') }}/${id}`, {
                method: "DELETE",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(res => res.json()).then(data => {
                if(data.success) document.querySelector(`.gallery-image[data-id="${id}"]`).remove();
            });
        });
    });
    </script>

@endsection
