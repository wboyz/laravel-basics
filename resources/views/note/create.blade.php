@extends('layout')

@section('content')

<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">
    <h2 class="mdl-typography--display-2">Jegyzet felvétele</h2>
  </div>

  <div class="mdl-card mdl-shadow--2dp mdl mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">

    <form action="{{ route('note.store') }}" method="post">

      @include('note.partials.form')

    </form>

  </div>
</div>

@endsection
