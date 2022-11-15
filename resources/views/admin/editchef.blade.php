<base href="/public">
@extends("admin.adminhome")
@section("content")
<div class="row">

    {{-- Form Insert Food --}}
  <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
                <h4 class="card-title">Chef Updating</h4>
            </div>
            <div class="col-6">
              <a href="{{ route("admin.listchef") }}" class="badge badge-outline-primary float-right">Show all Chefs</a>
            </div>
          </div>
          <form class="forms-sample" action="{{ route("admin.updatechef", $chef->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              {{-- @method("POST") --}}

            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ $chef->name }}" required>
            </div>
            <div class="form-group">
              <label for="price">Gender</label> <br>
              <input type="radio" name="gender" value="Male"> Male
              <input type="radio" name="gender" id="" value="Female"> Female
            </div>
           <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="title">Type of Chef</label>
                <input type="text" class="form-control" name="position" placeholder="Enter Position" value="{{ $chef->position }}" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="title">Facebook Link</label>
                <input type="text" class="form-control" name="fblink" placeholder="Enter FB Link" value="{{ $chef->fblink }}" required>
              </div>
            </div>
           </div>
            <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="title">Instagram Link</label>
                    <input type="text" class="form-control" name="iglink" placeholder="Enter IG Link" value="{{ $chef->iglink }}" required>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="title">YouTube Link</label>
                    <input type="text" class="form-control" name="ytlink" placeholder="Enter YT Link" value="{{ $chef->ytlink }}" required>
                  </div>
                </div>
            </div>
            <div class="form-group">
              <label for="image">Profile Image</label>
              <img src="chefimage/{{ $chef->image }}" class="uploaded-img" alt="">
              <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary me-2">Save</button>
            <button class="btn btn-dark">Cancel</button>
          </form>
        </div>
      </div>
  </div>
</div>

@endsection