@extends('layout')

@section('content')

<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">
    <h2 class="mdl-typography--display-2">Jegyzet szerkesztése</h2>
  </div>

  <div class="mdl-card mdl-shadow--2dp mdl mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">

    <form action="{{ route('note.update', ['id' => $note->id]) }}" method="post">
      {{ method_field('PUT') }}
      @include('note.partials.form', [
        'callout' => 'Itt módosíthatja meglévő jegyzetét.',
        'title' => $note->title,
        'description' => $note->description,
        'button' => 'Mentés'
      ])

    </form>

  </div>
</div>

@endsection
