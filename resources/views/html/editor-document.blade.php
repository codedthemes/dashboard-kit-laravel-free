<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <style>
        .document-editor {
            border: 1px solid var(--ck-color-base-border);
            border-radius: var(--ck-border-radius);
            max-height: 700px;
            display: flex;
            flex-flow: column nowrap;
        }

        .document-editor__toolbar {
            z-index: 1;
            box-shadow: 0 0 5px hsla(0, 0%, 0%, .2);
            border-bottom: 1px solid var(--ck-color-toolbar-border);
        }

        .document-editor__toolbar .ck-toolbar {
            border: 0;
            border-radius: 0;
        }

        .document-editor__editable-container {
            padding: calc(2 * var(--ck-spacing-large));
            background: #eee;
            overflow-y: scroll;
        }

        .document-editor__editable-container .ck-editor__editable.ck-editor__editable_inline {
            width: 21cm;
            min-height: 29.7cm;
            padding: 1cm 2cm 2cm;
            border: 1px hsl(0, 0%, 82.7%) solid;
            border-radius: var(--ck-border-radius);
            background: white;
            box-shadow: 0 0 5px hsla(0, 0%, 0%, .1);
            margin: 0 auto;
        }

        .document-editor .ck-content,
        .document-editor .ck-heading-dropdown .ck-list .ck-button__label {
            font: 16px/1.6 "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .document-editor .ck-heading-dropdown .ck-list .ck-button__label {
            line-height: calc(1.7 * var(--ck-line-height-base) * var(--ck-font-size-base));
            min-width: 6em;
        }

        .document-editor .ck-heading-dropdown .ck-list .ck-button:not(.ck-heading_paragraph) .ck-button__label {
            transform: scale(0.8);
            transform-origin: left;
        }

        .document-editor .ck-content h2,
        .document-editor .ck-heading-dropdown .ck-heading_heading1 .ck-button__label {
            font-size: 2.18em;
            font-weight: normal;
        }

        .document-editor .ck-content h2 {
            line-height: 1.37em;
            padding-top: .342em;
            margin-bottom: .142em;
        }

        .document-editor .ck-content h3,
        .document-editor .ck-heading-dropdown .ck-heading_heading2 .ck-button__label {
            font-size: 1.75em;
            font-weight: normal;
            color: hsl(203, 100%, 50%);
        }

        .document-editor .ck-heading-dropdown .ck-heading_heading2.ck-on .ck-button__label {
            color: var(--ck-color-list-button-on-text);
        }

        .document-editor .ck-content h3 {
            line-height: 1.86em;
            padding-top: .171em;
            margin-bottom: .357em;
        }

        .document-editor .ck-content h4,
        .document-editor .ck-heading-dropdown .ck-heading_heading3 .ck-button__label {
            font-size: 1.31em;
            font-weight: bold;
        }

        .document-editor .ck-content h4 {
            line-height: 1.24em;
            padding-top: .286em;
            margin-bottom: .952em;
        }

        .document-editor .ck-content p {
            font-size: 1em;
            line-height: 1.63em;
            padding-top: .5em;
            margin-bottom: 1.13em;
        }

        .document-editor .ck-content blockquote {
            font-family: Georgia, serif;
            margin-left: calc(2 * var(--ck-spacing-large));
            margin-right: calc(2 * var(--ck-spacing-large));
        }
    </style>
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
                            <h5 class="m-b-10">Document-Editor</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Editor</a></li>
                            <li class="breadcrumb-item">Document-Editor</li>
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
                        <h5>Document Editor</h5>
                    </div>
                    <div class="card-body">
                        <div class="document-editor">
                            <div class="document-editor__toolbar"></div>
                            <div class="document-editor__editable-container">
                                <div class="document-editor__editable">
                                    <h2 style="text-align:center;">The Flavorful Tuscany Meetup</h2>
                                    <h3 style="text-align:center;">Welcome letter</h3>
                                    <p>Dear Guest,</p>
                                    <p>We are delighted to welcome you to the annual <i>Flavorful Tuscany Meetup</i> and hope you will enjoy the programmer as well as your stay at the <a href="http://ckeditor.com">Bilancino Hotel</a>.</p>
                                    <p>Please find below the full schedule of the event.</p>
                                    <figure class="table ck-widget ck-widget_selectable" contenteditable="false">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="ck-editor__editable ck-editor__nested-editable" contenteditable="true" colspan="2">Saturday, July 14</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="ck-editor__editable ck-editor__nested-editable" contenteditable="true">9:30&nbsp;AM&nbsp;-&nbsp;11:30&nbsp;AM</td>
                                                    <td class="ck-editor__editable ck-editor__nested-editable" contenteditable="true">Americano vs. Brewed - “know coffee” with <strong>Stefano Garau</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="ck-editor__editable ck-editor__nested-editable" contenteditable="true">1:00&nbsp;PM&nbsp;-&nbsp;3:00&nbsp;PM</td>
                                                    <td class="ck-editor__editable ck-editor__nested-editable" contenteditable="true">Pappardelle al pomodoro -
                                                        <mark class="marker-yellow">live cooking</mark> with <strong>Rita</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="ck-editor__editable ck-editor__nested-editable" contenteditable="true">5:00&nbsp;PM&nbsp;-&nbsp;8:00&nbsp;PM</td>
                                                    <td class="ck-editor__editable ck-editor__nested-editable" contenteditable="true">Tuscan vineyards at a glancewith <strong>Frederico Riscoli</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </figure>
                                    <blockquote>
                                        <p>The annual Flavorful Tuscany meetups are always a culinary discovery. You get the best of Tuscan flavors during an intense one-day stay at one of the top hotels of the region. All the
                                            sessions are lead by top chefs passionate about their profession. I would certainly recommend to save the date in your calendar for this one!</p>
                                        <p>Angelina Calvino, food journalist</p>
                                    </blockquote>
                                    <p>Please arrive at the <a href="http://ckeditor.com">Bilancino Hotel</a> reception desk
                                        <mark class="marker-yellow">at least half an hour earlier</mark> to make sure that the registration process goes as smoothly as possible.</p>
                                    <p>We look forward to welcoming you to the event.</p>
                                    <p><strong>Victoria Valc</strong></p>
                                    <p><strong>Event Manager</strong></p>
                                    <p><strong>Bilancino Hotel</strong></p>
                                </div>
                            </div>
                        </div>
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
<script src="assets/js/plugins/ckeditor/ckeditor-document.bundle.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $(function() {
            DecoupledEditor.create(document.querySelector('.document-editor__editable'))
                .then(editor => {
                    const toolbarContainer = document.querySelector('.document-editor__toolbar');
                    toolbarContainer.appendChild(editor.ui.view.toolbar.element);
                })
                .catch(error => {});
        });
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
