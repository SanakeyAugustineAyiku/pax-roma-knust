@extends('admin.dashboard')
@section('styles')
    <style>
      table, th, td {
        border: 1px solid black;
     }
    </style>
@endsection
@section('dashcontent')
@if ($admins)

    <table>
        <thead>
          <tr>
              <th>Admin Detials</th>
              <th></th>
              {{-- <th></th> --}}
          </tr>
        </thead>

        <tbody>
         @foreach ($admins as $admin)
            <tr>
                <td>
                    <span><b>Name: </b> {{$admin->name}}</span><br>
                    <span><b>Email: </b> {{$admin->email}}</span><br>
                    <span><b>Tenure: </b> {{$admin->period}}</span><br>
                    <span><b>Role: </b> {{$admin->roles->first()->role}}</span><br>
                    <span>
                        <a class="btn-floating waves-effect waves-light btn red modal-trigger" href="{{"#edit-admin.$admin->id"}}">
                            <i class="material-icons">edit</i>
                        </a>
                    </span>
                    <span>
                        <a class="btn-floating waves-effect waves-light btn red modal-trigger" href="{{route('admin.delete.admin',[$admin->id])}}"
                        onclick="event.preventDefault();document.getElementById('delete-admin-form').submit();">
                            <i class="material-icons">delete</i>
                        </a>
                        <form id="delete-admin-form" action="{{ route('admin.delete.admin',[$admin->id]) }}" method="POST" style="display: none;">
                            @csrf @method('DELETE')
                        </form>
                    </span>
                </td>
                <td class="center"><img src="{{asset('/images/LOGO_PAX.png')}}" style="width:100px;height:100px;" alt="avatar"></td>
              </tr>
              <div id="{{"edit-admin.$admin->id"}}" class="modal">
                <div class="modal-content">
                    <h4>Modal Header</h4>
                    <p>A bunch of text</p>
                </div>
                <div class="modal-footer">
                    <a href="{{route('admin.edit.admin',[$admin->id])}}" class="modal-close waves-effect waves-green btn-flat"
                    onclick="event.preventDefault();document.getElementById('edit-admin-form').submit();"><i class="material-icons">save</i></a>
                        <form id="edit-admin-form" action="{{ route('admin.edit.admin',[$admin->id]) }}" method="POST" style="display: none;">
                            @csrf @method('PUT')
                        </form>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
                </div>
                </div>
         @endforeach
        </tbody>
      </table>
@else
    no admins
@endif
@endsection
@section('scripts')
    @parent
    $('.modal').modal();
@endsection
