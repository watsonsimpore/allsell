<main id="main" class="main-site left-sidebar">
<div class="container">

	<div class="wrap-breadcrumb">
		<ul>
			<li class="item-link"><a href="#" class="link">Acceuil</a></li>
			<li class="item-link"><span>Digitales & Electroniques</span></li>
		</ul>
	</div>
	<div class="row">

		<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

			<div class="banner-shop">
				<a href="#" class="banner-link">
					<figure><img src="{{ asset('assets/images/shop-banner.jpg') }}" alt=""></figure>
				</a>
			</div>

			<div class="wrap-shop-control">

				<h1 class="shop-title">Digitales & Electroniques</h1>

				<div class="wrap-right">

					<div class="sort-item orderby">
						<select name="orderby" class="use-chosen" wire:model="sorting">
							<option value="default" selected="selected">choix par defaut</option>							
							<option value="date">Par nouveautés</option>
							<option value="price">Par Moins chers au plus chers</option>
							<option value="price-desc">Par plus chers au moins chers</option>
						</select>
					</div>

					<div class="sort-item product-per-page">
    
						<select name="post-per-page" class="use-chosen" wire:model="pagesize">
							<option value="18" selected="selected">18 par page</option>
							<option value="24">24 par page</option>
							<option value="30">30 par page</option>
							<option value="36">36 par page</option>
							<option value="42">42 par page</option>
							<option value="48">48 par page</option>
							<option value="54">54 par page</option>
						</select>
					</div>

					<div class="change-display-mode">
						<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grille</a>
						<a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>Liste</a>
					</div>

				</div>

			</div><!--end wrap shop control-->
			<style>
				.product-wish{
					position: absolute;
					top: 10px;
					left:0;
					z-index:99;
					right: 30px;
					text-align:right;
					padding-top:0;
				}
				.product-wish .fa{
					color: #cbcbcb;	
					font-size:32px;
				}
				.product-wish .fa:hover{
					color:#ff7007;
				}
				.fill-heart{
					color:#ff7007 !important;
				}
			</style>
			<div class="row">

				<ul class="product-list grid-products equal-container">
					@php
						$witems = Cart::instance('wishlist')->content()->pluck('id');
					@endphp					
					@foreach($products as $product)					
					<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
						<div class="product product-style-3 equal-elem ">
							<div class="product-thumnail">
								<a href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
									<figure><img src="{{ asset('assets/images/products') }}/{{$product->image}}" alt="{{$product->name}}"></figure>
								</a>
							</div>
							<div class="product-info">
								<a href="{{route('product.details',['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
								<div class="wrap-price"><span class="product-price">{{$product->regular_price}} FCFA</span></div>
								<a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}', {{$product->regular_price}})">Ajouter au Panier</a>
								<div class="product-wish">
									@if($witems->contains($product->id))
										<a href="#" wire:click.prevent="removeFromWishlist({{$product->id}})"><i class="fa fa-heart fill-heart"></i></a>
									@else
										<a href="#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}', {{$product->regular_price}})"><i class="fa fa-heart"></i></a>
									@endif
								</div>
							</div>
						</div>
					</li>
					@endforeach
				</ul>

			</div>

			<div class="wrap-pagination-info">
				{{$products->links()}}
					<!-- <ul class="page-numbers">
						<li><span class="page-number-item current" >1</span></li>
						<li><a class="page-number-item" href="#" >2</a></li>
						<li><a class="page-number-item" href="#" >3</a></li>
						<li><a class="page-number-item next-link" href="#" >Next</a></li>
					</ul>
					<p class="result-count">Showing 1-8 of 12 result</p> -->
			</div>
		</div><!--end main products area-->

		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
			<div class="widget mercado-widget categories-widget">
				<h2 class="widget-title">Toutes les catégories</h2>
				<div class="widget-content">
					<ul class="list-category">
							@foreach ($categories as $category)
							<li class="category-item {{count($category->subcategories) > 0 ? 'has-child-cate':''}}">
								
								<a href="{{route('product.category',['category_slug'=>$category->slug])}}" class="cate-link"><img src="{{asset('assets/images/icons')}}/{{$category->icon}}" width="30"/> {{$category->name}}</a>
								@if(count($category->subcategories)>0)
									<span class="toggle-control">+</span>
									<ul class="sub-cate">
										@foreach($category->subcategories as $scategory)
											<li class="category-item">
												<a href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}" class="cat-link"><i class="fa fa-caret-right">{{$scategory->name}}</i></a>
											</li>
										@endforeach
									</ul>
								@endif
							</li>
							@endforeach						
					</ul>
				</div>
			</div><!-- Categories widget-->

			<div class="widget mercado-widget filter-widget brand-widget">
				<h2 class="widget-title">Mode</h2>
				<div class="widget-content">
					<ul class="list-style vertical-list list-limited" data-show="6">
						<li class="list-item"><a class="filter-link active" href="#">Habits Modernes</a></li>
						<li class="list-item"><a class="filter-link " href="#">Batteries</a></li>
						<li class="list-item"><a class="filter-link " href="#">Printer</a></li>
						<li class="list-item"><a class="filter-link " href="#">Prosecsseurs</a></li>
						<li class="list-item"><a class="filter-link " href="#">Audio</a></li>
						<li class="list-item"><a class="filter-link " href="#">Smartphone & Tablettess</a></li>
						<li class="list-item default-hiden"><a class="filter-link " href="#">Printer</a></li>
						<li class="list-item default-hiden"><a class="filter-link " href="#">CPUs</a></li>
						<li class="list-item default-hiden"><a class="filter-link " href="#">Enceintes</a></li>
						<li class="list-item default-hiden"><a class="filter-link " href="#">Telephones</a></li>
						<li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div><!-- brand widget-->

			<div class="widget mercado-widget filter-widget price-filter">
				<h2 class="widget-title">Prix <span class="text-info">{{$min_price}}FCFA - {{$max_price}}FCFA</span></h2>
				<div class="widget-content">
					<div id="slider" wire:ignore></div>
				</div>
			</div><br/><br/><!-- Price-->

			

			<div class="widget mercado-widget filter-widget">
				<h2 class="widget-title">Taille</h2>
				<div class="widget-content">
					<ul class="list-style inline-round ">
						<li class="list-item"><a class="filter-link active" href="#">s</a></li>
						<li class="list-item"><a class="filter-link " href="#">M</a></li>
						<li class="list-item"><a class="filter-link " href="#">l</a></li>
						<li class="list-item"><a class="filter-link " href="#">xl</a></li>
					</ul>
					<div class="widget-banner">
						<figure><img src="{{ asset('assets/images/size-banner-widget.jpg') }}" width="270" height="331" alt=""></figure>
					</div>
				</div>
			</div><!-- Size -->

			<div class="widget mercado-widget widget-product">
				<h2 class="widget-title">Produits Populaires</h2>
				<div class="widget-content">
					<ul class="products">
							@foreach ($popular_products as $p_products)								
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="{{route('product.details',['slug'=>$p_products->slug])}}" title="{{$p_products->name}}">
												<figure><img src="{{ asset('assets/images/products') }}/{{$p_products->image}}" alt="{{$p_products->name}}"></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="{{route('product.details',['slug'=>$p_products->slug])}}" title="{{$p_products->name}}" class="product-name"><span>{{$p_products->name}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$p_products->regular_price}} FCFA</span></div>
										</div>
									</div>
								</li>
							@endforeach							

					</ul>
				</div>
			</div><!-- brand widget-->

		</div><!--end sitebar-->

	</div><!--end row-->

</div><!--end container-->

</main>

@push('scripts')
	<script>
		var slider = document.getElementById('slider');
		noUiSlider.create(slider,{
			start : [1,1000],
			connect:true,
			range :{
				'min' : 1,
				'max' : 100000
			},
			pips:{
				mode:'steps',
				stepped:true,
				density:4
			}
		});
		slider.noUiSlider.on('update',function(value){
			@this.set('min_price', value[0]);
			@this.set('max_price', value[1]);
		});
	</script>
@endpush