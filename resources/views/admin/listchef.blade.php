@extends("admin.adminhome")
@section("content")
<div class="row">

    {{-- Table of Foods --}}
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Chefs List</h3>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th> ID</th>
                  <th> Name</th>
                  <th> Gender</th>
                  <th> Position</th>
                  <th> Facebook Link</th>
                  <th> Instagram Link</th>
                  <th> YouTube Link</th>
                  <th> Image</th>
                  <th> Create at </th>
                  <th> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($chefs as $chef)
                <tr>
                    <td> {{ $chef->id }} </td>
                    <td> {{ $chef->name }} </td>
                    <td> {{ $chef->gender }} </td>
                    <td> {{ $chef->position }} </td>
                    <td> {{ $chef->fblink }} </td>
                    <td> {{ $chef->iglink }} </td>
                    <td> {{ $chef->ytlink }} </td>
                    <td> <img src="chefimage/{{ $chef->image }}" alt="" class="admin-image-preview"></td>
                    <td> {{ $chef->created_at }} </td>
                    <td>
                        <a href="{{ url('/editchef', $chef->id) }}">
                            <div class="badge badge-outline-primary">Edit</div>
                        </a>
                        <a href="{{ route("admin.deletechef", $chef->id) }}">
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