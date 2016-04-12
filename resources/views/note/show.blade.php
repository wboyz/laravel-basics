@extends('layout')

@section('content')

<div class="mdl-card mdl-shadow--2dp mdl mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">

    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">
            {{ $note->title }}
        </h2>
    </div>
    <div class="mdl-card__supporting-text">
        {{ $note->description }}
    </div>

    <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" href="{{ route('note.index') }}">
            Vissza
        </a>
    </div>

</div>

@endsection
