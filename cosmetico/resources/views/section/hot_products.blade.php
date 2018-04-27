<section id="hot_product_list">
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                  <li role="presentation" class="active"><a href="#" role="tab" data-toggle="tab">Hot products</a></li>
                  <li role="presentation"><a href="#" role="tab" data-toggle="tab">New products</a></li>
                  <li role="presentation"><a href="#" role="tab" data-toggle="tab">Best sellers</a></li>
                </ul>
            </div>
        </div>
        <div id="product_result_list">
            <ul>
              @foreach($products as $product)
                <li>
                    <div class="product_wrapper">
                        <div class="product_image">
                            <img src="{{ $product->picture_url }}" width="205" height="205" />
                        </div>
                        <div class="product_content">
                            <h2 class="product_title"> {{ $product->name }}</h2>
                            <p class="product_description">
                                 {{ $product->description }}
                            </p>
                            <p class="product_price">${{ $product->price }}</p>
                        </div>
                    </div>
                </li>
              @endforeach
            </ul>
        </div>
    </div>
    <div class="load_more_products_wrapper">
        <hr/>
        <div class="load_more_products">
            Load more hot products
        </div>
    </div>
</section>