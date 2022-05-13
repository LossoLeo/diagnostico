@extends('layouts.quiz')

@section('title', 'Conheçendo sua empresa')

@section('content')

    <quiz-vue :user="{{$user}}">

    </quiz-vue>

@endsection
