@extends('visitor.layouts.main-layout')

@section('title', 'About')

@section('page-content')
    <div class="wrap full-wrap">
        <div class="main-wrap">

            <section class="main">
                <article class="post page">

                    <div class="inner">
                        <h1>Who is Ahsan?</h1>
                        <div class="post-content">
                            <p><img class="size-full alignleft rounded" src="{{ asset('visitor-assets/images/about-me.jpg') }}" alt="about-clare"
                                    width="300" height="300">
                                Ahsan Ali Rehmani is a responsible and professional Laravel PHP backend developer from
                                Rahim Yar Khan City.</p>
                            <p>Having worked professionally for 2+ years in several tech industries, I am able to
                                perform under pressure, manage stressful circumstances, collaborate with teams, and
                                effectively manage teamwork.</p>
                            <p>Ahsan always love to add his suggestion on ways to make products better and on initiatives
                                that could ultimately save cost and time.</p>
                            <p>
                                <a target="_self" class="social twitter black" href="#"> Twitter </a>
                                <a target="_self" class="social facebook black" href="#"> Facebook&nbsp;</a>
                                <a target="_self" class="social instagram black" href="#">&nbsp;instagram&nbsp;</a>
                                <a target="_self" class="social flickr black" href="#"> flickr&nbsp;</a>
                            </p>

                        </div>
                    </div>

                </article>
                <div class="border"></div>


            </section>


        </div><!-- /main-wrap -->


    </div><!-- /wrap -->
@endsection
