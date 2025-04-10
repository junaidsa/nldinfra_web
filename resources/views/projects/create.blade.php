@extends('layouts.app')
@section('main')
              <!-- Content -->
              <div class="container-xxl flex-grow-1 container-p-y">
                <!-- Sticky Actions -->
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                            <form action="{{url('project/store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                          <div class="col-lg-12">
                            <!-- 1. Delivery Address -->
                            <h5 class="mb-4 mt-4">Create Project</h5>
                            <div class="row g-3">
                              <div class="col-md-12">
                                <label class="form-label" for="fullname">Name</label>
                                <input type="text" id="project_name" class="form-control @error('project_name') is-invalid @enderror" placeholder="Project name" name="project_name"  value="{{old('project_name')}}" />
                                @error('project_name')
                                <div class=" invalid-feedback">{{ $message }}</div>
                                 @enderror
                              </div>

                              <div class="col-md-12">
                                <label class="form-label" for="phone">Title</label>
                                <input type="text" id="title" name="title"  class="form-control @error('title') is-invalid @enderror" placeholder="Title" value="{{old('title')}}"/>
                                @error('title')
                                <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                              </div>

                              <div class="col-12">
                                <label class="form-label" for="discripation">Discripation</label>
                                <textarea name="discripation"
                                  class="form-control @error('discripation') is-invalid @enderror" id="discripation" rows="2" placeholder="Discripation" value="{{old('discripation')}}"></textarea>
                                  @error('discripation')
                                  <div class=" invalid-feedback">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                <label class="form-label" for="pincode">Video link</label>
                                <input type="text" id="video_url" value="{{old('video_url')}}" class="form-control" />
                              </div>
                              <div class="col-md-6">
                                <label class="form-label" for="landmark">Image</label>
                                <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror"/>
                                @error('image')
                                <div class=" invalid-feedback">{{ $message }}</div>
                                 @enderror
                              </div>
                            <div class="action-btns">
                                <button class="btn btn-label-primary me-3">
                                  <span class="align-middle"> Back</span>
                                </button>
                                <button class="btn btn-primary">Create Project</button>
                              </div>
                            </div>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Sticky Actions -->
              </div>
              <!-- / Content -->
@endsection

