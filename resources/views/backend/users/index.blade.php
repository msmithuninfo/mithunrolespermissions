@extends('backend.layouts.app')

@section('content')
<div class="myContent">
    <section class="myContent_header">
        <h1>User List</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
            <img src="{{ asset('backend/images/search.png') }}" alt="">
        </div>

        @can('create user')
        <div class="export__file">
            <a href="{{ route('users.create') }}">Create User</a>
        </div>
        @endcan
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Role <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Created at <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    @foreach($user->roles as $role)
                    <td> {{ $role->name }} </td>
                    @endforeach
                    <td>
                        {{ $user->created_at->diffForHumans() }}
                    </td>
                    <td>
                        <div class="flex items-center">
                            @if($user->status)
                            <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                            @else
                            <div class="h-2.5 w-2.5 rounded-full bg-red-400 mr-2"></div> Inactive
                            @endif
                        </div>
                    </td>
                    <td>
                        @can('edit user')
                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">
                            Edit
                        </a>
                        @endcan

                        @can('delete user')
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-primary" data-tooltip-target="delete-button" data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                onclick="return confirm('Are you sure you want to delete this item?');">
                                Delete
                            </button>
                        </form>
                        @endcan
                    </td>
                    
                </tr>
                @endforeach
                
            </tbody>
            
        </table>
        {!! $users->links('pagination::bootstrap-4') !!}
    </section>
</div>
@endsection