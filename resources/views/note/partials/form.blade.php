{{ csrf_field() }}
<div class="mdl-card__title">
  <h2 class="mdl-card__title-text">
      {{ $callout or 'Adja meg a felvenni kívánt jegyzet adatait.'}}
  </h2>
</div>
<div class="mdl-card__supporting-text">

  <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="title" value="{{ $title or old('title') }}">
    <label class="mdl-textfield__label" for="title">Cím</label>
  </div>

  <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <textarea class="mdl-textfield__input" type="text" rows="3" id="description">{{ $description or old('description') }}</textarea>
    <label class="mdl-textfield__label" for="description">Jegyzet szövege</label>
  </div>

</div>
<div class="mdl-card__actions mdl-card--border">
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
    {{ $button or 'Felvesz' }}
  </button>
  <a class="mdl-button mdl-button--accent mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect"
     href="{{ route('note.index') }}">
    Vissza
  </a>
</div>
