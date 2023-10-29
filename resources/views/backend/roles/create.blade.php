@extends('backend.layouts.app')

@section('content')
<div class="myContent">
    <section class="myContent_header">
        <h1>Create New Role</h1>
        @include('backend.layouts.error')
        <div class="export__file">
            <a href="{{ route('roles.index') }}">Role List</a>
        </div>
    </section>
    <section class="table__body" style="width: 50%; margin: auto; box-sizing: border-box; overflow: hidden;">
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
    
    
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permissions :</strong>
                        
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1">
                            <label class="form-check-label" for="checkPermissionAll">All</label>
                        </div>
                        <hr>
                        @foreach($permissions as $permission)
                            {{-- <input type="checkbox" name="permissions[]" id="permission{{ $permission->id }}" value="{{ $permission->id }}">
                            <label for="permission{{ $permission->id }}">
                                {{ $permission->name }}
                                <br/>
                            </label>
                            <br/> --}}
                            <div class="form-check">
                                <input type="checkbox" name="permissions[]" class="form-check-input chk" id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                                <label class="form-check-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    
    
        </form>
    </section>
</div>
@endsection
