@extends('layout')

@section('content')

<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">
    <h2 class="mdl-typography--display-2">Jegyzet felvétele</h2>
  </div>

  <div class="mdl-card mdl-shadow--2dp mdl mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">
    <form action="#">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Adja meg a felvenni kívánt jegyzet adatait.</h2>
      </div>
      <div class="mdl-card__supporting-text">

        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" id="title">
          <label class="mdl-textfield__label" for="title">Cím</label>
        </div>

        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <textarea class="mdl-textfield__input" type="text" rows="3" id="description"></textarea>
          <label class="mdl-textfield__label" for="description">Jegyzet szövege</label>
        </div>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
          Mentés
        </button>
      </div>
    </form>

  </div>
</div>

@endsection
