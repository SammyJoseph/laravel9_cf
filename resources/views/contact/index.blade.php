@extends('layouts.plantilla')

@section('title', 'Contacto')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Envíamos un mensajito</h2>
        </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section class="contact">
            <div class="container" data-aos="fade-up">
                <div class="row mt-5 justify-content-center">
                    <a class="mb-3 text-decoration-underline text-center" href="{{route('cursos.index')}}">Volver a Cursos</a>

                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <form action="{{route('contact.store')}}" method="POST" class="php-email-form">
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
                                    <input type="text" class="form-control" name="subject" placeholder="Asunto" value="{{old('subject')}}">
                                    @error('subject')
                                        <small>*{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12 form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                                    @error('email')
                                        <small>*{{$message}}</small>
                                    @enderror
                                    <input type="hidden" name="slug" value="slug">
                                </div>
                            </div>
                            <div class="form-group my-2">
                                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje">{{old('message')}}</textarea>
                                @error('message')
                                    <small>*{{$message}}</small>
                                @enderror
                            </div>
                            <div class="text-center"><button type="submit">Enviar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->

    @if (session('info')) {{-- si existe una variable de sesión en el ContactController ->with() --}}
        <script>
            alert('{{session('info')}}');
        </script>
    @endif
@endsection