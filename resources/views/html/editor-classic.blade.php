<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    @include('html.layouts.head-bottom-link')
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Classic-Editor</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Editor</a></li>
                            <li class="breadcrumb-item">Classic-Editor</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Classic-editor ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Classic Editor</h5>
                    </div>
                    <div class="card-body">
                        <textarea name="content" id="classic-editor">
                            <h2>The three greatest things you learn from traveling</h2>
                            <p>Like all the great things on earth traveling teaches us by example. Here are some of the most precious lessons I’ve learned over the years of traveling.</p>
                            <figure class="image image-style-side illustration" style="height:400px"><img alt="Three Monks walking on ancient temple." src="https://ckeditor.com/assets/images/bg/volcano-8967c4575e.jpg">
                                <figcaption>Leaving your comfort zone might lead you to such beautiful sceneries like this one.</figcaption>
                            </figure>
                            <h3>Appreciation of diversity</h3>
                            <p>Getting used to an entirely different culture can be challenging. While it’s also nice to learn about cultures online or from books, nothing comes close to experiencing cultural diversity in person. You learn to appreciate each and every single one of the differences while you become more culturally fluid.</p>
                            <blockquote>
                                <p>The real voyage of discovery consists not in seeking new landscapes, but having new eyes.</p>
                                <p><strong>Marcel Proust</strong></p>
                            </blockquote>
                            <h3>Improvisation</h3>
                            <p>Life doesn't allow us to execute every single plan perfectly. This especially seems to be the case when you travel. You plan it down to every minute with a big checklist; but when it comes to executing it, something always comes up and you’re left with your improvising skills. You learn to adapt as you go. Here’s how my travel checklist looks now:</p>
                            <ul class="todo-list">
                                <li>
                                    <label class="todo-list__label">
                                        <input type="checkbox" checked="checked"><span class="todo-list__label__description">buy the ticket</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="todo-list__label">
                                        <input type="checkbox" checked="checked"><span class="todo-list__label__description">start your adventure</span>
                                    </label>
                                </li>
                            </ul>
                            <h3>Confidence</h3>
                            <p>Going to a new place can be quite terrifying. While change and uncertainty makes us scared, traveling teaches us how ridiculous it is to be afraid of something before it happens. The moment you face your fear and see there was nothing to be afraid of, is the moment you discover bliss.</p>
                        </textarea>
                    </div>
                </div>
            </div>
            <!-- [ Classic-editor ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- Ckeditor js -->
<script src="assets/js/plugins/ckeditor.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $(function() {
            ClassicEditor.create(document.querySelector('#classic-editor'))
                .catch(error => {
                    console.error(error);
                });
        });
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
