
@if($products && count($products)>0)
<div class="bg-white  py-4">
    <div class="container py-1">
        <div class="row">
            <div class="col-md-12">
                <h2 class="line-header text-center text-md-start   mb-2">Autres articles</h2>            
            </div>
        </div>
        <div>
            <div class="py-2 text-uppercase  ">
                <div class="row mt-2  " >
                        @foreach ($products as $p)
                        @if(!(isset($pid) && $pid===$p['CodeManuel']))
                        <div class="col-md-4 col-lg-3 col-sm-6 col-6 px-2 px-lg-3">
                            @include('partials.includes.card-produit',['product'=>$p])
                        </div>
                        @endif
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif