@extends('backend.layouts.app')

@section('content')
<div class="myContent">
    <section class="myContent_header">
        <h1>Permission List</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @can('create permission')
        <div class="export__file">
            <a href="{{ route('permissions.create') }}">Create Permission</a>
        </div>
        @endcan

    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td> {{ $permission->id }} </td>
                    <td> {{ $permission->name }} </td>
                    
                    <td>
                        @can('edit permission')
                        <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">
                            Edit
                        </a>
                        @endcan
                        @can('delete permission')
                        {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id], 'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        @endcan
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $permissions->links('pagination::bootstrap-4') !!}
    </section>
</div>
@endsection