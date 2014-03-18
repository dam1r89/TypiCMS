<?php

// Places breadcrumbs

Breadcrumbs::register('admin.places.index', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(Str::title(trans_choice('places::global.places', 2)), route('admin.places.index'));
});

Breadcrumbs::register('admin.places.edit', function ($breadcrumbs, $place) {
    $breadcrumbs->parent('admin.places.index');
    $breadcrumbs->push($place->title, route('admin.places.edit', $place->id));
});

Breadcrumbs::register('admin.places.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.places.index');
    $breadcrumbs->push(trans('places::global.New'), route('admin.places.create'));
});
