@extends('layouts.app')

@section('content')


<div class="main-cart">
<table class="table">
        <thead>
          <tr>
            <th scope="col">Артикул</th>
            <th scope="col">Название</th>
            <th scope="col">Цена</th>
            <th scope="col">Количество</th>
            <th scope="col">Сумма</th>
            <th scope="col">Удалить</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td class="kol"> <button type="submit"><i class="fas fa-minus"></i></button>  3 <button type="submit"><i class="fas fa-plus"></i></button></td>
            <td>@mdo</td>
            <td><button><i class="fas fa-trash-alt"></i></button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td class="kol"> <button type="submit"><i class="fas fa-minus"></i></button> 3 <button type="submit"><i class="fas fa-plus"></i></button></td>
            <td>@mdo</td>
            <td><button><i class="fas fa-trash-alt"></i></button></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td class="kol"> <button type="submit"><i class="fas fa-minus"></i></button>  3 <button type="submit"><i class="fas fa-plus"></i></button></td>
            <td>@mdo</td>
            <td><button><i class="fas fa-trash-alt"></i></button></td>
          </tr>
        </tbody>
</table>

<hr>

<p>Итого: 9990 руб.</p>

<button>Оформить заказ</button>

</div>

@endsection