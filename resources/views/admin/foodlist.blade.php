@extends("admin.adminhome")
@section("content")
<div class="row">

    {{-- Table of Foods --}}
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Food Managent</h3>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th> ID</th>
                  <th> Name</th>
                  <th> Price</th>
                  <th> Description</th>
                  <th> Create at </th>
                  <th> Image</th>
                  <th> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($foods as $food)
                <tr>
                    <td> {{ $food->id }} </td>
                    <td> {{ $food->title }} </td>
                    <td> ${{ $food->price }} </td>
                    <td> {{ $food->description }} </td>
                    <td> <img src="foodimage/{{ $food->image }}" class="admin-image-preview"></td>
                    <td> {{ $food->created_at }} </td>
                    <td>
                        <a href="{{ url('/editfood', $food->id) }}">
                            <div class="badge badge-outline-primary">Edit</div>
                        </a>
                        <a href="{{ url('/deletefood', $food->id) }}">
                            <div class="badge badge-outline-danger">Delete</div>
                        </a>
                    </td>

                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    
</div>
@endsection