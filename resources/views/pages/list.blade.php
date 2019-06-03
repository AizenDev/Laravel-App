@extends('layouts.app')

@section('content')


@include('inc.filter')

@include('inc.sort')
@include('inc.messages')



<div class="product-grid">


@if (isset($tshirts))

    @foreach ($tshirts as $tsh)
      <div class="item">
          <div class="product">
            <div class="thumb-img">
              <img src="{{asset('img/31.jpg')}}">
              <div class="actions">
              <a href="{{route('single', ['id' => 1, 'tovar' => $tsh->id])}}" class="share-button"><i class="fa fa-search"></i></a>
                <span class="share-wrap">
                  <a href="" class="share-button"><i class="fa fa-cloud"></i></a>
                </span>
                <a href="" class="share-button"><i class="fa fa-heart-o"></i></a>
                @if (Auth::id() == 1)
              <form id="{{$tsh->id}}}" action="{{route('delproduct')}}" method="POST">
                  @method('POST')
                  <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                  <input type="hidden" value="{{$tsh->category_id}}" name="cat_id">
                  <input type="hidden" value="{{$tsh->id}}" name="prod_id">
                  <button id="delproduct" type="submit">Удалить</button>
                </form>
              @else 
                <a href="" class="add-to-cart">В корзину</a>
              @endif
              </div>
            </div>
            <div class="product-about">
              <h3 class="product-title">
                <a href="">{{$tsh->model}}</a>

              </h3>
            <span class="price"><i class="fa fa-rub"></i>${{$tsh->price}}</span>
            </div>
          </div>
      </div>
    @endforeach 

@endif




@if(isset($gaiters))

  @foreach ($gaiters as $ga)
  <div class="item">
      <div class="product">
        <div class="thumb-img">
          <img src="{{asset('img/31.jpg')}}">
          <div class="actions">
            <a href="/single/5/{{$ga->id}}" class="share-button"><i class="fa fa-search"></i></a>
            <span class="share-wrap">
              <a href="" class="share-button"><i class="fa fa-cloud"></i></a>
            </span>
            <a href="" class="share-button"><i class="fa fa-heart-o"></i></a>
            @if (Auth::id() == 1)
          <form id="{{$ga->id}}}" action="{{route('delproduct')}}" method="POST">
              @method('POST')
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
              <input type="hidden" value="{{$ga->category_id}}" name="cat_id">
              <input type="hidden" value="{{$ga->id}}" name="prod_id">
              <button id="delproduct" type="submit">Удалить</button>
            </form>
          @else 
            <a href="" class="add-to-cart">В корзину</a>
          @endif
          </div>
        </div>
        <div class="product-about">
          <h3 class="product-title">
            <a href="">{{$ga->model}}</a>

          </h3>
        <span class="price"><i class="fa fa-rub"></i>${{$ga->price}}</span>
        </div>
      </div>
  </div>
  @endforeach
@endif


@if(isset($shorts))

  @foreach ($shorts as $hoo)
    <div class="item">
        <div class="product">
          <div class="thumb-img">
            <img src="{{asset('img/31.jpg')}}">
            <div class="actions">
              <a href="/single/7/{{$hoo->id}}" class="share-button"><i class="fa fa-search"></i></a>
              <span class="share-wrap">
                <a href="" class="share-button"><i class="fa fa-cloud"></i></a>
              </span>
              <a href="" class="share-button"><i class="fa fa-heart-o"></i></a>
              @if (Auth::id() == 1)
            <form id="{{$hoo->id}}}" action="{{route('delproduct')}}" method="POST">
                @method('POST')
                <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                <input type="hidden" value="{{$hoo->category_id}}" name="cat_id">
                <input type="hidden" value="{{$hoo->id}}" name="prod_id">
                <button id="delproduct" type="submit">Удалить</button>
              </form>
            @else 
              <a href="" class="add-to-cart">В корзину</a>
            @endif
            </div>
          </div>
          <div class="product-about">
            <h3 class="product-title">
              <a href="">{{$hoo->model}}</a>

            </h3>
          <span class="price"><i class="fa fa-rub"></i>${{$hoo->price}}</span>
          </div>
        </div>
    </div>
  @endforeach
@endif

@if(isset($balls))

  @foreach ($balls as $hoo)
    <div class="item">
        <div class="product">
          <div class="thumb-img">
            <img src="{{asset('img/31.jpg')}}">
            <div class="actions">
              <a href="/single/7/{{$hoo->id}}" class="share-button"><i class="fa fa-search"></i></a>
              <span class="share-wrap">
                <a href="" class="share-button"><i class="fa fa-cloud"></i></a>
              </span>
              <a href="" class="share-button"><i class="fa fa-heart-o"></i></a>
              @if (Auth::id() == 1)
            <form id="{{$hoo->id}}}" action="{{route('delproduct')}}" method="POST">
                @method('POST')
                <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                <input type="hidden" value="{{$hoo->category_id}}" name="cat_id">
                <input type="hidden" value="{{$hoo->id}}" name="prod_id">
                <button id="delproduct" type="submit">Удалить</button>
              </form>
            @else 
              <a href="" class="add-to-cart">В корзину</a>
            @endif
            </div>
          </div>
          <div class="product-about">
            <h3 class="product-title">
              <a href="">{{$hoo->model}}</a>

            </h3>
          <span class="price"><i class="fa fa-rub"></i>${{$hoo->price}}</span>
          </div>
        </div>
    </div>
  @endforeach
@endif

@if(isset($boots))

  @foreach ($boots as $hoo)
    <div class="item">
        <div class="product">
          <div class="thumb-img">
            <img src="{{asset('img/31.jpg')}}">
            <div class="actions">
              <a href="/single/7/{{$hoo->id}}" class="share-button"><i class="fa fa-search"></i></a>
              <span class="share-wrap">
                <a href="" class="share-button"><i class="fa fa-cloud"></i></a>
              </span>
              <a href="" class="share-button"><i class="fa fa-heart-o"></i></a>
              @if (Auth::id() == 1)
            <form id="{{$hoo->id}}}" action="{{route('delproduct')}}" method="POST">
                @method('POST')
                <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                <input type="hidden" value="{{$hoo->category_id}}" name="cat_id">
                <input type="hidden" value="{{$hoo->id}}" name="prod_id">
                <button id="delproduct" type="submit">Удалить</button>
              </form>
            @else 
              <a href="" class="add-to-cart">В корзину</a>
            @endif
            </div>
          </div>
          <div class="product-about">
            <h3 class="product-title">
              <a href="">{{$hoo->model}}</a>

            </h3>
          <span class="price"><i class="fa fa-rub"></i>${{$hoo->price}}</span>
          </div>
        </div>
    </div>
  @endforeach
@endif






@if(isset($gloves))

  @foreach ($gloves as $glo)
  <div class="item">
      <div class="product">
        <div class="thumb-img">
          <img src="{{asset('img/31.jpg')}}">
          <div class="actions">
            <a href="/single/6/{{$glo->id}}" class="share-button"><i class="fa fa-search"></i></a>
            <span class="share-wrap">
              <a href="" class="share-button"><i class="fa fa-cloud"></i></a>
            </span>
            <a href="" class="share-button"><i class="fa fa-heart-o"></i></a>
            @if (Auth::id() == 1)
          <form id="{{$glo->id}}}" action="{{route('delproduct')}}" method="POST">
              @method('POST')
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
              <input type="hidden" value="{{$glo->category_id}}" name="cat_id">
              <input type="hidden" value="{{$glo->id}}" name="prod_id">
              <button id="delproduct" type="submit">Удалить</button>
            </form>
          @else 
            <a href="" class="add-to-cart">В корзину</a>
          @endif
          </div>
        </div>
        <div class="product-about">
          <h3 class="product-title">
            <a href="">{{$glo->model}}</a>

          </h3>
        <span class="price"><i class="fa fa-rub"></i>${{$glo->price}}</span>
        </div>
      </div>
  </div>
  @endforeach

@endif



@if(isset($hoodies))

  @foreach ($hoodies as $hoo)
    <div class="item">
        <div class="product">
          <div class="thumb-img">
            <img src="{{asset('img/31.jpg')}}">
            <div class="actions">
              <a href="/single/7/{{$hoo->id}}" class="share-button"><i class="fa fa-search"></i></a>
              <span class="share-wrap">
                <a href="" class="share-button"><i class="fa fa-cloud"></i></a>
              </span>
              <a href="" class="share-button"><i class="fa fa-heart-o"></i></a>
              @if (Auth::id() == 1)
            <form id="{{$hoo->id}}}" action="{{route('delproduct')}}" method="POST">
                @method('POST')
                <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                <input type="hidden" value="{{$hoo->category_id}}" name="cat_id">
                <input type="hidden" value="{{$hoo->id}}" name="prod_id">
                <button id="delproduct" type="submit">Удалить</button>
              </form>
            @else 
              <a href="" class="add-to-cart">В корзину</a>
            @endif
            </div>
          </div>
          <div class="product-about">
            <h3 class="product-title">
              <a href="">{{$hoo->model}}</a>

            </h3>
          <span class="price"><i class="fa fa-rub"></i>${{$hoo->price}}</span>
          </div>
        </div>
    </div>
  @endforeach
@endif








</div>
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
              url:'/delprod',
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