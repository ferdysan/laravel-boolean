{{-- parte di codice relaviva all'header --}}
@extends('layouts.header')
@section('header')

  <div class="logo">
    <a href="#"><img src="https://www.boolean.careers/images/common/logo.png"></a>
  </div>

  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Corso</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Metodo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Dopo il corso</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Lezione Gratuita</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-link btn-mod" href="#">Iscriviti</a>
  </li>
</ul>
@endsection


{{-- parte di codice relativa al mani --}}
@extends('layouts.base')
@section('jumbo_slider')
  <div class="info_jumbo">
    <h1>Diventa uno sviluppatore</h1>
    <p>6 mesi di corso intensivo online in diretta per imparare da zero il mestiere di web developer e trovare un nuovo lavoro nelle aziende top del settore</p>
    <a class="btn btn-link btn-mod" href="#">SCOPRI IL CORSO</a>
  </div>
  <div class="img_jumbo">
    <div class="box-green">
    </div>
    <img src="https://www.boolean.careers/images/common/mac2x.png" alt="">
  </div>
@endsection
