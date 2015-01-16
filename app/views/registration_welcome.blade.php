@extends('layouts.front-master')

@section('title') Digital Lagos.Tv::Welcome @stop

@section('content')

<section id="content" role="main" class="content-wrap">
    <div class="container">
        <div class="row">
            <article class="col-md-12 intro">
                <div class="box">
                    <header>
                        <h1>Hi <?php ucfirst(Session::get('name'));?>!</h1>
                    </header>
                    <section class="cont-wrap">
                        <h2>Thank you for choosing DigitalLagos TV</h2>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
                            vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent
                            per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</p>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, <a href="#">Link goes here</a> and consent to This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                            auctor aliquet. Aenean sollicitudin</p>
                        <p class="regards">Regards,
                            <br>Matt Barnd,
                            <br>Chief Lorem Ipsum
                            <br><a href="#">Digitallagos.tv</a>
                        </p>
                    </section>
                </div>
            </article>
        </div>
    </div>
</section>
  
  @stop