@if($products->isEmpty())
    <p>Không tìm thấy sản phẩm nào.</p>
@else
    <div class="position-absolute w-100 bottom-0 start-0 z-index-3" style="top: 105%;">
        <div class="card">
            <div id="product-list" class="card-body max-h-400px p-3 overflow-hidden">
                @foreach($products as $product)
                    @if($product->product?->count() > 0)
                        <div class="card h-90px mb-3 product-item" data-image="{{Storage::url($product->photo->first()?->url)}}" data-id="{{ $product->id }}" data-name="{{ $product->product->name }}" data-price="{{ $product->price }}" data-stock="{{ $product->inventory }}" data-variant="
                                 @if($product->optionValue->count() > 0)
                                                    - @foreach($product->optionValue as $optionValue)
                                                        {{$optionValue->name}}
                                                    @endforeach
                                                @endif">
                            <div class="card-body h-100 p-3">
                                <div class="row">
                                    <div class="col-2 min-h-20px min-w-20px">
                                        <img class="object-cover w-100 h-100 border rounded-3" src="{{Storage::url($product->photo->first()?->url)}}" alt="">
                                    </div>
                                    <div class="col-10 fw-normal">
                                        <h5 class="p-0">{{ $product->product->name }}
                                            @if($product->optionValue->count() > 0)
                                                - @foreach($product->optionValue as $optionValue)
                                                    {{$optionValue->name}}
                                                @endforeach
                                            @endif
                                        </h5>
                                        <p class="m-0 fw-light p-0 fs-6">Giá: {{ $product->price }}đ</p>
                                        <p class="d-inline-block m-0 fs-6">Tồn kho: {{ $product->inventory }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endif

