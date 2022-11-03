@extends('plantilla')

 @section('contenido')

 @if (session()->has('confirmacion'))

 {!!
     "<script>
     Swal.fire(
     'Todo correcto :',
     'Libro “xxxxxx” guardado',
     'success'
     )
     </script>
 "!!}
     
 @endif

 
 @if ($errors->any())
 @foreach ($errors->all() as $error) 

 <div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
  <strong> {{ $error }} </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
 @endif

 <div class="container mt-5 mb-5 col-md-7">
 <div class="card shadow-sm">
  <div class="card">
    <div class="card-header fw-bold font-monospace text-center bg-info  ">
      <h1> REGISTRO DE LIBROS </h1> 
    </div>
  </div>
  <div class="container mt-2 mb-2">
    <form class="m-4" method="POST" action="guardarRegistro">
      <!-- <form class="m-4" method="POST" action="guardarRegistro"> --> 
     
        @csrf

  
      <p><em> De favor, rellena lo que se te pide . </em></p>
      <div class="mb-3">

        <label class="form-label fw-bold"> ISBN: </label>
        <input type="text" class="form-control"
         name="txtISBN" 
         placeholder="Ingresa el ISBN del libro"
         value="{{old('txtISBN')}}">
          <p class="text-primary fst-italic fw-bold">
            {{$errors->first('txtISBN')}}
           </p> 
    
      </div>
      <div class="mb-3">

        <label class="form-label fw-bold"> Título: </label>
        <input type="text" class="form-control"
         name="txtTitulo" 
         placeholder="Ingresa el título del libro"
         value="{{old('txtTitulo')}}">
         <p class="text-primary fst-italic fw-bold">
          {{$errors->first('txtTitulo')}}
         </p> 
      </div>
      <div class="mb-3">

        <label class="form-label fw-bold"> Autor: </label>
        <input type="text" class="form-control"
         name="txtAutor" 
         placeholder="Ingresa el Autor del libro"
         value="{{old('txtAutor')}}">
         <p class="text-primary fst-italic fw-bold">
          {{$errors->first('txtAutor')}}
         </p> 
      </div>
      <div class="mb-3">

        <label class="form-label fw-bold"> Páginas: </label>
        <input type="text" class="form-control"
         name="txtPags" 
         placeholder="Ingresa el número de páginas del libro"
         value="{{old('txtPags')}}">
         <p class="text-primary fst-italic fw-bold">
          {{$errors->first('txtPags')}}
         </p> 
      </div>
      <div class="mb-3">

        <label class="form-label fw-bold"> Editorial: </label>
        <input type="text" class="form-control"
         name="txtEditorial" 
         placeholder="Ingresa la Editorial del libro" 
         value="{{old('txtEditorial')}}">
         <p class="text-primary fst-italic fw-bold">
          {{$errors->first('txtEditorial')}}
         </p> 
      </div>
      <div class="mb-3">

        <label class="form-label fw-bold"> Email de la Editorial: </label>
        <input type="email" class="form-control"
         name="txtEmEditorial" 
         placeholder="Ingresa el Correo electrónico de la editorial correspondiente" 
         value="{{old('txtEmEditorial')}}">
         <p class="text-primary fst-italic fw-bold">
          {{$errors->first('txtEmEditorial')}}
         </p> 
      </div>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      
        <button type="submit" class="btn btn-lg btn-outline-info  mb-2 mt-2">Enviar</button>

      </div>
      
    </form>
    </div>
</div>
</div>
 @endsection