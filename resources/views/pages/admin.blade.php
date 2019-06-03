@extends('layouts.app')

@section('content')
<div class="tabs">

        <ul class="tab-header">
           <li class="tab-header__item js-tab-trigger active" data-tab="1">Доавить товар</li>
           <li class="tab-header__item js-tab-trigger" data-tab="2">Список пользователей</li>
           <li class="tab-header__item js-tab-trigger" data-tab="3">Список заказов</li>
           <li class="tab-header__item js-tab-trigger" data-tab="4">Редактировать категории</li>
        </ul>
        

        <div class="tab-content">
                <div class="tab-content__item js-tab-content active" data-tab="1">
                <form id="product-form" action="{{route('addprod')}}" method="POST">
                    <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                          <div class="form-row">
                              <div class="form-group col-md-6 sel-prod">
                                  <label for="inputState">Выберите бренд товара: </label>
                                  <select id="inputState" class="form-control" name="categ">
                                      @foreach($brands as $br)
                                        <option value="{{ $br->brand_name }}">{{ $br->brand_name }}</option>
                                      @endforeach
                                  </select>  
                              </div>
                              <div class="form-group col-md-6 ">
                                  <label for="inputState">Выберите тип товара</label>
                                  <select id="inputStateless" class="form-control sec-sel" name="ptype" >
                                      @foreach($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                      @endforeach
                                  </select>  
                              </div>
                          </div>

                  
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Цена</label>
                                    <input type="text" class="form-control" name="price" id="inputEmail4" placeholder="">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPassword4">Цвет</label>
                                    <input type="text" class="form-control" name="color" id="inputPassword4" placeholder="">
                                  </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="inputAddress">Размер</label>
                                      <input type="text" class="form-control" name="size" id="inputAddress" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputAddress2">Модель</label>
                                      <input type="text" class="form-control" name="model" id="inputAddress2" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">Клуб</label>
                                    <input type="text" class="form-control" name="club" id="inputCity">
                                  </div>
                                  
                                      <div id="tt" class="form-group col-md-6">
                                        <label for="inputCity">Покрытие (для кросс)</label>
                                        <input type="text" class="form-control" name="coating" id="inputCities">
                                      </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="inputCity">Защита пальцев (для перчаток)</label>
                                      <input type="text" class="form-control" name="protect" id="inputCityty">
                                    </div>
                                    
                                        <div id="tt" class="form-group col-md-6">
                                          <label for="inputCity">Материал мяча (для мяча)</label>
                                          <input type="text" class="form-control" name="material" id="inputCitiesty">
                                        </div>
  
                                  </div>
                                <div class="form-group">
                                    <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Описание</label>
                                      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>
                                  </div>
                                    
                                  
                                  <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                    </div>
                                <button type="submit" name="insert" class="btn btn-primary">Доавить товар</button>
                              </form>
                              @include('inc.messages')
                             
                </div>
               
            
                <div class="tab-content__item js-tab-content" data-tab="2">

                        <table class="table table-bordered">
                      
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Имя</th>
                                    <th scope="col">Фамилия</th>
                                    <th scope="col">Отчество</th>
                                    <th scope="col">Телефон</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Адрес</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($users as $user)
                                    <tr>
                                      <th scope="row">{{ $user->id }}</th>
                                      <td>{{ $user->name }}</td>
                                      <td>{{ $user->lastname }}</td>
                                      <td>{{ $user->patronymic }}</td>
                                      <td>{{ $user->phone }}</td>
                                      <td>{{ $user->email }}</td>
                                      <td>{{ $user->adress }}</td>
                                    </tr>
                                  @endforeach
                                </tbody>
                              </table>  
                </div>
            
                <div class="tab-content__item js-tab-content" data-tab="3">
                    <table class="table table-bordered">
                      
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID пользователя</th>
                            <th scope="col">Название товара</th>
                            <th scope="col">Сумма</th>
                            <th scope="col">Удалить</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $ord)
                              <tr>
                                <th scope="row">{{ $ord->id }}</th>
                                <td>{{ $ord->user_id }}</td>
                                <td>{{ $ord->prod_name }}</td>
                                <td>{{ $ord->price }}</td>
                                <td>
                                  <form class="orders" action="{{route('delorder')}}" method="post">
                                    <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                                    <input type="hidden" value="{!! $ord->user_id !!}" name="usr_id">
                                    <input type="hidden" value="{!! $ord->id !!}" name="ord_id">
                                    <button class="carbutt" type="submit"><i class="fas fa-trash-alt"></i></button>
                                  </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>  
                </div>

            
        </div>
    
     </div>
    <script src="{{asset('js/app.js')}}"></script>

    <script>

        $('form .orders').on('submit', function(e){
          e.preventDefault();
              var formID = $(this).attr('id');
              var formNm = $('#' + formID);
              var formData = formNm.serialize();
              console.log(formData)
              $.ajax({
                  method:'POST',
                  url:'/delorder',
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

     <script>
       
       
       $('#product-form').on('submit', function(e) {
                  e.preventDefault();
                  var form = $('#product-form').serialize();
                    $.ajax({
                        method:'POST',
                        url:'/addprod',
                        data: form,
                        success: function (data) {
                          alert("suc")
                        },
                        error: function (error) {
                            alert("fail")
                        }
                    }) 
                    console.log(form)
              });
     
     </script>
    
@endsection