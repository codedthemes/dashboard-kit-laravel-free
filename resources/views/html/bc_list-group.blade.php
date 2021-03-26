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

        <!-- [ Main Content ] start -->
        <div class="row mb-3">
            <div class="col-md-8">
                <h3>List group</h3>
                <p class="lead">Documentation and examples for List group, our small count and labeling component.</p>
                <p class="f-w-500">Check out <a href="https://dashboardkit.io/bootstrap/docs/index-bc-package.html#page-badge" target="_blank" class="badge bg-light-primary">Documentation</a></p>
            </div>
        </div>
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic example</h5>
                        <small class="m-0">The most basic list group is an unordered list with list items and the proper classes</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Active items</h5>
                        <small class="m-0">Add <code>.active</code> to a <code>.list-group-item</code> to indicate the current active selection.</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item active" aria-current="true">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Disabled items</h5>
                        <small class="m-0">Add <code>.disabled</code> to a <code>.list-group-item</code> to make it <em>appear</em> disabled. Note that some elements with <code>.disabled</code> will also require custom JavaScript to fully disable
                            their click events (e.g., links).</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item disabled" aria-disabled="true">Cras justo odio ( disabled )</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item disabled" aria-disabled="true">Morbi leo risus ( disabled )</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>List groups [ Links ]</h5>
                        <small class="m-0">Use <code>&lt;a&gt;</code>s or <code>&lt;button&gt;</code>s to create <em>actionable</em> list group items with hover, disabled, and active states by adding <code>.list-group-item-action</code>. We separate
                            these pseudo-classes to ensure list groups made of non-interactive elements (like <code>&lt;li&gt;</code>s or <code>&lt;div&gt;</code>s) don’t provide a click or tap affordance.</small>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                Cras justo odio
                            </a>
                            <a href="#!" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                            <a href="#!" class="list-group-item list-group-item-action">Morbi leo risus</a>
                            <a href="#!" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                            <a href="#!" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros ( disabled )</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>List groups [ Buttons ] </h5>
                        <small class="m-0">With <code>&lt;button&gt;</code>s, you can also make use of the <code>disabled</code> attribute instead of the <code>.disabled</code> class. Sadly, <code>&lt;a&gt;</code>s don’t support the disabled
                            attribute.</small>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                                Cras justo odio
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                            <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                            <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                            <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Flush</h5>
                        <small class="m-0">Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal</h5>
                        <small class="m-0">Add <code>.list-group-horizontal</code> to change the layout of list group items from vertical to horizontal across all breakpoints. Alternatively, choose a responsive variant
                            <code>.list-group-horizontal-{sm|md|lg|xl|xxl}</code> to make a list group horizontal starting at that breakpoint’s <code>min-width</code>. Currently <strong>horizontal list groups cannot be combined with flush list
                                groups.</strong></small>
                    </div>
                    <div class="card-body">
                        <h6 class="mt-4">list group horizontal</h6>
                        <hr>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                        </ul>
                        <h6 class="mt-4">list group horizontal small(sm)</h6>
                        <hr>
                        <ul class="list-group list-group-horizontal-sm">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                        </ul>
                        <h6 class="mt-4">list group horizontal medium(md)</h6>
                        <hr>
                        <ul class="list-group list-group-horizontal-md">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                        </ul>
                        <h6 class="mt-4">list group horizontal large(lg)</h6>
                        <hr>
                        <ul class="list-group list-group-horizontal-lg">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                        </ul>
                        <h6 class="mt-4">list group horizontal extra large(xl)</h6>
                        <hr>
                        <ul class="list-group list-group-horizontal-xl">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                        </ul>
                        <h6 class="mt-4">list group horizontal double extra large(xxl)</h6>
                        <hr>
                        <ul class="list-group list-group-horizontal-xxl">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Contextual classes</h5>
                        <small class="m-0">Use contextual classes to style list items with a stateful background and color.</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                            <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                            <li class="list-group-item list-group-item-success">A simple success list group item</li>
                            <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                            <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                            <li class="list-group-item list-group-item-info">A simple info list group item</li>
                            <li class="list-group-item list-group-item-light">A simple light list group item</li>
                            <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Contextual classes [ links ]</h5>
                        <small class="m-0">Contextual classes also work with <code>.list-group-item-action</code>. Note the addition of the hover styles here not present in the previous example. Also supported is the <code>.active</code> state; apply
                            it to indicate an active selection on a contextual list group item.</small>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>With badges</h5>
                        <small class="m-0">Add badges to any list group item to show unread counts, activity, and more</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio
                                <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge bg-primary rounded-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus
                                <span class="badge bg-primary rounded-pill">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom content</h5>
                        <small class="m-0">Add nearly any HTML within, even for linked list groups like the one below</small>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1 text-white">List group item heading</h5>
                                    <small>3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small>Donec id elit non mi porta.</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small class="text-muted">3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small class="text-muted">Donec id elit non mi porta.</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small class="text-muted">3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small class="text-muted">Donec id elit non mi porta.</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>List group Checkboxes</h5>
                        <small class="m-0">Place Bootstrap’s checkboxes and radios within list group items and customize as needed</small>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="">
                                Cras justo odio
                            </label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="">
                                Dapibus ac facilisis in
                            </label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="">
                                Morbi leo risus
                            </label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="">
                                Porta ac consectetur ac
                            </label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="">
                                Vestibulum at eros
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>List group radios</h5>
                        <small class="m-0">Place Bootstrap’s checkboxes and radios within list group items and customize as needed</small>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="radio" value="" name="listradio">
                                Cras justo odio
                            </label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="radio" value="" name="listradio">
                                Dapibus ac facilisis in
                            </label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="radio" value="" name="listradio">
                                Morbi leo risus
                            </label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="radio" value="" name="listradio">
                                Porta ac consectetur ac
                            </label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="radio" value="" name="listradio">
                                Vestibulum at eros
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>JavaScript behavior</h5>
                        <small class="m-0">Use the tab JavaScript plugin—include it individually or through the compiled <code>bootstrap.js</code> file—to extend our list group to create tabbable panes of local content.</small>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="tab" href="#list-home" role="tab" aria-controls="list-home">Home</a>
                                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="tab" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
                                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="tab" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
                                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="tab" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                        <p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat
                                            nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi
                                            enim eu nostrud do aliquip veniam minim.</p>
                                    </div>
                                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                        <p>Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim
                                            incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo
                                            veniam incididunt veniam ad.</p>
                                    </div>
                                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                        <p>Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat enim
                                            tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt. Consectetur et
                                            fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                        <p>Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est
                                            cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor
                                            quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
@include('html.layouts.footer-bottom-link')
</body>

</html>
