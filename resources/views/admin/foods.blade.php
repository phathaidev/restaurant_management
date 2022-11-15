@extends("admin.adminhome")
@section("content")
<div class="row">

    {{-- Form Insert Food --}}
  <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
                <h4 class="card-title">Food Management</h4>
            </div>
            <div class="col-6">
              <a href="{{ route("admin.foodlist") }}" class="badge badge-outline-primary float-right">Show all Foods</a>
            </div>
          </div>
          <form class="forms-sample" action="{{ route("admin.foodupload") }}" method="post" enctype="multipart/form-data">
              @csrf
              {{-- @method("POST") --}}

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter Food Title" value="" required>
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" class="form-control" name="price" placeholder="Enter Price" required>
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="" rows="1" name="description" placeholder="Enter Description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-dark">Cancel</button>
          </form>
        </div>
      </div>
  </div>
</div>

@endsection