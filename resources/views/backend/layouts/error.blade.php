@if ($errors->any())
    <div class="alert alert-danger">
        <div>
            @foreach ($errors->all() as $error)
                <li style="list-style-type: none">{{ $error }}</li>
            @endforeach
        </div>
    </div>
@endif