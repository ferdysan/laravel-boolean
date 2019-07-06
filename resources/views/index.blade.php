
{{-- parte di codice relativa al main --}}
@extends('layouts.base')
@section('content')
  <div class="container">
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
  </div>

  <div class="partners col-auto">
    <h2>I nostri studenti sono stati assunti da</h2>
    <div class="partner">
      <div class="col-auto">
        <img src="https://www.boolean.careers/images/partners/facile_it.png" alt="">
      </div>
      <div class="col-auto">
        <img src="https://www.boolean.careers/images/partners/facile_it.png" alt="">
      </div>
      <div class="col-auto">
        <img src="https://www.boolean.careers/images/partners/facile_it.png" alt="">
      </div>
      <div class="col-auto">
        <img src="https://www.boolean.careers/images/partners/facile_it.png" alt="">
      </div>
    </div>
  </div>

  <div class="container bg-color">
    <div class="col-5">
      <h2>6 mesi e sei sviluppatore</h2>
      <p>Boolean è un corso di 700 ore finalizzato all'inserimento lavorativo. Niente teoria che rimane solo sui libri, impara skill pratiche che ti preparano ad entrare subito nel mondo del lavoro.</p>
      <a class="btn btn-link btn-mod" href="#">SCOPRI IL CORSO</a>
    </div>
    <div class="col-5">
      <ul>
        <i class="fas fa-rocket"></i>
        <div class="roadmap">
        <span>Mese 1</span>
         <li>HTML, CSS (SCSS), GIT</li>
        </div>
        <div class="roadmap">
        <span>Mese 1</span>
         <li>Javascript, jQuery</li>
        </div>
        <div class="roadmap">
        <span>Mese 1</span>
         <li>PHP (OOP), SQL, Wordpress</li>
        </div>
        <div class="roadmap">
        <span>Mese 1</span>
         <li>PHP (MVC), ORM, Laravel, REST</li>
        </div>
        <div class="roadmap">
        <span>Mese 1</span>
         <li>Javascript ES6, VueJS</li>
        </div>
        <div class="roadmap">
        <span>Mese 1</span>
         <li>Progetto finale</li>
        </div>
        <i class="far fa-flag"></i>
      </ul>
    </div>

  </div>



@endsection
