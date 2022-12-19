@extends('visitor.layouts.main-layout')

@section('title', 'Show Single Blog Here')

@section('page-content')
    <div class="wrap full-wrap">
        <div class="main-wrap">
            <section class="main">


                <article class="post has-post-thumbnail">

                    <span class="post-image">
                        <img width="916" height="611" src="{{ asset('visitor-assets') }}/images/Lollipop.jpg" alt="">
                    </span>


                    <div class="inner">

                        <h1 class="entry-title">The Lollipop</h1>
                        <ul class="meta top">
                            <li class="time">
                                <time class="post-date updated" datetime="2015-02-02">February 2, 2015 </time>
                            </li>

                            <li class="comments">
                                <a href="single.html#respond">0 Comments</a>
                            </li>

                            <li class="author-m">
                                By <span class="vcard author"><span class="fn"><a href="blog.html"
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
                                ullamcorper dapibus nisl, ullamcorper fringilla eros pulvinar et.</p>
                            <p>Nulla rhoncus elementum rhoncus. Pellentesque habitant morbi tristique senectus et netus et
                                malesuada fames ac turpis egestas. Pellentesque a erat velit, venenatis porttitor mauris.
                            </p>
                            <p>&nbsp;</p>
                            <p>Fusce semper risus eu magna placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce
                                semper risus eu magna placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce
                                semper risus eu magna placerat pulvinar. Nullam ac odio non ligula semper auctor. Aenean at
                                dui dui, non scelerisque nisi. Morbi ullamcorper dapibus nisl, ullamcorper fringilla eros
                                pulvinar et. Nulla rhoncus elementum rhoncus. Pellentesque habitant morbi tristique senectus
                                et netus et malesuada fames ac turpis egestas. Pellentesque a erat velit, venenatis
                                porttitor mauris.</p>
                        </div>


                        <ul class="meta bottom">
                            <li class="cat">Saved: <a href="#">Blog</a>, <a href="#">Cute</a></li>
                        </ul>

                    </div>
                </article>

                <nav class="pagination">
                    <ul>
                        <li class="older-posts">
                            <span><a href="#" rel="prev"><i class="fa fa-chevron-left"></i> <span
                                        class="i">Prev</span></a></span>
                        </li>
                        <li class="share-link">
                            <a href="#share"><i class="fa fa-share-alt"></i><span class="i">Share</span></a>
                        </li>
                        <li class="newer-posts">
                            <span class="inactive"><span class="i">Next</span> <i
                                    class="fa fa-chevron-right"></i></span>
                        </li>

                    </ul>
                </nav>





                <aside class="author-wrap">
                    <span class="author-avatar"><img alt="" src="{{ asset('visitor-assets') }}/images/about-me.jpg"
                            class="avatar avatar-200 photo" height="200" width="200"></span>
                    <div class="author-bio">
                        <h4><a href="blog.html">Clare Smith</a></h4>
                        <p>My name is Clare and I'm a serial blogger. I love life and more than anything in the whole wide
                            world, I love taking photographs. Oh and did I mention, I quite like blogging?</p>
                        <div class="author-socials-wrap">

                            <a class="author-socials" href="http://twitter.com/fh5co" target="_blank"><i
                                    class="fa fa-twitter"></i><span>Twitter</span></a>
                            <a class="author-socials" href="http://facebook.com/fh5co" target="_blank"><i
                                    class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a class="author-socials" href="#" target="_blank"><i
                                    class="fa fa-instagram"></i><span>Instagram</span></a>
                            <a class="author-socials" href="#" target="_blank"><i
                                    class="fa fa-pinterest"></i><span>Pinterest</span></a>
                            <a class="author-socials" href="#" target="_blank"><i
                                    class="fa fa-flickr"></i><span>Flickr</span></a>
                            <a class="author-socials" href="https://freehtml5.co" target="_blank"><i
                                    class="fa fa-link"></i><span>Website</span></a>

                        </div>
                    </div>

                </aside>




                <div class="related-posts">

                    <h5>Related</h5>

                    <div class="posts">

                        <aside class="related post has-post-thumbnail">

                            <span class="post-image">
                                <a href="#" title="The Apothecary">
                                    <img width="468" height="468" src="{{ asset('visitor-assets') }}/images/Apothecary.jpg" alt=""></a>
                            </span>


                            <div class="inner">

                                <h6 class="entry-title">

                                    <a href="#" title="The Apothecary">

                                        The Apothecary
                                    </a>
                                    <ul class="meta top">
                                        <li class="time">
                                            <time class="post-date updated" datetime="2015-01-31">January 31, 2015</time>
                                        </li>
                                    </ul>

                                </h6>

                            </div>
                        </aside>


                        <aside class="related post has-post-thumbnail">

                            <span class="post-image">
                                <a href="#" title="The Flowers">
                                    <img width="468" height="468" src="{{ asset('visitor-assets') }}/images/Flowers.jpg" alt=""></a>
                            </span>


                            <div class="inner">

                                <h6 class="entry-title">

                                    <a href="#" title="The Flowers">The Flowers</a>
                                    <ul class="meta top">
                                        <li class="time">
                                            <time class="post-date updated" datetime="2015-01-25">January 25, 2015</time>
                                        </li>
                                    </ul>

                                </h6>

                            </div>
                        </aside>

                        <aside class="related post has-post-thumbnail">

                            <span class="post-image">
                                <a href="#" title="The Sunny Day">
                                    <img width="468" height="468" src="{{ asset('visitor-assets') }}/images/Sun.jpg" alt="">
                                </a>
                            </span>


                            <div class="inner">

                                <h6 class="post-title entry-title">

                                    <a href="#" title="The Sunny Day">The Sunny Day</a>
                                    <ul class="meta top">
                                        <li class="time">
                                            <time class="post-date updated" datetime="2015-01-21">January 21, 2015</time>
                                        </li>
                                    </ul>

                                </h6>

                            </div>
                        </aside>


                    </div>
                </div>



                <div class="comments-wrapper">

                    <div id="comments" class="inner">

                        <div class="comments-inner">
                            <h3 id="respond-title">Comments (0)</h3>
                        </div>

                        <aside class="comments">
                        </aside>

                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">Leave a comment <small><a rel="nofollow"
                                        id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel
                                        reply</a></small></h3>
                            <form>
                                <p>Your email address will not be published. Required fields are marked <span
                                        class="required">*</span></p>
                                <p><label for="comment">Comment</label>
                                    <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Comment"></textarea>
                                </p>
                                <p class="comment-form-author"><label class="hidden" for="author">Name</label> <span
                                        class="required hidden">*</span><input id="author" name="author"
                                        type="text" value="" size="30" aria-required="true"
                                        placeholder="Name"></p>
                                <p><label for="email">Email</label> <span class="required ">*</span><input
                                        id="email" name="email" type="text" value="" size="30"
                                        aria-required="true" placeholder="Email"></p>
                                <p><label for="url">Website</label><input id="url" name="url"
                                        type="text" value="" size="30" placeholder="Website"></p>
                                <p class="form-submit"><input name="submit" type="submit" id="submit"
                                        class="submit" value="Post Comment"></p>
                            </form>
                        </div><!-- #respond -->

                    </div>

                </div>


            </section>


        </div><!-- /main-wrap -->


    </div><!-- /wrap -->
@endsection
