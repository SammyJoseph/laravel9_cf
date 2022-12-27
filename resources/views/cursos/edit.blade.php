@extends('layouts.plantilla')

@section('title', 'Crear un nuevo curso')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Editar curso</h2>
        </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section class="contact">
            <div class="container" data-aos="fade-up">
                <div class="row mt-5 justify-content-center">
                    <a class="mb-3 text-decoration-underline text-center" href="{{route('c.index')}}">Volver a Cursos</a>

                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <form action="{{route('c.update', $curso)}}" method="POST" class="php-email-form">
                            @csrf {{-- token de seguridad para formularios (obligatorio) --}}
                            @method('put') {{-- cambia el POST por PUT --}}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" required value="{{$curso->name}}">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="category" placeholder="Categoría" required value="{{$curso->category}}">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="description" rows="5" placeholder="Descripción" required>{{$curso->description}}</textarea>
                            </div>
                            {{-- <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div> --}}
                            <div class="text-center"><button type="submit">Actualizar Curso</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection