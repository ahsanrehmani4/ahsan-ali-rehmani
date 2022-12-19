@extends('visitor.layouts.main-layout')

@section('title', 'Contact')

@section('page-content')
    <div class="wrap full-wrap">
        <div class="main-wrap">

            <section class="main">
                <article class="post page">

                    <div class="inner">
                        <h1>Contact me</h1>
                        <div class="post-content">
                            <p>You can contact me using the following form :)</p>
                            <form id="fh5co_contact_form">
                                <p>
                                    <input type="text" name="name" value="" size="40" placeholder="Name*">
                                </p>
                                <p>
                                    <input type="email" name="email" value="" size="40" placeholder="Email*">
                                </p>
                                <p>
                                    <textarea name="message" cols="40" rows="10" placeholder="Your Message"></textarea>
                                </p>
                                <p class="form-submit"><input type="submit" value="Send"></p>
                            </form>
                        </div>
                    </div>

                </article>
                <div class="border"></div>

            </section>
        </div><!-- /main-wrap -->
    </div><!-- /wrap -->
@endsection
