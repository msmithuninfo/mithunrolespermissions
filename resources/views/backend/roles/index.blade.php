@extends('backend.layouts.app')

@section('content')
<div class="myContent">
    <section class="myContent_header">
        <h1>Role List</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @can('create role')
        <div class="export__file">
            <a href="{{ route('roles.create') }}">Create Role</a>
        </div>
        @endcan

    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Permissions <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td> {{ $role->id }} </td>
                    <td> {{ $role->name }} </td>
                    <td>
                        
                            @foreach($role->permissions as $item)
                            <label style="background: #0b1cfb; color: white; padding: 2px 5px;
                            border-radius: 4px;">{{ $item->name }}</label>
                            @endforeach
                   
                    </td>
                    <td>
                        @can('edit role')
                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">
                            Edit
                        </a>

                        @endcan


                        @can('delete role')
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="d-inline">
                            @method("DELETE")
                            @csrf
                            <button class="btn btn-primary" data-tooltip-target="delete-button" data-bs-toggle="tooltip"
                                data-bs-placement="top">
                                Delete
                            </button>
                        </form>
                         @endcan
                         
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $roles->links('pagination::bootstrap-4') !!}
    </section>
</div>
@endsection