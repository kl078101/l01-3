@extends('layouts.default')
@section('title', '主页')

@section('content')
  @if (Auth::check())
  <div class="row">
    <div class="col-md-8">
      <section class="status_form">
        @include('shared._status_form')
      </section>
      <h4>句子列表</h4>
      <hr>
      @include('shared._feed')
    </div>
    <aside class="col-md-4">
      <section class="user_info">
        @include('shared._user_info', ['user' => Auth::user()])
      </section>
        {{-- 关注列表 --}}
        <section class="stats mt-2">
          @include('shared._stats', ['user' => Auth::user()])
        </section>
    </aside>
  </div>
  @else
  <div class="jumbotron">
    <h1>Hello,小伙伴！</h1>
    <br>
    <p class="lead">
      一切，将从这里开始。
    </p>
    <br>
    <p>
      <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
    </p>
  </div>
  @endif
@stop
