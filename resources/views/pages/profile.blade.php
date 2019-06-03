@extends('layouts.app')

@section('content')

    @include('inc.messages')
        <div class="user-profile">

           
            <ul class="profile-field">
                

                <li>
                    <h1>{{ Auth::user()->lastname }}  {{ Auth::user()->name }}  {{ Auth::user()->patronymic }}</h1>
                    <button class="toggle0"><i class="fas fa-pen"></i></button>
                    <form style="display:none" action="{{route('updateName')}}" method="POST" id="red-form0">
                   
                        <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                        <input id="toy" type="text" name="name" placeholder="Введите имя:" value="{{ Auth::user()->name }} ">
                        <input id="toy1" type="text" name="lastname" placeholder="Введите фамилию:" value="{{ Auth::user()->lastname}}">
                        <input id="toy2" type="text" name="patronymic" placeholder="Введите отчество:" value="{{ Auth::user()->patronymic}}">
                        <button type="submit">Редактировать</button>
                    </form>

                </li>
                
                <li class="second-li">Email: {{ Auth::user()->email }} 
                    <button class="toggle1"><i class="fas fa-pen"></i></button>

                <form action="{{route('update')}}" method="POST" id="red-form1">
                   
                        <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                        <input id="yui" type="text" name="email" placeholder="Введите email:">
                        <button type="submit">Редактировать</button>
                    </form>

                </li>
                <li>Phone: {{ Auth::user()->phone }}
                    <button class="toggle2"><i class="fas fa-pen"></i></button>
                    <form action="{{route('updatePhone')}}" method="POST" id="red-form2">
                        <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                        <input type="text" name="phone"  placeholder="Введите телефон:">
                        <button type="submit">Редактировать</button>
                    </form>
                </li>

                <li>Adress: 
                  <p>Страна: {{ $adress->country }}</p> <br> 
                  <p>Город: {{ $adress->city }} </p> <br> 
                  <p>Улица: {{ $adress->street }}</p> <br>
                  <p>Дом: №{{ $adress->house }}</p> <br>
                  <p>Квартира: №{{ $adress->flat }}</p>
                    <button class="toggle3" ><i class="fas fa-pen"></i></button>
                    <form action="{{route('updateAdress')}}" method="POST" id="red-form3">
                        <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                        <input type="text" name="country"  placeholder="Введите страну:" value="{{ $adress->country}}">
                        <input type="text" name="city"  placeholder="Введите город:" value="{{ $adress->city}}">
                        <input type="text" name="street"  placeholder="Введите улицу:" value="{{ $adress->street}}">
                        <input type="text" name="house"  placeholder="Введите дом:" value="{{ $adress->house}}">
                        <input type="text" name="flat"  placeholder="Введите квартиру:" value="{{ $adress->flat}}">
                        <button type="submit">Редактировать</button>
                    </form>
                </li>
            </ul>

            <h1>Заказы</h1>

            <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название товара</th>
                        <th scope="col">Цена</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $item)
                  
                        <tr>
                          <th scope="row">{{$item->id}}</th>
                          <td>{{$item->prod_name}}</td>
                          <td>{{$item->price}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            $('#red-form0').on('submit', function(e) {
                e.preventDefault();
                var form1 = $('#red-form0').serialize();
                var inp1 = $('#toy').val;
                var inp2 = $('#toy1').val; 
                var inp3 = $('#toy2').val;
                var data = [ inp1, inp2, inp3];
                    
                var dend = [];

                data.forEach(element => {
                  if(element){
                    dend.push(element)
                  }
                });

                $.ajax({
                    method:'POST',
                    url:'/updateName',
                    data: dend
                    success: function (data) {
                      alert("suc")
                    },
                    error: function (error) {
                        alert("fail")
                    }
                }) 

                console.log(form1)
            });
      </script>
        <script>
              $('#red-form1').on('submit', function(e) {
                  e.preventDefault();
                  var form1 = $('#red-form1').serialize();

                  $.ajax({
                      method:'POST',
                      url:'/update',
                      data: form1,
                      success: function (data) {
                        alert("suc")
                      },
                      error: function (error) {
                          alert("fail")
                      }
                  }) 
              });
        </script>
         <script>
            $('#red-form2').on('submit', function(e) {
                e.preventDefault();
                var form2 = $('#red-form2').serialize();

                $.ajax({
                    method:'POST',
                    url:'/updatePhone',
                    data:  form2,
                    success: function (data) {
                      alert("suc")
                    },
                    error: function (error) {
                        alert("fail")
                    }
                }) 
            });
          </script>

          <script>
              $('#red-form3').on('submit', function(e) {
                  e.preventDefault();
                  var form3 = $('#red-form3').serialize();
                  $.ajax({
                      method:'POST',
                      url:'/updateAdress',
                      data:  form3,
                      success: function (data) {
                        alert("suc")
                      },
                      error: function (error) {
                          alert("fail")
                      }
                  }) 
              });
            </script>

@endsection
