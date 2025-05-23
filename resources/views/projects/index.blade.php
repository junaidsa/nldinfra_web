@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Products List</h5>
                <div class="btn-container"><a href="{{ url('admin/project/create') }}" class="btn btn-success">Create Project</a>
                </div>
            </div>

            <div class="card-body">
                <div class="card-datatable table-responsive">
                    <table class="dt-responsive table" id="myTable">
                        <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Project Name</th>
                                <th>Title</th>
                                <th>Discripation</th>
                                {{-- u654900760_nldinfra
                                u654900760_admin
                                u8~zP2]B
                                 --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ @$p->project_name }}</td>
                                    <td>{{ @$p->title }}</td>
                                    <td>{{ @$p->discripation }}</td>
                                    <td>
                                        <a href="{{url('admin/project/gallery/'.$p->id)}}" class="edit-btn ">Gallery</a>
                                        <a href="{{url('admin/project/amenitles/'.$p->id)}}" class="edit-btn ">Amenitles</a>
                                        <a href="{{url('admin/project/featured/'.$p->id)}}" class="edit-btn ">Featured</a>
                                        <br>
                                        <a href="{{url('admin/project/'.$p->id)}}" class="edit-btn ">Edit</a> | <a href="javascript:void(0) " class="delete-btn" name="{{ $p->project_name }}"
                                            id="{{ $p->id }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Responsive Datatable -->
    </div>
@endsection

@section('link-js')
    <!-- Flat Picker -->
    <script src="{{ asset('public') }}/assets/vendor/libs/moment/moment.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <!-- Page JS -->
    <script src="{{ asset('public') }}/assets/js/tables-datatables-advanced.js"></script>
    <script src="{{ asset('public') }}/assets/js/dataTables.min.js"></script>
@endsection
@section('javascript')
    <script>
        let table = new DataTable('#myTable');
        $("body").on('click', '.delete-btn', function() {
            var id = $(this).attr('id');
            var name = $(this).attr('name');

            Swal.fire({
                html: `Are you really want to delete?`,
                icon: "info",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "Ok, got it!",
                cancelButtonText: 'Nope, cancel it',
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: 'btn btn-danger'
                }
            }).then(function(result) {
                if (result.value) {
                    // Make DELETE request via AJAX
                    $.ajax({
                        url: "{{ url('/admin/project/destroy') }}/" + id,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}", // Ensure you pass the CSRF token
                        },
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: 'Project has been deleted.',
                                timer: 1500
                            }).then(function() {
                                location.reload();
                            });
                        },
                        error: function(response) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An error occurred while deleting the Project.',
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
