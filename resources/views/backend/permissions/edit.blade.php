@extends('backend.layouts.app')

@section('content')
<div class="myContent">
    <section class="myContent_header">
        <h1>Edit Permission</h1>

        <div class="export__file">
            <a href="{{ route('permissions.index') }}">Permission List</a>
        </div>
    </section>
    <section class="table__body" style="width: 50%; margin: auto; box-sizing: border-box; overflow: hidden;">
        <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
            @csrf
            @method('PUT')
    
    
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $permission->name }}" class="form-control" placeholder="Name">
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