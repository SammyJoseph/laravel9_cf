@extends('layouts.plantilla')

@section('title', 'Crear un nuevo curso')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Crear un nuevo curso</h2>
        </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section class="contact">
            <div class="container" data-aos="fade-up">
                <div class="row mt-5 justify-content-center">
                    <a class="mb-3 text-decoration-underline text-center" href="{{route('cursos.index')}}">Volver a Cursos</a>

                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <form action="{{route('cursos.store')}}" method="POST" class="php-email-form">
                            @csrf {{-- token de seguridad para formularios (obligatorio) --}}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{old('name')}}">
                                    @error('name')
                                        <small>*{{$message}}</small>
                                    @enderror
                                    <input type="hidden" name="slug" value="slug">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="category" placeholder="Categoría" value="{{old('category')}}">
                                    @error('category')
                                        <small>*{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="description" rows="5" placeholder="Descripción">{{old('description')}}</textarea>
                                @error('description')
                                    <small>*{{$message}}</small>
                                @enderror
                            </div>
                            <div class="text-center"><button type="submit">Crear Curso</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection