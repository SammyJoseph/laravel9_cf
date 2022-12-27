@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('main')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
        {{-- <h2>Detalles del curso <?php /* echo $curso */ ?></h2> --}}
        <h2>Detalles del curso {{$curso->name}}</h2> {{-- las dos llaves reemplazan a <php echo $curso ?> --}}
        <p>{{$curso->description}}</p>
    </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <a class="mb-3 text-decoration-underline" href="{{route('cursos.index')}}">Volver a Cursos</a>
            <a class="mb-3 text-decoration-underline" href="{{route('cursos.edit', $curso)}}">Editar curso</a>
            <form action="{{route('cursos.destroy', $curso)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="mb-3 text-decoration-underline">Eliminar curso</button>
            </form>

            <div class="col-lg-8">
                <img src="https://peruweb.site/cdn/cursos/img/curso-css-portada.jpg" class="img-fluid" alt="">
                <h3>Bienvenido al curso <?php echo strtoupper($curso->name) ?></h3>
                <p>
                CSS (siglas en inglés de Cascading Style Sheets, o Hojas de Estilo en Cascada en español) es un lenguaje de programación utilizado para dar formato y estilo a los documentos HTML (HyperText Markup Language, o Lenguaje de Marcado de Hipertexto) de un sitio web. Con CSS, puedes controlar aspectos como el color, el tamaño y el tipo de letra de tu sitio web, así como la disposición de los elementos en la página. Utilizar CSS te permite separar el contenido del sitio web (que se escribe en HTML) de su apariencia (que se escribe en CSS), lo que hace que sea más fácil modificar el diseño y el estilo del sitio sin tener que cambiar el contenido.
                </p>
            </div>
            <div class="col-lg-4">

                <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Profesor</h5>
                <p><a href="#">Walter White</a></p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Costo</h5>
                <p>$165</p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Alumnos por sesión</h5>
                <p>30</p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                <h5>De Lunes a Viernes</h5>
                <p>5.00 pm - 7.00 pm</p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Duración Total</h5>
                <p>12 horas</p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Fecha de cierre</h5>
                <p>09/01/23</p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Fecha de inicio</h5>
                <p>03/01/23</p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Aula Virtual</h5>
                <p>Clases grabadas disponibles</p>
                </div>

            </div>
        </div>

    </div>
    </section><!-- End Cource Details Section -->

    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
    <div class="container" data-aos="fade-up">

        <div class="row">
        <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
            </li>
            </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://peruweb.site/cdn/cursos/img/course-details-tab-1.png" alt="" class="img-fluid">
                </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-2">
                <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://peruweb.site/cdn/cursos/img/course-details-tab-2.png" alt="" class="img-fluid">
                </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-3">
                <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://peruweb.site/cdn/cursos/img/course-details-tab-3.png" alt="" class="img-fluid">
                </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-4">
                <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://peruweb.site/cdn/cursos/img/course-details-tab-4.png" alt="" class="img-fluid">
                </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-5">
                <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://peruweb.site/cdn/cursos/img/course-details-tab-5.png" alt="" class="img-fluid">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

    </div>
    </section><!-- End Cource Details Tabs Section -->

    </main><!-- End #main -->
@endsection