@extends('visitor.layouts.main-layout')

@section('title', 'Blogs')

@section('page-content')
    <div class="wrap full-wrap">
        <div class="main-wrap">
            <section class="main main-archive">

                <article class="post result">
                    <div class="inner">
                        <h1 class="searching">Blog</h1>
                        <p>A cute little description would go in here</p>
                    </div>
                </article>

                <div class="loop">


                    <article class="post format-gallery post_format-post-format-gallery">


                        <a href="#" title="Running through Chicago">
                            <div class="part-gallery">
                                <div class="flexslider">
                                    <ul class="slides">

                                        <li><span class="post-image"><img src="{{ asset('visitor-assets') }}/images/Run-3.jpg" alt="Run-3" /></span>
                                        </li>
                                        <li><span class="post-image"><img src="{{ asset('visitor-assets') }}/images/Run-1.jpg" alt="Run-1" /></span>
                                        </li>
                                        <li><span class="post-image"><img src="{{ asset('visitor-assets') }}/images/Run-2.jpg" alt="Run-2" /></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </a>

                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#" title="Running through Chicago">
                                    Running through Chicago </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#" title="Running through Chicago">
                                        <time class="post-date updated" datetime="2015-02-01">February 1, 2015</time>
                                    </a>
                                </li>

                                <li class="comments post-tags">
                                    <a href="#">2
                                        Comments</a>
                                </li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus laoreet
                                    mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis nec.
                                    Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu magna
                                    placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna
                                    placerat pulvinar.</p>
                                <blockquote>
                                    <p>“There are always two people in every picture: the photographer and the
                                        viewer.”<cite>Ansel Adams</cite></p>
                                </blockquote>
                                <p>Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna placerat pulvinar.
                                    Nullam ac odio non ligula semper auctor. Aenean at dui dui, non scelerisque nisi. Morbi
                                    ullamcorper dapibus nisl, ullamcorper fringilla eros pulvinar et. <a href="#"
                                        class="more-link">Read More</a></p>
                            </div>


                            <ul class="meta bottom">


                                <li class="cat post-tags">Saved: <a href="#">Blog</a>,
                                    <a href="#">Fitness</a>
                                </li>


                            </ul>

                        </div>
                    </article>


                    <article class="post format-link has-post-thumbnail post_format-post-format-link">


                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#" title="What a cute template">
                                    What a cute template </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#" title="What a cute template">
                                        <time class="post-date updated" datetime="2014-11-06">November 6, 2014</time>
                                    </a>
                                </li>

                                <li class="comments post-tags">
                                    <a href="#">0
                                        Comments</a>
                                </li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>

                            <div class="part-link">
                                <a class="more-link" href="https://freehtml5.co" title="What a cute template"
                                    target="_self">Visit Website</a>
                            </div>


                            <ul class="meta bottom">

                                <li class="cat post-tags">Saved: <a href="#">Blog</a>,
                                    <a href="#" rel="category tag">Cute</a>
                                </li>

                            </ul>

                        </div>
                    </article>


                    <article class="post format-image has-post-thumbnail post_format-post-format-image">




                        <span class="post-image">
                            <a href="#" title="Camper Van Fun">
                                <img width="916" height="611" src="{{ asset('visitor-assets') }}/images/Camper-1.jpg"
                                    class="attachment-desktop size-desktop" alt="" />
                            </a>

                        </span>


                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#" title="Camper Van Fun">
                                    Camper Van Fun </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#" title="Camper Van Fun">
                                        <time class="post-date updated" datetime="2014-10-06">October 6, 2014</time>
                                    </a>
                                </li>

                                <li class="comments post-tags">
                                    <a href="#">0
                                        Comments</a>
                                </li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus laoreet
                                    mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis nec.
                                    Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu magna
                                    placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna
                                    placerat pulvinar. <a href="#" class="more-link">Read More</a></p>
                            </div>


                            <ul class="meta bottom">

                                <li class="cat post-tags">Saved: <a href="#">Blog</a>,
                                    <a href="#">Fun</a>
                                </li>

                            </ul>
                        </div>
                    </article>


                    <article class="post format-quote has-post-thumbnail post_format-post-format-quote">


                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#" title="A lovely Quote">
                                    A lovely Quote </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#" title="A lovely Quote">
                                        <time class="post-date updated" datetime="2014-10-01">October 1, 2014</time>
                                    </a>
                                </li>

                                <li class="comments post-tags">
                                    <a href="#">0
                                        Comments</a>
                                </li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>
                            <div class="post-content">
                                <blockquote class="content-quote">
                                    <p>There are always two people in every picture: the photographer and the viewer.</p>
                                    <cite>Ansel Adams</cite>
                                </blockquote>
                            </div>


                            <ul class="meta bottom">

                                <li class="cat post-tags">Saved: <a href="#">Blog</a>,
                                    <a href="#">Fun</a>
                                </li>

                            </ul>

                        </div>
                    </article>


                    <article class="post format-video has-post-thumbnail post_format-post-format-video">


                        <span class="post-image post-video">
                            <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe
                                    src="https://player.vimeo.com/video/33091687?portrait=0" frameborder="0"
                                    webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe></div>
                        </span>

                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#" title="What a video">
                                    What a video </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#" title="What a video">
                                        <time class="post-date updated" datetime="2014-08-31">August 31, 2014</time>
                                    </a>
                                </li>

                                <li class="comments post-tags">
                                    <a href="#">0
                                        Comments</a>
                                </li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus laoreet
                                    mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis nec.
                                    Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu magna
                                    placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna
                                    placerat pulvinar. <a href="#" class="more-link">Read More</a></p>
                            </div>


                            <ul class="meta bottom">

                                <li class="cat post-tags">Saved: <a href="#">Blog</a>,
                                    <a href="#">Fitness</a>,
                                    <a href="#">Fun</a>
                                </li>

                            </ul>

                        </div>
                    </article>


                    <article class="post has-post-thumbnail">


                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#" title="As an aside">
                                    As an aside </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#" title="As an aside">
                                        <time class="post-date updated" datetime="2014-06-02">June 2, 2014</time>
                                    </a>
                                </li>

                                <li class="comments post-tags">
                                    <a href="#">0
                                        Comments</a>
                                </li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>
                            <div class="post-content">
                                <p style="text-align: center">Sometimes days seem long sometimes they seem short.</p>
                            </div>


                            <ul class="meta bottom">

                                <li class="cat post-tags">Saved: <a href="#">Blog</a>
                                </li>

                            </ul>

                        </div>
                    </article>

                    <article class="post has-post-thumbnail">




                        <span class="post-image">
                            <a href="#" title="The Flower Shop">
                                <img width="916" height="611" src="{{ asset('visitor-assets') }}/images/Flower-Shop.jpg"
                                    class="attachment-desktop size-desktop" alt="" />
                            </a>
                        </span>


                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#" title="The Flower Shop">
                                    The Flower Shop </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#" title="The Flower Shop">
                                        <time class="post-date updated" datetime="2014-05-02">May 2, 2014</time>
                                    </a>
                                </li>

                                <li class="comments post-tags">
                                    <a href="#">0
                                        Comments</a>
                                </li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus laoreet
                                    mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis nec.
                                    Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu magna
                                    placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna
                                    placerat pulvinar.</p>
                                <blockquote>
                                    <p>“There are always two people in every picture: the photographer and the
                                        viewer.”<cite>Ansel Adams</cite></p>
                                </blockquote>
                                <p>Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna placerat pulvinar.
                                    Nullam ac odio non ligula semper auctor. Aenean at dui dui, non scelerisque nisi. Morbi
                                    ullamcorper dapibus nisl, ullamcorper fringilla eros pulvinar et. <a href="#"
                                        class="more-link">Read More</a></p>
                            </div>


                            <ul class="meta bottom">

                                <li class="cat post-tags">Saved: <a href="#">Blog</a>,
                                    <a href="#" rel="category tag">Cute</a>
                                </li>

                            </ul>

                        </div>
                    </article>


                </div>


            </section>


        </div><!-- /main-wrap -->


    </div><!-- /wrap -->
@endsection
