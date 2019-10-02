<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>ASCS Forms</title>
    <meta name="description" content="Asset Management system using QR" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="https://hencework.com/theme/vendors4/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="https://hencework.com/theme/vendors4/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- ION CSS -->
    <link href="https://hencework.com/theme/vendors4/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css">
    <link href="https://hencework.com/theme/vendors4/ion-rangeslider/css/ion.rangeSlider.skinHTML5.css" rel="stylesheet" type="text/css">

    <!-- select2 CSS -->
    <link href="https://hencework.com/theme/vendors4/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Pickr CSS -->
    <link href="https://hencework.com/theme/vendors4/pickr-widget/dist/pickr.min.css" rel="stylesheet" type="text/css" />

    <!-- Daterangepicker CSS -->
    <link href="https://hencework.com/theme/vendors4/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">
  <?php include('leftbar.php'); ?>
        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Element</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container-fluid">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="toggle-right"></i></span></span>Form Element</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Form controls</h5>
                            <p class="mb-25">Textual form controls—like inputs, selects, and textareas—are styled with the <code>.form-control</code> class. Included are styles for general appearance, focus state, sizing, and more.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control mt-15" placeholder="Input Box">
                                            <select class="form-control custom-select  mt-15">
                                                <option selected>Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <textarea class="form-control mt-15" rows="3" placeholder="Textarea"></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control mt-15" placeholder="Readonly Input Box" value="Readonly Input Box" readonly>
                                            <select class="form-control custom-select mt-15">
                                                <option selected>Readonly Select</option>
                                                <option value="1" disabled>One</option>
                                                <option value="2" disabled>Two</option>
                                                <option value="3" disabled>Three</option>
                                            </select>
                                            <textarea class="form-control mt-15" rows="3" placeholder="Readonly Textarea" readonly>Readonly Textarea</textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control mt-15" placeholder="Disabled Input Box" disabled>
                                            <select class="form-control custom-select mt-15" disabled>
                                                <option selected>Disabled Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <textarea class="form-control mt-15" id="exampleFormControlTextarea1" rows="3" placeholder="Disabled Textarea" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Sizing</h5>
                            <p class="mb-25">Set heights using classes like <code>.form-control-lg, custom-select-lg</code> and <code>.form-control-sm, custom-select-sm</code>.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="form-control form-control-lg mt-15" type="text" placeholder=".form-control-lg">
                                            <input class="form-control mt-15" type="text" placeholder="Default input">
                                            <input class="form-control form-control-sm mt-15" type="text" placeholder=".form-control-sm">
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control custom-select form-control custom-select-lg mt-15">
                                                <option selected>Large Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <select class="form-control custom-select mt-15">
                                                <option selected>Default Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <select class="form-control custom-select form-control custom-select-sm mt-15">
                                                <option selected>Small Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Input types</h5>
                            <p class="mb-25">Set different styles of input using <code>.filled-input, .outline-input</code> and <code>.transparent-input</code> modifier classes.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control mt-15" placeholder="Default Input">
                                            <input type="text" class="form-control outline-input mt-15" placeholder="Outline Input">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control filled-input mt-15" placeholder="Filled Input">
                                            <input type="text" class="form-control transparent-input mt-15" id="exampleFormControlInput1t" placeholder="Transparent Input">
                                        </div>
                                    </div>
                                    <h6 class="mt-40 mb-10">Shapes</h6>
                                    <p class="mb-10">Change the look using shape modifier classes. Add <code>.square-input</code> and <code>.rounded-input</code> classes.</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control square-input mt-15" placeholder="Square Input">
                                            <input type="text" class="form-control rounded-input mt-15" placeholder="Rounded Input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Help text</h5>
                            <p class="mb-40">Help text below inputs can be styled with <code>.form-text</code>. Inline help text can be implemented using utility classes like <code>.text-muted</code>.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <form class="mb-30">
                                        <div class="form-group">
                                            <label for="inputPassword5">Password</label>
                                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
												  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
												</small>
                                        </div>
                                    </form>
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label for="inputPassword6">Password</label>
                                            <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                                            <small id="passwordHelpInline" class="text-muted d-block">
													Must be 8-20 characters long.
												</small>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">File browser</h5>
                            <p class="mb-40">A custom file browser with change and remove function.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <form>
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                <span class="input-group-append">
														<span class=" btn btn-primary btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                                <input type="file" name="...">
                                                </span>
                                                <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Checkbox and radio</h5>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-4 mt-15">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Checkbox Static State</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-15">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                                <label class="custom-control-label" for="customCheck2">Checkbox Active State</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-15">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3" disabled>
                                                <label class="custom-control-label" for="customCheck3">Checkbox Disabled State</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-15">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Radio Static State</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-15">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="customRadio" checked class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Radio Active State</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-15">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio3" name="customRadio" disabled class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3">Radio Disabled State</label>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mt-40 mb-10">Colors variations</h6>
                                    <p class="mb-10">For further styling, use required contextual classes like <code>.checkbox-success</code> &amp; <code>.radio-info</code>.</p>
                                    <div class="row">
                                        <div class="col-md-3 mt-15">
                                            <div class="custom-control custom-checkbox checkbox-primary">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4" checked>
                                                <label class="custom-control-label" for="customCheck4">Checkbox Primary</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-15">
                                            <div class="custom-control custom-checkbox checkbox-teal">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5" checked>
                                                <label class="custom-control-label" for="customCheck5">Checkbox Teal</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-15">
                                            <div class="custom-control custom-checkbox checkbox-cyan">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6" checked>
                                                <label class="custom-control-label" for="customCheck6">Checkbox Cyan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-15">
                                            <div class="custom-control custom-checkbox checkbox-pink">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7" checked>
                                                <label class="custom-control-label" for="customCheck7">Checkbox Pink</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-15">
                                            <div class="custom-control custom-radio radio-primary">
                                                <input type="radio" id="customRadio5" name="customRadio3" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="customRadio5">Radio Primary</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-15">
                                            <div class="custom-control custom-radio radio-teal">
                                                <input type="radio" id="customRadio6" name="customRadio4" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="customRadio6">Radio Teal</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-15">
                                            <div class="custom-control custom-radio radio-cyan">
                                                <input type="radio" id="customRadio7" name="customRadio5" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="customRadio7">Radio Cyan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-15">
                                            <div class="custom-control custom-radio radio-pink">
                                                <input type="radio" id="customRadio8" name="customRadio6" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="customRadio8">Radio Pink</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Toggles</h5>
                            <p class="mb-40">Create easily-styleable toggle buttons with a lightweight toggle jQuery plugin.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <h6 class="mb-5">Toggle with text</h6>
                                    <div class="toggle-wrap">
                                        <div class="toggle toggle-light toggle-bg-primary toggle2"></div>
                                        <div class="toggle toggle-light toggle-bg-secondary toggle2"></div>
                                        <div class="toggle toggle-light toggle-bg-teal toggle2"></div>
                                        <div class="toggle toggle-light toggle-bg-green toggle2"></div>
                                        <div class="toggle toggle-light toggle-bg-pink toggle2"></div>
                                        <div class="toggle toggle-light toggle-bg-light toggle2"></div>
                                    </div>
                                    <h6 class="mt-30 mb-5">Toggle select</h6>
                                    <div class="toggle-wrap">
                                        <div class="toggle toggle-light toggle-bg-primary toggle3"></div>
                                        <div class="toggle toggle-light toggle-bg-secondary toggle3"></div>
                                        <div class="toggle toggle-light toggle-bg-teal toggle3"></div>
                                        <div class="toggle toggle-light toggle-bg-green toggle3"></div>
                                        <div class="toggle toggle-light toggle-bg-pink toggle3"></div>
                                        <div class="toggle toggle-light toggle-bg-danger toggle3"></div>
                                    </div>
                                    <h6 class="mt-30 mb-5">Toggle sizes</h6>
                                    <div class="toggle-wrap">
                                        <div class="toggle toggle-lg toggle-light toggle4"></div>
                                        <div class="toggle toggle-light toggle4"></div>
                                        <div class="toggle toggle-sm toggle-light toggle4"></div>
                                    </div>
                                    <h6 class="mt-30 mb-5">Toggle simple</h6>
                                    <div class="toggle-wrap mb-20">
                                        <div class="toggle toggle-simple toggle-light toggle-bg-primary toggle1"></div>
                                        <div class="toggle toggle-simple toggle-light toggle-bg-secondary toggle1"></div>
                                        <div class="toggle toggle-simple toggle-light toggle-bg-teal toggle1"></div>
                                        <div class="toggle toggle-simple toggle-light toggle-bg-green toggle1"></div>
                                        <div class="toggle toggle-simple toggle-light toggle-bg-pink toggle1"></div>
                                        <div class="toggle toggle-simple toggle-light toggle-bg-danger toggle1"></div>
                                    </div>
                                    <div class="toggle-wrap">
                                        <div class="toggle toggle-lg toggle-simple toggle-light toggle-bg-primary toggle1"></div>
                                        <div class="toggle toggle-simple toggle-light toggle-bg-primary toggle1"></div>
                                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary toggle1"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Range slider</h5>
                            <p class="mb-40">A comfortable, responsive and easily customizable range slider with plenty options.</p>
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="range-slider" />
                                                </div>
                                            </div>
                                            <h6 class="mt-30 mb-20">Set min value, max value and start point</h6>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="range-slider-1" />
                                                </div>
                                            </div>
                                            <h6 class="mt-30 mb-20">Set custom step and snap grid to step</h6>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="range-slider-2" />
                                                </div>
                                            </div>
                                            <h6 class="mt-40 mb-10">Sizing</h6>
                                            <p class="mb-25">For smaller size range, use <code>data-extra-classes="irs-sm"</code> class.</p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="range-slider" data-extra-classes="irs-sm" />
                                                </div>
                                            </div>
                                            <h6 class="mt-40 mb-10">Colors</h6>
                                            <p class="mb-10">Use contextual classes inside data-extra-classes - like <code>.irs-orange, .irs-info</code> to change the colors.</p>
                                            <div class="row">
                                                <div class="col-md-6 mt-20">
                                                    <input class="range-slider" data-extra-classes="irs-orange" />
                                                </div>
                                                <div class="col-md-6 mt-20">
                                                    <input class="range-slider" data-extra-classes="irs-secondary" />
                                                </div>
                                                <div class="col-md-6 mt-20">
                                                    <input class="range-slider" data-extra-classes="irs-info" />
                                                </div>
                                                <div class="col-md-6 mt-20">
                                                    <input class="range-slider" data-extra-classes="irs-success" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Bootstrap Select Menu</h5>
                            <p class="mb-40">Custom select menus need only a custom class, <code>.form-control .custom-select</code> to trigger the custom styles.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-12 mb-20">
                                            <select class="form-control custom-select">
                                                <option selected>Single Select Menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <select class="form-control custom-select" multiple>
                                                <option selected>Multiple Select Menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Select2</h5>
                            <p class="mb-40">The jQuery replacement for select boxes. Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <select class="form-control select2">
                                                <option>Select</option>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <h6 class="mt-40 mb-20">Multiple Select</h6>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <select class="select2 select2-multiple" multiple="multiple" data-placeholder="Choose">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Select2 Input Tags</h5>
                            <p class="mb-40">Tagging can be used in multi-value select boxes. Try entering a value that isn't listed in the dropdown - you'll be able to add it as a new option!</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <select id="input_tags" class="form-control" multiple="multiple">
                                                <option selected="selected">orange</option>
                                                <option>white</option>
                                                <option selected="selected">purple</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Input Spinner</h5>
                            <p class="mb-40">A Bootstrap 4 / jQuery plugin to create input spinner elements for number input.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row mb-20">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <input type="number" class="normal" value="50" min="0" max="100" step="10" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <input type="number" class="float" value="4.5" data-decimals="2" min="0" max="9" step="0.1" />
                                        </div>
                                    </div>
                                    <h6 class="mt-40 mb-10">Sizing</h6>
                                    <p class="mb-25">Add the relative form input group sizing classes <code>.input-group-sm .input-group-lg</code> for additional sizes</p>
                                    <div class="row">
                                        <div class="col-12 mb-20">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <input type="number" class="small" value="30" min="0" max="100" step="10" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <input type="number" class="large" value="80" min="0" max="100" step="10" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Date Picker</h5>
                            <p class="mb-40">A JavaScript component for choosing date ranges, dates and times.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                                        </div>
                                    </div>
                                    <h6 class="mt-30 mb-20">Date Range Picker With Times</h6>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <input class="form-control" type="text" name="datetimes" />
                                        </div>
                                    </div>
                                    <h6 class="mt-30 mb-20">Single Date Picker</h6>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <input class="form-control" type="text" name="birthday" value="10/24/1984" />
                                        </div>
                                    </div>
                                    <h6 class="mt-30 mb-20">Limit Selectable Dates</h6>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2018 - 06/07/2018" />
                                        </div>
                                    </div>
                                    <h6 class="mt-30 mb-20">Predefined Date Ranges</h6>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <div id="reportrange" class="form-control text-truncate">
                                                <i class="fa fa-calendar text-light-40"></i>&nbsp;
                                                <span></span> <i class="fa fa-caret-down text-light-40 font-12 ml-10"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mt-30 mb-20">Time Select</h6>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <input class="form-control input-timepicker" type="text" name="time" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Color Picker</h5>
                            <p class="mb-40">A flat, simple, responsive and hackable Color-Picker. No dependencies, no jQuery.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <span class="d-block w-80p">
													<span class="color-picker"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container-fluid">
                <?php include('footer.php'); ?>
            </div>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
   <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="https://hencework.com/theme/vendors4/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://hencework.com/theme/vendors4/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://hencework.com/theme/vendors4/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Jasny-bootstrap  JavaScript -->
    <script src="https://hencework.com/theme/vendors4/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Ion JavaScript -->
    <script src="https://hencework.com/theme/vendors4/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="dist/js/rangeslider-data.js"></script>

    <!-- Toggles JavaScript -->
    <script src="https://hencework.com/theme/vendors4/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Select2 JavaScript -->
    <script src="https://hencework.com/theme/vendors4/select2/dist/js/select2.full.min.js"></script>
    <script src="dist/js/select2-data.js"></script>

    <!-- Bootstrap Tagsinput JavaScript -->
    <script src="https://hencework.com/theme/vendors4/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

    <!-- Bootstrap Input spinner JavaScript -->
    <script src="https://hencework.com/theme/vendors4/bootstrap-input-spinner/src/bootstrap-input-spinner.js"></script>
    <script src="dist/js/inputspinner-data.js"></script>

    <!-- Pickr JavaScript -->
    <script src="https://hencework.com/theme/vendors4/pickr-widget/dist/pickr.min.js"></script>
    <script src="dist/js/pickr-data.js"></script>

    <!-- Daterangepicker JavaScript -->
    <script src="https://hencework.com/theme/vendors4/moment/min/moment.min.js"></script>
    <script src="https://hencework.com/theme/vendors4/daterangepicker/daterangepicker.js"></script>
    <script src="dist/js/daterangepicker-data.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="https://hencework.com/theme/vendors4/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
</body>

</html>
