@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('actress_list',$title))
@section('content')
@include('components.main')
@endsection