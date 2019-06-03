@extends('layouts.app')

@section('content')

@include('inc.messages')


@if (isset($tshirts))
@foreach ($tshirts as $item)
<div class="tovar_block">
        <div class="image-container">
            <img src="{{asset('img/31.jpg')}}" alt="" srcset="" />
        </div>
        <form id="to-cart" action="{{route('addtocart')}}" method="post" name="to_cart">
            <input type="hidden" value="{!! csrf_token() !!}" name="_token">
            <input type="hidden" value="{!! $item->id !!}" name="item_id">
            <input type="hidden" value="{!! $item->category_id !!}" name="cat_id">
            <input type="hidden" value="{!! $item->brand_id !!} {!! $item->model !!}" name="prod_name">
            <input type="hidden" value="{!! $item->price !!}" name="price">
            <button class="carbutt"  name="tovar" type="submit">Заказать</button>
        </form>
        <div class="prod_headers">
            <h1 class="brand">{{$item->brand_id}}</h1>
            <p class="model">{{$item->model}}</p>
        </div>
        <div class="about-product">
            <ul>
                <li>Клуб: {{$item->club}}</li>
                <li>Размер: {{$item->size}}</li>
                <li>Цвет: {{$item->color}}</li>
                <li>Цена: {{$item->price}}</li>
    
            </ul>
        </div>
    
        <div class="description">
            <h4>Описание: </h4> 
                
            <p>
            {{$item->description}}
            </p>
        </div>
</div>
@endforeach
@endif


@if (isset($shorts))
@foreach ($shorts as $item)
<div class="tovar_block">
        <div class="image-container">
            <img src="{{asset('img/31.jpg')}}" alt="" srcset="" />
        </div>
        <form id="to-cart" action="{{route('addtocart')}}" method="post" name="to_cart">
            <input type="hidden" value="{!! csrf_token() !!}" name="_token">
            <input type="hidden" value="{!! $item->id !!}" name="item_id">
            <input type="hidden" value="{!! $item->category_id !!}" name="cat_id">
            <input type="hidden" value="{!! $item->brand_id !!} {!! $item->model !!}" name="prod_name">
            <input type="hidden" value="{!! $item->price !!}" name="price">
            <button class="carbutt"  name="tovar" type="submit">Заказать</button>
        </form>
        <div class="prod_headers">
            <h1 class="brand">hgfhg</h1>
            <p class="model">{{$item->model}}</p>
        </div>
        <div class="about-product">
            <ul>
                <li>Клуб: {{$item->club}}</li>
                <li>Размер: {{$item->size}}</li>
                <li>Цвет: {{$item->color}}</li>
                <li>Цена: {{$item->price}}</li>
    
            </ul>
        </div>
    
        <div class="description">
            <h4>Описание: </h4> 
                
            <p>
            {{$item->description}}
            </p>
        </div>
</div>
@endforeach
@endif


@if (isset($boots))
@foreach ($boots as $item)
<div class="tovar_block">
        <div class="image-container">
            <img src="{{asset('img/31.jpg')}}" alt="" srcset="" />
        </div>
        <form id="to-cart" action="{{route('addtocart')}}" method="post" name="to_cart">
            <input type="hidden" value="{!! csrf_token() !!}" name="_token">
            <input type="hidden" value="{!! $item->id !!}" name="item_id">
            <input type="hidden" value="{!! $item->category_id !!}" name="cat_id">
            <input type="hidden" value="{!! $item->brand_id !!} {!! $item->model !!}" name="prod_name">
            <input type="hidden" value="{!! $item->price !!}" name="price">
            <button class="carbutt"  name="tovar" type="submit">Заказать</button>
        </form>
        <div class="prod_headers">
            <h1 class="brand">hgfhg</h1>
            <p class="model">{{$item->model}}</p>
        </div>
        <div class="about-product">
            <ul>
                <li>Клуб: {{$item->club}}</li>
                <li>Размер: {{$item->size}}</li>
                <li>Цвет: {{$item->color}}</li>
                <li>Цена: {{$item->price}}</li>
    
            </ul>
        </div>
    
        <div class="description">
            <h4>Описание: </h4> 
                
            <p>
            {{$item->description}}
            </p>
        </div>
</div>
@endforeach
@endif


@if (isset($balls))
@foreach ($balls as $item)
<div class="tovar_block">
        <div class="image-container">
            <img src="{{asset('img/31.jpg')}}" alt="" srcset="" />
        </div>
        <form id="to-cart" action="{{route('addtocart')}}" method="post" name="to_cart">
            <input type="hidden" value="{!! csrf_token() !!}" name="_token">
            <input type="hidden" value="{!! $item->id !!}" name="item_id">
            <input type="hidden" value="{!! $item->category_id !!}" name="cat_id">
            <input type="hidden" value="{!! $item->brand_id !!} {!! $item->model !!}" name="prod_name">
            <input type="hidden" value="{!! $item->price !!}" name="price">
            <button class="carbutt"  name="tovar" type="submit">Заказать</button>
        </form>
        <div class="prod_headers">
            <h1 class="brand">hgfhg</h1>
            <p class="model">{{$item->model}}</p>
        </div>
        <div class="about-product">
            <ul>
                <li>Клуб: {{$item->club}}</li>
                <li>Размер: {{$item->size}}</li>
                <li>Цвет: {{$item->color}}</li>
                <li>Цена: {{$item->price}}</li>
    
            </ul>
        </div>
    
        <div class="description">
            <h4>Описание: </h4> 
                
            <p>
            {{$item->description}}
            </p>
        </div>
</div>
@endforeach
@endif


@if (isset($gaiters))
@foreach ($gaiters as $item)
<div class="tovar_block">
        <div class="image-container">
            <img src="{{asset('img/31.jpg')}}" alt="" srcset="" />
        </div>
        <form id="to-cart" action="{{route('addtocart')}}" method="post" name="to_cart">
            <input type="hidden" value="{!! csrf_token() !!}" name="_token">
            <input type="hidden" value="{!! $item->id !!}" name="item_id">
            <input type="hidden" value="{!! $item->category_id !!}" name="cat_id">
            <input type="hidden" value="{!! $item->brand_id !!} {!! $item->model !!}" name="prod_name">
            <input type="hidden" value="{!! $item->price !!}" name="price">
            <button class="carbutt"  name="tovar" type="submit">Заказать</button>
        </form>
        <div class="prod_headers">
            <h1 class="brand">hgfhg</h1>
            <p class="model">{{$item->model}}</p>
        </div>
        <div class="about-product">
            <ul>
                <li>Клуб: {{$item->club}}</li>
                <li>Размер: {{$item->size}}</li>
                <li>Цвет: {{$item->color}}</li>
                <li>Цена: {{$item->price}}</li>
    
            </ul>
        </div>
    
        <div class="description">
            <h4>Описание: </h4> 
                
            <p>
            {{$item->description}}
            </p>
        </div>
</div>
@endforeach
@endif


@if (isset($gloves))
@foreach ($gloves as $item)
<div class="tovar_block">
        <div class="image-container">
            <img src="{{asset('img/31.jpg')}}" alt="" srcset="" />
        </div>
        <form id="to-cart" action="{{route('addtocart')}}" method="post" name="to_cart">
            <input type="hidden" value="{!! csrf_token() !!}" name="_token">
            <input type="hidden" value="{!! $item->id !!}" name="item_id">
            <input type="hidden" value="{!! $item->category_id !!}" name="cat_id">
            <input type="hidden" value="{!! $item->brand_id !!} {!! $item->model !!}" name="prod_name">
            <input type="hidden" value="{!! $item->price !!}" name="price">
            <button class="carbutt"  name="tovar" type="submit">Заказать</button>
        </form>
        <div class="prod_headers">
            <h1 class="brand">hgfhg</h1>
            <p class="model">{{$item->model}}</p>
        </div>
        <div class="about-product">
            <ul>
                <li>Клуб: {{$item->club}}</li>
                <li>Размер: {{$item->size}}</li>
                <li>Цвет: {{$item->color}}</li>
                <li>Цена: {{$item->price}}</li>
    
            </ul>
        </div>
    
        <div class="description">
            <h4>Описание: </h4> 
                
            <p>
            {{$item->description}}
            </p>
        </div>
</div>
@endforeach
@endif


@if (isset($hoodies))
@foreach ($hoodies as $item)
<div class="tovar_block">
        <div class="image-container">
            <img src="{{asset('img/31.jpg')}}" alt="" srcset="" />
        </div>
        <form id="to-cart" action="{{route('addtocart')}}" method="post" name="to_cart">
            <input type="hidden" value="{!! csrf_token() !!}" name="_token">
            <input type="hidden" value="{!! $item->id !!}" name="item_id">
            <input type="hidden" value="{!! $item->category_id !!}" name="cat_id">
            <input type="hidden" value="{!! $item->brand_id !!} {!! $item->model !!}" name="prod_name">
            <input type="hidden" value="{!! $item->price !!}" name="price">
            <button class="carbutt"  name="tovar" type="submit">Заказать</button>
        </form>
        <div class="prod_headers">
            <h1 class="brand">Nike</h1>
            <p class="model">{{$item->model}}</p>
        </div>
        <div class="about-product">
            <ul>
            <li>Клуб: {{$item->club}}</li>
            <li>Размер: {{$item->size}}</li>
            <li>Цвет: {{$item->color}}</li>
            <li>Цена: ${{$item->price}}</li>
    

            </ul>
        </div>
    
        <div class="description">
            <h4>Описание: </h4> 
                
            <p>
                {{$item->description}}
            </p>
        </div>
    </div>
    @endforeach
@endif

<script src="{{asset('js/app.js')}}"></script>
<script>

    $('form').on('submit', function(e){
      e.preventDefault();
          var formID = $(this).attr('id');
          var formNm = $('#' + formID);
          var formData = formNm.serialize();
          console.log(formData)
          $.ajax({
              method:'POST',
              url:'/addtocart',
              data: formData,
              success: function (data) {
                  alert("suc")
              },
              error: function (error) {
                  alert("fail")
              }
          })


    })
</script>

    
@endsection