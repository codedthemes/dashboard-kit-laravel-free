<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-select.min.css">
    @include('html.layouts.head-bottom-link')
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main content ] start -->
<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Choices</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Choices</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <h3>Choices js</h3>
                        <p class="lead">Choices.js is a lightweight, configurable select box/text input plugin. Similar to Select2 and Selectize but without the jQuery dependency.</p>
                        <p class="f-w-500">Check out <a href="https://joshuajohnson.co.uk/Choices/" target="_blank" class="badge bg-light-dark">Github</a></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Text inputs</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Limited to 5 values with remove button</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <input class="form-control" id="choices-text-remove-button" type="text" value="preset-1,preset-2" placeholder="Enter something" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Unique values only, no pasting</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <input class="form-control" id="choices-text-unique-values" type="text" value="preset-1, preset-2" placeholder="This is a placeholder" class="custom class" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Email addresses only</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <input class="form-control" id="choices-text-email-filter" type="text" placeholder="This is a placeholder" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Disabled</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <input class="form-control" id="choices-text-disabled" type="text" value="josh@joshuajohnson.co.uk, joe@bloggs.co.uk" placeholder="This is a placeholder" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Prepends and appends a value to each items return value</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <input class="form-control" id="choices-text-prepend-append-value" type="text" value="preset-1, preset-2" placeholder="This is a placeholder" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Preset values passed through options</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <input class="form-control" id="choices-text-preset-values" type="text" value="Michael Smith" placeholder="This is a placeholder" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">I18N labels</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <input class="form-control" id="choices-text-i18n" type="text" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Right-to-left</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <input data-trigger class="form-control" id="choices-text-rtl" type="text" value="Value 1, Value 2" dir="rtl" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Multiple select input</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Default</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" data-trigger name="choices-multiple-default" id="choices-multiple-default" placeholder="This is a placeholder" multiple>
                                        <option value="Choice 1" selected>Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                        <option value="Choice 4" disabled>Choice 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">With remove button</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="choices-multiple-remove-button" id="choices-multiple-remove-button" placeholder="This is a placeholder" multiple>
                                        <option value="Choice 1" selected>Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                        <option value="Choice 4">Choice 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Option groups</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="choices-multiple-groups" id="choices-multiple-groups" placeholder="This is a placeholder" multiple>
                                        <option value="">Choose a city</option>
                                        <optgroup label="UK">
                                            <option value="London">London</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Liverpool">Liverpool</option>
                                        </optgroup>
                                        <optgroup label="FR">
                                            <option value="Paris">Paris</option>
                                            <option value="Lyon">Lyon</option>
                                            <option value="Marseille">Marseille</option>
                                        </optgroup>
                                        <optgroup label="DE" disabled>
                                            <option value="Hamburg">Hamburg</option>
                                            <option value="Munich">Munich</option>
                                            <option value="Berlin">Berlin</option>
                                        </optgroup>
                                        <optgroup label="US">
                                            <option value="New York">New York</option>
                                            <option value="Washington" disabled>Washington</option>
                                            <option value="Michigan">Michigan</option>
                                        </optgroup>
                                        <optgroup label="SP">
                                            <option value="Madrid">Madrid</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Malaga">Malaga</option>
                                        </optgroup>
                                        <optgroup label="CA">
                                            <option value="Montreal">Montreal</option>
                                            <option value="Toronto">Toronto</option>
                                            <option value="Vancouver">Vancouver</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Options from remote source (Fetch API) &amp; limited to 5</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="choices-multiple-remote-fetch" id="choices-multiple-remote-fetch" multiple></select>
                                    <small>If the following example do not load, the Discogs rate limit has probably been reached. Try again later!</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Right-to-left</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" data-trigger name="choices-multiple-rtl" id="choices-multiple-rtl" placeholder="This is a placeholder" multiple dir="rtl">
                                        <option value="Choice 1" selected>Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                        <option value="Choice 4" disabled>Choice 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Use label in event (add/remove)</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select id="choices-multiple-labels" multiple></select>
                                    <div id="message"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Single select input</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Default</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                                        <option value="">This is a placeholder</option>
                                        <option value="Choice 1">Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Options from remote source (Fetch API)</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="choices-single-remote-fetch" id="choices-single-remote-fetch">
                                        <option value="">Pick an Arctic Monkeys' record</option>
                                    </select>
                                    <small>If the following two examples do not load, the Discogs rate limit has probably been reached. Try again later!</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Options from remote source (Fetch API) &amp; remove button</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="choices-single-remove-xhr" id="choices-single-remove-xhr">
                                        <option value="">Pick a Smiths' record</option>
                                    </select>
                                    <small>If the following two examples do not load, the Discogs rate limit has probably been reached. Try again later!</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Option groups</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" data-trigger name="choices-single-groups" id="choices-single-groups">
                                        <option value="">Choose a city</option>
                                        <optgroup label="UK">
                                            <option value="London">London</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Liverpool">Liverpool</option>
                                        </optgroup>
                                        <optgroup label="FR">
                                            <option value="Paris">Paris</option>
                                            <option value="Lyon">Lyon</option>
                                            <option value="Marseille">Marseille</option>
                                        </optgroup>
                                        <optgroup label="DE" disabled>
                                            <option value="Hamburg">Hamburg</option>
                                            <option value="Munich">Munich</option>
                                            <option value="Berlin">Berlin</option>
                                        </optgroup>
                                        <optgroup label="US">
                                            <option value="New York">New York</option>
                                            <option value="Washington" disabled>Washington</option>
                                            <option value="Michigan">Michigan</option>
                                        </optgroup>
                                        <optgroup label="SP">
                                            <option value="Madrid">Madrid</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Malaga">Malaga</option>
                                        </optgroup>
                                        <optgroup label="CA">
                                            <option value="Montreal">Montreal</option>
                                            <option value="Toronto">Toronto</option>
                                            <option value="Vancouver">Vancouver</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Right-to-left</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" data-trigger name="choices-single-rtl" id="choices-single-rtl" dir="rtl">
                                        <option value="Choice 1">Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Options added via config with no search</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="choices-single-no-search" id="choices-single-no-search">
                                        <option value="0">Zero</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Option and option groups added via config</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="choices-single-preset-options" id="choices-single-preset-options"></select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Option selected via config with custom properties</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="choices-single-selected-option" id="choices-single-selected-option"></select>
                                    <small>Try searching for 'fantastic', "Label 3" should display</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Option searchable by custom properties via <code>data-custom-properties</code> attribute</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" id="choices-with-custom-props-via-html">
                                        <option value="Dropdown item 1">Label One</option>
                                        <option value="Dropdown item 2" selected disabled>Label Two</option>
                                        <option value="Dropdown item 3" data-custom-properties="This option is fantastic">Label Three</option>
                                    </select>
                                    <small>Try searching for 'fantastic', "Label 3" should display</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Options without sorting</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="choices-single-no-sorting" id="choices-single-no-sorting">
                                        <option value="Madrid">Madrid</option>
                                        <option value="Toronto">Toronto</option>
                                        <option value="Vancouver">Vancouver</option>
                                        <option value="London">London</option>
                                        <option value="Manchester">Manchester</option>
                                        <option value="Liverpool">Liverpool</option>
                                        <option value="Paris">Paris</option>
                                        <option value="Malaga">Malaga</option>
                                        <option value="Washington" disabled>Washington</option>
                                        <option value="Lyon">Lyon</option>
                                        <option value="Marseille">Marseille</option>
                                        <option value="Hamburg">Hamburg</option>
                                        <option value="Munich">Munich</option>
                                        <option value="Barcelona">Barcelona</option>
                                        <option value="Berlin">Berlin</option>
                                        <option value="Montreal">Montreal</option>
                                        <option value="New York">New York</option>
                                        <option value="Michigan">Michigan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Custom templates</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="choices-single-custom-templates" id="choices-single-custom-templates">
                                        <option value="React">React</option>
                                        <option value="Angular">Angular</option>
                                        <option value="Ember">Ember</option>
                                        <option value="Vue">Vue</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Cities</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="cities" id="cities">
                                        <option value="">Choose a city</option>
                                        <option value="Leeds">Leeds</option>
                                        <option value="Manchester">Manchester</option>
                                        <option value="London">London</option>
                                        <option value="Sheffield">Sheffield</option>
                                        <option value="Newcastle">Newcastle</option>
                                    </select>
                                    <small>
                                        Below is an example of how you could have two select inputs depend on
                                        eachother. 'Tube stations' will only be enabled if the value of
                                        'Cities' is 'London'
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Tube stations</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="tube-stations" id="tube-stations">
                                        <option value="">Choose a tube station</option>
                                        <option value="Moorgate">Moorgate</option>
                                        <option value="St Pauls">St Pauls</option>
                                        <option value="Old Street">Old Street</option>
                                        <option value="Liverpool Street">Liverpool Street</option>
                                        <option value="Kings Cross St. Pancras">Kings Cross St. Pancras</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Form interaction</h5>
                        <small>Change the values and press reset to restore to initial state.</small>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">Change me!</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="reset-simple" id="reset-simple">
                                        <option value="Option 1">Option 1</option>
                                        <option value="Option 2" selected>Option 2</option>
                                        <option value="Option 3">Option 3</option>
                                        <option value="Option 4">Option 4</option>
                                        <option value="Option 5">Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end">And me!</label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <select class="form-control" name="reset-multiple" id="reset-multiple" multiple>
                                        <option value="Choice 1" selected>Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                        <option value="Choice 4" disabled>Choice 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-4 col-sm-12 text-lg-end"></label>
                                <div class="col-lg-6 col-md-11 col-sm-12">
                                    <button class="btn btn-light-warning" type="reset"><i class="me-2" data-feather="alert-triangle"></i> Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main content ] end -->
    </div>
</section>

<!-- [ Main content ] end -->
@include('html.layouts.footer')
<!-- tagify -->
<script src="assets/js/plugins/choices.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var genericExamples = document.querySelectorAll('[data-trigger]');
        for (i = 0; i < genericExamples.length; ++i) {
            var element = genericExamples[i];
            new Choices(element, {
                placeholderValue: 'This is a placeholder set in the config',
                searchPlaceholderValue: 'This is a search placeholder',
            });
        }

        var textRemove = new Choices(
            document.getElementById('choices-text-remove-button'), {
                delimiter: ',',
                editItems: true,
                maxItemCount: 5,
                removeItemButton: true,
            }
        );

        var textUniqueVals = new Choices('#choices-text-unique-values', {
            paste: false,
            duplicateItemsAllowed: false,
            editItems: true,
        });

        var texti18n = new Choices('#choices-text-i18n', {
            paste: false,
            duplicateItemsAllowed: false,
            editItems: true,
            maxItemCount: 5,
            addItemText: function(value) {
                return (
                    'Appuyez sur Entrée pour ajouter <b>"' + String(value) + '"</b>'
                );
            },
            maxItemText: function(maxItemCount) {
                return String(maxItemCount) + 'valeurs peuvent être ajoutées';
            },
            uniqueItemText: 'Cette valeur est déjà présente',
        });

        var textEmailFilter = new Choices('#choices-text-email-filter', {
            editItems: true,
            addItemFilter: function(value) {
                if (!value) {
                    return false;
                }

                const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                const expression = new RegExp(regex.source, 'i');
                return expression.test(value);
            },
        }).setValue(['joe@bloggs.com']);

        var textDisabled = new Choices('#choices-text-disabled', {
            addItems: false,
            removeItems: false,
        }).disable();

        var textPrependAppendVal = new Choices(
            '#choices-text-prepend-append-value', {
                prependValue: 'item-',
                appendValue: '-' + Date.now(),
            }
        ).removeActiveItems();

        var textPresetVal = new Choices('#choices-text-preset-values', {
            items: [
                'Josh Johnson',
                {
                    value: 'joe@bloggs.co.uk',
                    label: 'Joe Bloggs',
                    customProperties: {
                        description: 'Joe Blogg is such a generic name',
                    },
                },
            ],
        });

        var multipleDefault = new Choices(
            document.getElementById('choices-multiple-groups')
        );

        var multipleFetch = new Choices('#choices-multiple-remote-fetch', {
            placeholder: true,
            placeholderValue: 'Pick an Strokes record',
            maxItemCount: 5,
        }).setChoices(function() {
            return fetch(
                    'https://api.discogs.com/artists/55980/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW'
                )
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    return data.releases.map(function(release) {
                        return {
                            value: release.title,
                            label: release.title
                        };
                    });
                });
        });

        var multipleCancelButton = new Choices(
            '#choices-multiple-remove-button', {
                removeItemButton: true,
            }
        );

        /* Use label on event */
        var choicesSelect = new Choices('#choices-multiple-labels', {
            removeItemButton: true,
            choices: [{
                    value: 'One',
                    label: 'Label One'
                },
                {
                    value: 'Two',
                    label: 'Label Two',
                    disabled: true
                },
                {
                    value: 'Three',
                    label: 'Label Three'
                },
            ],
        }).setChoices(
            [{
                    value: 'Four',
                    label: 'Label Four',
                    disabled: true
                },
                {
                    value: 'Five',
                    label: 'Label Five'
                },
                {
                    value: 'Six',
                    label: 'Label Six',
                    selected: true
                },
            ],
            'value',
            'label',
            false
        );

        choicesSelect.passedElement.element.addEventListener(
            'addItem',
            function(event) {
                document.getElementById('message').innerHTML =
                    '<span class="badge bg-light-primary"> You just added "' + event.detail.label + '"</span>';
            }
        );
        choicesSelect.passedElement.element.addEventListener(
            'removeItem',
            function(event) {
                document.getElementById('message').innerHTML =
                    '<span class="badge bg-light-danger"> You just removed "' + event.detail.label + '"</span>';
            }
        );

        var singleFetch = new Choices('#choices-single-remote-fetch', {
                searchPlaceholderValue: 'Search for an Arctic Monkeys record',
            })
            .setChoices(function() {
                return fetch(
                        'https://api.discogs.com/artists/391170/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW'
                    )
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(data) {
                        return data.releases.map(function(release) {
                            return {
                                label: release.title,
                                value: release.title
                            };
                        });
                    });
            })
            .then(function(instance) {
                instance.setChoiceByValue('Fake Tales Of San Francisco');
            });

        var singleXhrRemove = new Choices('#choices-single-remove-xhr', {
            removeItemButton: true,
            searchPlaceholderValue: "Search for a Smiths' record",
        }).setChoices(function(callback) {
            return fetch(
                    'https://api.discogs.com/artists/83080/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW'
                )
                .then(function(res) {
                    return res.json();
                })
                .then(function(data) {
                    return data.releases.map(function(release) {
                        return {
                            label: release.title,
                            value: release.title
                        };
                    });
                });
        });

        var singleNoSearch = new Choices('#choices-single-no-search', {
            searchEnabled: false,
            removeItemButton: true,
            choices: [{
                    value: 'One',
                    label: 'Label One'
                },
                {
                    value: 'Two',
                    label: 'Label Two',
                    disabled: true
                },
                {
                    value: 'Three',
                    label: 'Label Three'
                },
            ],
        }).setChoices(
            [{
                    value: 'Four',
                    label: 'Label Four',
                    disabled: true
                },
                {
                    value: 'Five',
                    label: 'Label Five'
                },
                {
                    value: 'Six',
                    label: 'Label Six',
                    selected: true
                },
            ],
            'value',
            'label',
            false
        );

        var singlePresetOpts = new Choices('#choices-single-preset-options', {
            placeholder: true,
        }).setChoices(
            [{
                    label: 'Group one',
                    id: 1,
                    disabled: false,
                    choices: [{
                            value: 'Child One',
                            label: 'Child One',
                            selected: true
                        },
                        {
                            value: 'Child Two',
                            label: 'Child Two',
                            disabled: true
                        },
                        {
                            value: 'Child Three',
                            label: 'Child Three'
                        },
                    ],
                },
                {
                    label: 'Group two',
                    id: 2,
                    disabled: false,
                    choices: [{
                            value: 'Child Four',
                            label: 'Child Four',
                            disabled: true
                        },
                        {
                            value: 'Child Five',
                            label: 'Child Five'
                        },
                        {
                            value: 'Child Six',
                            label: 'Child Six'
                        },
                    ],
                },
            ],
            'value',
            'label'
        );

        var singleSelectedOpt = new Choices('#choices-single-selected-option', {
            searchFields: ['label', 'value', 'customProperties.description'],
            choices: [{
                    value: 'One',
                    label: 'Label One',
                    selected: true
                },
                {
                    value: 'Two',
                    label: 'Label Two',
                    disabled: true
                },
                {
                    value: 'Three',
                    label: 'Label Three',
                    customProperties: {
                        description: 'This option is fantastic',
                    },
                },
            ],
        }).setChoiceByValue('Two');

        var customChoicesPropertiesViaDataAttributes = new Choices(
            '#choices-with-custom-props-via-html', {
                searchFields: ['label', 'value', 'customProperties'],
            }
        );

        var singleNoSorting = new Choices('#choices-single-no-sorting', {
            shouldSort: false,
        });

        var cities = new Choices(document.getElementById('cities'));
        var tubeStations = new Choices(
            document.getElementById('tube-stations')
        ).disable();

        cities.passedElement.element.addEventListener('change', function(e) {
            if (e.detail.value === 'London') {
                tubeStations.enable();
            } else {
                tubeStations.disable();
            }
        });

        var customTemplates = new Choices(
            document.getElementById('choices-single-custom-templates'), {
                callbackOnCreateTemplates: function(strToEl) {
                    var classNames = this.config.classNames;
                    var itemSelectText = this.config.itemSelectText;
                    return {
                        item: function(classNames, data) {
                            return strToEl(
                                '\
                                <div\
                                class="' +
                                String(classNames.item) +
                                ' ' +
                                String(
                                    data.highlighted ?
                                    classNames.highlightedState :
                                    classNames.itemSelectable
                                ) +
                                '"\
                                data-item\
                                data-id="' +
                                String(data.id) +
                                '"\
                                data-value="' +
                                String(data.value) +
                                '"\
                                ' +
                                String(data.active ? 'aria-selected="true"' : '') +
                                '\
                                ' +
                                String(data.disabled ? 'aria-disabled="true"' : '') +
                                '\
                                >\
                                <span style="margin-right:10px;">🎉</span> ' +
                                String(data.label) +
                                '\
                                </div>\
                                '
                            );
                        },
                        choice: function(classNames, data) {
                            return strToEl(
                                '\
                                <div\
                                class="' +
                                String(classNames.item) +
                                ' ' +
                                String(classNames.itemChoice) +
                                ' ' +
                                String(
                                    data.disabled ?
                                    classNames.itemDisabled :
                                    classNames.itemSelectable
                                ) +
                                '"\
                                data-select-text="' +
                                String(itemSelectText) +
                                '"\
                                data-choice \
                                ' +
                                String(
                                    data.disabled ?
                                    'data-choice-disabled aria-disabled="true"' :
                                    'data-choice-selectable'
                                ) +
                                '\
                                data-id="' +
                                String(data.id) +
                                '"\
                                data-value="' +
                                String(data.value) +
                                '"\
                                ' +
                                String(
                                    data.groupId > 0 ? 'role="treeitem"' : 'role="option"'
                                ) +
                                '\
                                >\
                                <span style="margin-right:10px;">👉🏽</span> ' +
                                String(data.label) +
                                '\
                                </div>\
                                '
                            );
                        },
                    };
                },
            }
        );

        var resetSimple = new Choices(document.getElementById('reset-simple'));

        var resetMultiple = new Choices('#reset-multiple', {
            removeItemButton: true,
        });
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
