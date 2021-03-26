<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    @include('html.layouts.head-bottom-link')
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main Content ] start -->
<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Typeahead</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Typeahead</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <h3>Typeahead</h3>
                        <p class="lead">It is the must need Date Picker with all possible options available. You can tweak the settings whatever you required for Date selection.</p>
                        <p class="f-w-500">Check out <a href="https://github.com/twitter/typeahead.js" target="_blank" class="badge bg-light-dark">Github</a></p>
                        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pc-typeahead-modal">Launch modal typeaheads</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Simple Demo</label>
                                <div class="col-lg-5 col-md-9 col-sm-12">
                                    <div class="typeahead">
                                        <input class="form-control" id="pc-typeahead-1" type="text" dir="ltr" placeholder="States of USA">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Bloodhound Suggestion</label>
                                <div class="col-lg-5 col-md-9 col-sm-12">
                                    <div class="typeahead">
                                        <input class="form-control" id="pc-typeahead-2" type="text" dir="ltr" placeholder="States of USA">
                                    </div>
                                    <small class="text-muted">
                                        Bloodhound is robust, flexible, and offers advanced functionalities such as prefetching, intelligent caching, fast lookups, and backfilling with remote data.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Scrollable Dropdown Menu</label>
                                <div class="col-lg-5 col-md-9 col-sm-12">
                                    <div class="typeahead scrollable-dropdown-menu">
                                        <input class="form-control" id="pc-typeahead-7" type="text" dir="ltr" placeholder="Countries">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Prefetch</label>
                                <div class="col-lg-5 col-md-9 col-sm-12">
                                    <div class="typeahead">
                                        <input class="form-control" id="pc-typeahead-3" type="text" dir="ltr" placeholder="Countries">
                                    </div>
                                    <small class="text-muted">Prefetched data is fetched and processed on initialization. If the browser supports local storage, the processed data will be cached there to prevent additional network requests on
                                        subsequent page loads.</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Custom Templates</label>
                                <div class="col-lg-5 col-md-9 col-sm-12">
                                    <div class="typeahead">
                                        <input class="form-control" id="pc-typeahead-4" type="text" dir="ltr" placeholder="Oscar winners for Best Picture">
                                    </div>
                                    <small class="form-text text-muted">Custom templates give you full control over how suggestions get rendered making it easy to customize the look and feel of your typeahead.</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Default Suggestions</label>
                                <div class="col-lg-5 col-md-9 col-sm-12">
                                    <div class="typeahead">
                                        <input class="form-control" id="pc-typeahead-6-ds" type="text" dir="ltr" placeholder="NFL Teams">
                                    </div>
                                    <small class="form-text text-muted">Default suggestions can be shown for empty queries by setting the minLength option to 0 and having the source return suggestions for empty queries.</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Multiple Datasets</label>
                                <div class="col-lg-5 col-md-9 col-sm-12">
                                    <div class="typeahead">
                                        <input class="form-control" id="pc-typeahead-5" type="text" dir="ltr" placeholder="Select an option">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!--begin::Modal-->
<div class="modal fade" id="pc-typeahead-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Typeahead Examples</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="pc-form pc-form--fit pc-form--label-right">
                <div class="modal-body">
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Simple Demo</label>
                        <div class="col-lg-8 col-sm-12">
                            <div class="typeahead">
                                <input class="form-control" id="pc-typeahead-1-modal" dir="ltr" type="text" placeholder="States of USA">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Bloodhound Suggestion</label>
                        <div class="col-lg-8 col-sm-12">
                            <div class="typeahead">
                                <input class="form-control" id="pc-typeahead-2-modal" dir="ltr" type="text" placeholder="States of USA">
                            </div>
                            <div class="form-text text-muted">
                                Bloodhound is robust, flexible, and offers advanced functionalities such as prefetching, intelligent caching, fast lookups, and backfilling with remote data.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Modal-->
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- tagify -->
<script src="assets/js/plugins/typeahead.bundle.min.js"></script>
<script>
    var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
        'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
        'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
        'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
        'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
        'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
        'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
        'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
        'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
    ];
    $(function() {
        var substringMatcher = function(strs) {
            return function findMatches(q, cb) {
                var matches, substringRegex;

                // an array that will be populated with substring matches
                matches = [];

                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');

                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(strs, function(i, str) {
                    if (substrRegex.test(str)) {
                        matches.push(str);
                    }
                });

                cb(matches);
            };
        };

        $('#pc-typeahead-1, #pc-typeahead-1-modal').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'states',
            source: substringMatcher(states)
        });
    });
    $(function() {
        // constructs the suggestion engine
        var bloodhound = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // `states` is an array of state names defined in "The Basics"
            local: states
        });

        $('#pc-typeahead-2, #pc-typeahead-2-modal').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'states',
            source: bloodhound
        });
    });
    $(function() {
        var countries = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: 'assets/json/typehead/countries.json'
        });
        // passing in `null` for the `options` arguments will result in the default
        // options being used
        $('#pc-typeahead-3').typeahead(null, {
            name: 'countries',
            source: countries
        });
    });
    $(function() {
        var bestPictures = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: 'assets/json/typehead/movies.json'
        });

        $('#pc-typeahead-4').typeahead(null, {
            name: 'best-pictures',
            display: 'value',
            source: bestPictures,
            templates: {
                empty: [
                    '<div class="empty-message" style="padding: 10px 15px; text-align: center;">',
                    'unable to find any Best Picture winners that match the current query',
                    '</div>'
                ].join('\n'),
                suggestion: function(data) {
                    return '<div><strong>' + data.value + '</strong> - ' + data.year + '</div>';
                }
            }
        });
    });
    $(function() {
        var nbaTeams = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: 'assets/json/typehead/nba.json'
        });

        var nhlTeams = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: 'assets/json/typehead/nhl.json'
        });

        $('#pc-typeahead-5').typeahead({
            highlight: true
        }, {
            name: 'nba-teams',
            display: 'team',
            source: nbaTeams,
            templates: {
                header: '<h3 class="league-name" style="padding: 5px 15px; font-size: 1.2rem; margin:0;">NBA Teams</h3>'
            }
        }, {
            name: 'nhl-teams',
            display: 'team',
            source: nhlTeams,
            templates: {
                header: '<h3 class="league-name" style="padding: 5px 15px; font-size: 1.2rem; margin:0;">NHL Teams</h3>'
            }
        });
    });
    $(function() {
        var nflTeams = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            identify: function(obj) {
                return obj.team;
            },
            prefetch: 'assets/json/typehead/countries.json'
        });
        function nflTeamsWithDefaults(q, sync) {
            if (q === '') {
                sync(nflTeams.get('Finland', 'Andorra', 'Canada'));
            } else {
                nflTeams.search(q, sync);
            }
        }
        $('#pc-typeahead-6-ds').typeahead({
            minLength: 0,
            highlight: true
        }, {
            name: 'countries',
            source: nflTeamsWithDefaults
        });
    });
    $(function() {
        var countries = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: 'assets/json/typehead/countries.json'
        });
        // passing in `null` for the `options` arguments will result in the default
        // options being used
        $('#pc-typeahead-7').typeahead(null, {
            name: 'countries',
            source: countries
        });
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
