@extends("admin.adminhome")
@section("content")
<div class="row ">
    {{-- Table of Users --}}
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">User Management</h3>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th> ID</th>
                  <th> User Name</th>
                  <th> Email</th>
                  <th> Create at </th>
                  <th> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->created_at }} </td>
                    <td>
                      @if( $user->usertype == 0 )
                        <a href="{{ url('/deleteuser', $user->id) }}">
                            <div class="badge badge-outline-danger">Delete</div>
                        </a>
                        @else
                        <div class="badge badge-outline-success disabled">Admin</div>
                      @endif
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