@extends('layout')

@section('content')

<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col">
        <h3 class="mdl-typography--display-2">Tekintse meg felvett jegyzeteit</h3>
    </div>
    <table class="mdl-data-table mdl-data-table--selectable mdl-shadow--2dp mdl-cell mdl-cell--12-col">
      <thead>
        <tr>
          <th class="mdl-data-table__cell--non-numeric">Cím</th>
          <th class="mdl-data-table__cell--non-numeric">Felvéve</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">
              <a href="#">Acrylic (Transparent)</a>
          </td>
          <td class="mdl-data-table__cell--non-numeric">2012. 05. 16.</td>
        </tr>
      </tbody>
    </table>
</div>
@endsection
