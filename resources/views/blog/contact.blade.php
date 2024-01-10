@extends("blog.blankWithBottom")
@section("pageTitle")
About
@endsection
@section("mainContent")
 <!-- Start Main content -->
 <main class="bg-grey pb-30">
    <div class="container single-content">
        <article class="entry-wraper">
            <h1 class="mt-30">Get in touch</h1>
            <hr class="wp-block-separator is-style-wide">
            <form class="form-contact comment_form" action="#" id="commentForm">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input required class="form-control" name="name" id="name" type="text" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input required class="form-control" name="email" id="email" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input required class="form-control" name="website" id="website" type="text" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea required class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="button button-contactForm">Send message</button>
                </div>
            </form>
        </article>
    </div>
    <!--container-->
</main>
<!-- End Main content -->
@endsection
