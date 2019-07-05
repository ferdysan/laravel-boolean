{{-- parte di codice relaviva all'header --}}
@extends('layouts.header')
@section('header')

  <div class="logo">
    <a href="#"><img src="https://www.boolean.careers/images/common/logo.png"></a>
  </div>

  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
@endsection


{{-- parte di codice relativa al mani --}}
@extends('layouts.base')
@section('main')




@endsection
