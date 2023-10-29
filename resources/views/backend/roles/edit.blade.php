@extends('backend.layouts.app')

@section('content')
<div class="myContent">
    <section class="myContent_header">
        <h1>Edit Role</h1>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
        <div class="export__file">
            <a href="{{ route('roles.index') }}">Role List</a>
        </div>
    </section>
    <section class="table__body" style="width: 50%; margin: auto; box-sizing: border-box; overflow: hidden;">
        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')
    
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" id="name" value="{{ old('name', $role->name) }}" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permission:</strong>
                        <br/>
                        @foreach($permissions as $permission)
                            <input type="checkbox" name="permissions[]" id="permission{{ $permission->id }}" value="{{ $permission->id }}" @if(in_array($permission->id, $data)) checked @endif>
                            <label for="permission{{ $permission->id }}">
                                {{ $permission->name }}
                                <br/>
                            </label>
                            <br/>
                        @endforeach
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Update Role</button>
                </div>
            </div>
    
    
        </form>
    </section>
</div>
@endsection