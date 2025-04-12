@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">About/</span>Update</h4>
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">About</h5>
                    <div class="card-body">
                        <form id="jquery-val-form"  action="{{url('about-update')}}"  method="post">
                         @csrf
                             <div class="row mt-1">
                                 <div class="col-12">
                                     <h4>Update About</h4>
                                     <textarea class="textarea" name="about" id="about-update" cols="5" rows="5"
                                     placeholder="Write About">{{$ab->about ?? ''}}</textarea>
                                     @error('about')
                                     <div class="text text-danger">{{ $message }}</div>
                                     @enderror
                                     <div class="col-12 text-right float-right mt-2">
                                         <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-float waves-light">Submit </button>
                                         <a class="btn btn-primary" href="{{ url('/') }}">Cancel</a>

                                     </div>
                                 </div>
                                 <div class="col-3"></div>
                             </div>
                             <div class="row mt-1">
                                 <div class="col-md-12">
                                     <h4>About</h4>
                                     <div class="table-responsive">
                                                 {!! $ab->about !!}
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection
