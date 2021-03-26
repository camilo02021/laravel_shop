<div class="row">
    <div class="col-lg-12">
        <div class="featured__controls">
            <ul>
                <li class="active" data-filter="*">Todos</li>
                @foreach ($categories as $category)
                    <li><a href="{{ route('front', ['category' => $category->id, 'tienda' => $category->tienda_id]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>