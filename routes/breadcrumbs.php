<?php

// ホーム
Breadcrumbs::for('home', function ($trail) {
	$trail->push('TOP', url('/'));
});


Breadcrumbs::for('actress', function ($trail, $actress) {
	$trail->parent('home');
	$trail->push($actress->name, url('actress/' . $actress->id));
});

Breadcrumbs::for('actress_list', function ($trail, $title) {
    $trail->parent('home');
    $trail->push($title);
});