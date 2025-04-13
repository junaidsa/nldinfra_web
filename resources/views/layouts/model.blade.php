<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Contact Us</h5>
        </div>
        <div class="modal-body">
            <form action="{{url('add-contact')}}" method="POST">
                @csrf

                <div class="form-group mt-4">
                    <label for="name">Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name"
                        aria-describedby="emailHelp">
                        @error('name')
                        <div class=" invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email"
                        aria-describedby="emailHelp">
                        @error('email')
                        <div class=" invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label for="mobile">Mobile <span class="text-danger">*</span></label>
                    <input type="number" class="form-control  @error('mobile_number') is-invalid @enderror" id="mobile"
                        aria-describedby="emailHelp" name="mobile_number">
                        @error('mobile_number')
                        <div class=" invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label for="Message">Message</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4"></textarea>
                </div>
                @error('message')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
                {{-- <div class="row mt-4">
                    <input type="submit" value="Submit" class="btn me-3"
                        style="background: #FFEDBD;color:black;">
                </div> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"  style="background: #FFEDBD;color:black;">Close</button>
                <button type="submit" class="btn btn-primary"  style="background: #FFEDBD;color:black;">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
