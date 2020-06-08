@extends('admin.layouts.app_admin')

@section('content')

<h2 class="py-3">Статистика</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>Категорий</th>
        <th>Материалов</th>
        <th>Посетителей</th>
        <th>Сегодня</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>
          <button type="button" class="btn btn-primary btn-lg btn-block">
            Создать категорию
          </button>
        </th>
        <th>
          <button type="button" class="btn btn-secondary btn-lg btn-block">
            Создать материал
          </button>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <h4>Категория первая</h4>
          <p>Кол-во материалов</p>
        </td>
        <td>
          <h4>Материал первый</h4>
          <p>Категория</p>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
