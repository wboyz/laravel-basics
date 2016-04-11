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
          <th>#</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td class="mdl-data-table__cell--non-numeric">
              <a href="{{ route('note.show', ['id' => 2]) }}">Acrylic (Transparent)</a>
          </td>
          <td class="mdl-data-table__cell--non-numeric">2012. 05. 16.</td>
          <td>
              <form action="{{ route('note.destroy', ['id' => 1]) }}" method="post">
                  <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary", href="{{ route('note.edit', ['id' => 1]) }}">
                    Szerkeszt
                  </a>
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                      Törlés
                    </button>
              </form>
          </td>
        </tr>

      </tbody>
    </table>
</div>
@endsection
