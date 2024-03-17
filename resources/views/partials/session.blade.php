<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('success'))
            <div class="alert alert-success">
                {!! session()->get('success') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('error'))
            <div class="alert alert-danger">
                {!! session()->get('error') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session()->has('warning'))
            <div class="alert alert-warning">
                {!! session()->get('warning') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
</div>