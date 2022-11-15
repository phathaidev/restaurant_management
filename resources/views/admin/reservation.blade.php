@extends("admin.adminhome")
@section("content")
<div class="row">

    {{-- Table of Foods --}}
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Reservation Management</h3>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th> ID</th>
                  <th> Name</th>
                  <th> Email</th>
                  <th> Phone</th>
                  <th> number of guest</th>
                  <th> Date </th>
                  <th> Time </th>
                  <th> Message</th>
                  <th> Create at </th>
                  <th> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($reservations as $reservation)
                <tr>
                    <td> {{ $reservation->id }} </td>
                    <td> {{ $reservation->name }} </td>
                    <td> {{ $reservation->email }} </td>
                    <td> {{ $reservation->phone }} </td>
                    <td> {{ $reservation->numberguest }} </td>
                    <td> {{ $reservation->date }} </td>
                    <td> {{ $reservation->time }} </td>
                    <td> {{ $reservation->message }} </td>
                    <td> {{ $reservation->created_at }} </td>
                    <td>
                        <a href="{{ route("admin.deletereservation", $reservation->id) }}">
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