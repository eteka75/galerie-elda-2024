<a href="{{ route('shop.index', ['category' => $category['ID'], 'name' => $category['NOM']]) }}">
<div class="">
        <div class="category-card rounded-3">
            <img class="mx-auto img-fluid p-img-hover " src="{{ asset($category['imgPathLink']) }}"
                alt="{{ $category['NOM'] }}" />
            <a href="{{ route('shop.index', ['category' => $category['ID'], 'name' => $category['NOM']]) }}">
                <div class="category-card-back-drop">
                    <a class="text-white"
                            href="{{ route('shop.index', ['category' => $category['ID'], 'name' => $category['NOM']]) }}">
                            <h3 class=" d-block w-100">
                            {{ $category['NOM'] }}
                        
                        </h3>
                        </a>
                </div>
            </a>
        </div>
    </div>
</a>
