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
          <th class="mdl-data-table__cell--non-numeric">Szerkesztve</th>
          <th>Funkciók</th>
        </tr>
      </thead>
      <tbody>

        @foreach($notes as $note)
            <tr>
              <td class="mdl-data-table__cell--non-numeric">
                  <a href="{{ route('note.show', ['id' => $note->id]) }}">{{ $note->title }}</a>
              </td>
              <td class="mdl-data-table__cell--non-numeric">{{ $note->created_at }}</td>
              <td class="mdl-data-table__cell--non-numeric">{{ $note->updated_at }}</td>
              <td>
                  <form action="{{ route('note.destroy', ['id' => $note->id]) }}" method="post">
                      <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary", href="{{ route('note.edit', ['id' => $note->id]) }}">
                        Szerkeszt
                      </a>
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                          Töröl
                        </button>
                  </form>
              </td>
            </tr>
        @endforeach

      </tbody>
    </table>
</div>
@endsection
