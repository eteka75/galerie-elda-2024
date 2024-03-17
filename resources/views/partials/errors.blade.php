<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(count($errors) > 0)
                <div class="alert  alert-danger">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @foreach($errors->all() as $error)
                    <div> {!! $error !!}</div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
