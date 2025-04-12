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
                                <h5 class="mb-4 mt-4">Create Amenitles</h5>
                                <div class="row g-3">
                                    <form id="amenityForm" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="project_id" value="{{ $id }}">

                                        <div class="col-md-12">
                                            <label class="form-label" for="title">Title</label>
                                            <input type="text" name="title" id="title" class="form-control" />
                                        </div>

                                        <div class="col-md-12 col-sm-6 col-6 mb-2">
                                            <label class="form-label">Image/Icon</label>
                                            <input type="file" name="attachment" class="form-control" />
                                        </div>

                                        <div class="action-btns mt-3">
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
                        <h5 class="mt-4">Amenities</h5>
<div class="row">
    @foreach($amenitles as $amenity)
        <div class="col-md-3 mb-3 amenity-card" data-id="{{ $amenity->id }}">
            <div class="card">
                <img src="{{ asset($amenity->icon) }}" class="card-img-top" style="height: 150px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6>{{ $amenity->title }}</h6>
                    <button class="btn btn-danger btn-sm delete-amenity" data-id="{{ $amenity->id }}">Delete</button>
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
    document.getElementById('amenityForm').addEventListener('submit', function(e){
        e.preventDefault();

        let formData = new FormData(this);

        fetch("{{ route('project.amenitles.upload') }}", {
            method: "POST",
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }).then(res => res.json()).then(data => {
            if(data.success) location.reload();
        });
    });

    document.querySelectorAll('.delete-amenity').forEach(button => {
        button.addEventListener('click', function(){
            const id = this.dataset.id;

            fetch(`{{ url('admin/project/amenitles/delete') }}/${id}`, {
                method: "DELETE",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(res => res.json()).then(data => {
                if(data.success) document.querySelector(`.amenity-card[data-id="${id}"]`).remove();
            });
        });
    });
    </script>


@endsection
