<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/falcon/v3.16.0/app/e-learning/course/create-a-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 11:12:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="admin/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="admin/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="admin/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="admin/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="admin/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="admin/assets/js/config.js"></script>
    <script src="admin/vendors/simplebar/simplebar.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="admin/vendors/choices/choices.min.css" rel="stylesheet">
    <link href="admin/vendors/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="admin/vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="admin/admin/fonts.gstatic.com/index.html">
    <link
        href="admin/admin/fonts.googleapis.com/css4e0a.css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="admin/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="admin/assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="admin/assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="admin/assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="admin/assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>
            @include('admin.partials.navbars._navbar-gt-lg')
            @include('admin.partials.navbars._navbar-v-xl')
            @include('admin.partials.navbars._navbar-gt-lg2')

            <div class="content">
                @include('admin.partials.navbars._navbar-lgdouble')
                <div class="row g-lg-3 font-sans-serif">
                    <div class="col-lg-8">
                        <div class="card mb-3">
                            <div class="bg-holder d-none d-lg-block bg-card"
                                style="background-image:url({{ asset('admin/assets/img/icons/spot-illustrations/corner-4.png') }});">
                            </div>
                            <!--/.bg-holder-->
                            <div class="card-body z-1">
                                <h3>Créer un Nouveau Cours</h3>
                                <p class="mb-0">
                                    Créer un cours est une expérience passionnante où vous avez l'opportunité de
                                    partager vos
                                    connaissances avec une communauté d'apprenants enthousiastes. Que vous soyez un
                                    expert chevronné
                                    ou un novice désireux de transmettre votre passion, IG-PEDIA est là pour vous aider
                                    à donner vie
                                    à votre vision éducative.
                                    Imaginez un monde où les apprenants peuvent explorer des sujets variés, acquérir de
                                    nouvelles
                                    compétences et élargir leurs horizons, tout cela à travers une interface conviviale
                                    et
                                    intuitive. C'est exactement ce que nous vous proposons avec IG-PEDIA.</p>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="mb-0">Information du Cours</h5>
                            </div>
                            <div class="card-body bg-light">
                                {{-- form 1 --}}
                                <form class="row gx-2">
                                    <div class="col-12 mb-3">
                                        <label class="form-label" for="course-name">Course Title<span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" id="course-name" type="text"
                                            placeholder="Course Title" required="required" />
                                    </div>
                                    {{-- <livewire:admin.category-dropdown/> --}}
                                    {{-- Categories Select --}}
                                    <div class="col-sm-6 mb-3">
                                        <x-admin.form.select required name="Category" :items="$categories" />
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <x-admin.form.select required name="Sub-Category" :items="$subcategories" />
                                    </div>
                                    {{-- End SubCategories Select --}}

                                    {{-- Tags --}}
                                    {{--                  <div class="col-12 mb-3"><label class="form-label" for="tags">Tags<span class="text-danger">*</span></label><select class=" tags form-control js-choice" id="tags" type="text" name="tags[]" required="required" size="1" data-placeholder="Select upto 4 tags" data-options='{"removeItemButton":true,"placeholder":true}' multiple></select></div> --}}

                                    <div class="mb-3"><label class="form-label" for="course-tags">Tags<span
                                                class="text-danger">*</span></label><select
                                            class="form-select js-choice" id="course-tags" multiple="multiple"
                                            size="1" name="tags[]" required="required"
                                            data-placeholder="Select upto 4 tags"
                                            data-options='{"removeItemButton":true,"placeholder":true}'>
                                            <option value="">Select organizer...</option>
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">Please select one or multiple</div>
                                    </div>
                                    {{-- End Tags --}}

                                    <div class="col-12">
                                        <div class="create-course-description-textarea">
                                            <x-admin.form.textarea name="Course Description" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="mb-0">Create Resources</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive scrollbar">
                                    <table class="table table-borderless mb-0 fs--1 overflow-hidden">
                                        <tbody>
                                            <tr class="btn-reveal-trigger bg-light">
                                                <td class="align-middle white-space-nowrap">
                                                    <div class="d-flex gap-3 align-items-center position-relative"><img
                                                            class="rounded-1 border border-200"
                                                            src="{{ asset('admin/assets/img/elearning/lessons/intro.png') }}"
                                                            width="60" alt="" />
                                                        <div>
                                                            <h5 class="fs-0 text-primary">Intro<span
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Requirement fulfilled"><span
                                                                        class="text-primary fs-0 ms-2 fas fa-check-circle"></span></span>
                                                            </h5>
                                                            <p class="fs--1 text-900 mb-0">Introduction and Course
                                                                Objectives</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle white-space-nowrap fs--1 text-700">
                                                    <p class="mb-1">1 Slide • 4 Minutes</p>
                                                    <p class="mb-0">0 Tests</p>
                                                </td>
                                                <td class="align-middle white-space-nowrap text-end">
                                                    <div
                                                        class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger">
                                                        <button
                                                            class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end"
                                                            type="button" id="dropdown-0" data-bs-toggle="dropdown"
                                                            data-boundary="window" aria-haspopup="true"
                                                            aria-expanded="false" data-bs-reference="parent"><span
                                                                class="fas fa-ellipsis-h fs--1"></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-2"
                                                            aria-labelledby="dropdown-0"><a class="dropdown-item"
                                                                href="#!">View</a><a class="dropdown-item"
                                                                href="#!">Edit</a>
                                                            <div class="dropdown-divider"></div><a
                                                                class="dropdown-item text-danger"
                                                                href="#!">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="align-middle white-space-nowrap">
                                                    <div class="d-flex gap-3 align-items-center position-relative"><img
                                                            class="rounded-1 border border-200"
                                                            src="{{ asset('admin/assets/img/elearning/lessons/chapter1.png') }}"
                                                            width="60" alt="" />
                                                        <div>
                                                            <h5 class="fs-0 text-primary">Chapter 1<span
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Requirement fulfilled"><span
                                                                        class="text-primary fs-0 ms-2 fas fa-check-circle"></span></span>
                                                            </h5>
                                                            <p class="fs--1 text-900 mb-0">Getting Started with
                                                                Photoshop</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle white-space-nowrap fs--1 text-700">
                                                    <p class="mb-1">3 Slide • 11 Minutes</p>
                                                    <p class="mb-0">3 Tests</p>
                                                </td>
                                                <td class="align-middle white-space-nowrap text-end">
                                                    <div
                                                        class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger">
                                                        <button
                                                            class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end"
                                                            type="button" id="dropdown-1" data-bs-toggle="dropdown"
                                                            data-boundary="window" aria-haspopup="true"
                                                            aria-expanded="false" data-bs-reference="parent"><span
                                                                class="fas fa-ellipsis-h fs--1"></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-2"
                                                            aria-labelledby="dropdown-1"><a class="dropdown-item"
                                                                href="#!">View</a><a class="dropdown-item"
                                                                href="#!">Edit</a>
                                                            <div class="dropdown-divider"></div><a
                                                                class="dropdown-item text-danger"
                                                                href="#!">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger bg-light">
                                                <td class="align-middle white-space-nowrap">
                                                    <div class="d-flex gap-3 align-items-center position-relative"><img
                                                            class="rounded-1 border border-200"
                                                            src="{{ asset('admin/assets/img/elearning/lessons/chapter2.png') }}"
                                                            width="60" alt="" />
                                                        <div>
                                                            <h5 class="fs-0 text-primary">Chapter 2<span
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="No. of Slide/Test doesn’t fulfill requirement"><span
                                                                        class="text-primary fs-0 ms-2 fas fa-exclamation-circle"></span></span>
                                                            </h5>
                                                            <p class="fs--1 text-900 mb-0">Understanding Layers</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle white-space-nowrap fs--1 text-700">
                                                    <p class="mb-1">1 Slide • 3 Minutes</p>
                                                    <p class="mb-0">0 Tests</p>
                                                </td>
                                                <td class="align-middle white-space-nowrap text-end">
                                                    <div
                                                        class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger">
                                                        <button
                                                            class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end"
                                                            type="button" id="dropdown-2" data-bs-toggle="dropdown"
                                                            data-boundary="window" aria-haspopup="true"
                                                            aria-expanded="false" data-bs-reference="parent"><span
                                                                class="fas fa-ellipsis-h fs--1"></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-2"
                                                            aria-labelledby="dropdown-2"><a class="dropdown-item"
                                                                href="#!">View</a><a class="dropdown-item"
                                                                href="#!">Edit</a>
                                                            <div class="dropdown-divider"></div><a
                                                                class="dropdown-item text-danger"
                                                                href="#!">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer py-2 text-center">
                                <button class="btn btn-link btn-sm px-0 fw-medium" type="button"
                                    data-bs-toggle="modal" data-bs-target="#error-modal"><span
                                        class="fas fa-plus me-1 fs--2"></span>Add New Chapter</button>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">Requirements</h5>
                            </div>
                            <div class="card-body pt-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <div class="d-flex hover-actions-trigger align-items-center py-3"><span
                                                class="fas fa-grip-lines fs--2 text-secondary me-3"></span>
                                            <p class="mb-0 fs--1 me-6">This course requires profieciency in English
                                                language as the
                                                Lessons are prepared in English.</p>
                                            <div class="hover-actions end-0 top-50 translate-middle-y"><button
                                                    class="btn btn-link me-3 fs--2 p-0 text-700"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit"><span
                                                        class="fas fa-pencil-alt"></span></button><button
                                                    class="btn btn-light icon-item rounded-3 fs--2 icon-item-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Remove"><span class="fas fa-times"></span></button></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="d-flex hover-actions-trigger align-items-center py-3 border-top border-300">
                                            <span class="fas fa-grip-lines fs--2 text-secondary me-3"></span>
                                            <p class="mb-0 fs--1 me-6">Learners with following skills might be more
                                                benefited, but
                                                little extra work is all that’ll take.</p>
                                            <div class="hover-actions end-0 top-50 translate-middle-y"><button
                                                    class="btn btn-link me-3 fs--2 p-0 text-700"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit"><span
                                                        class="fas fa-pencil-alt"></span></button><button
                                                    class="btn btn-light icon-item rounded-3 fs--2 icon-item-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Remove"><span class="fas fa-times"></span></button></div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="position-relative focus-actions-trigger"><input class="form-control"
                                        type="text" placeholder="Add another requirement..." />
                                    <div class="position-absolute end-0 top-50 translate-middle focus-actions"><button
                                            class="btn btn-link btn-sm p-0 text-700 me-2"><span
                                                class="fas fa-arrow-right"></span></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mb-lg-0">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">Course Goals and Key features</h5>
                            </div>
                            <div class="card-body"> <label class="mb-3 form-label lh-1" for="course-goal">Course
                                    Goals <span class="text-danger">*</span></label>
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <div
                                            class="d-flex py-3 hover-actions-trigger align-items-center border-top border-300">
                                            <span class="fas fa-grip-lines fs--2 text-secondary me-3"></span>
                                            <p class="mb-0 fs--1 me-6">Which tool is preferred for what kind of work.
                                            </p>
                                            <div class="hover-actions end-0 top-50 translate-middle-y"><button
                                                    class="btn btn-link me-3 fs--2 p-0 text-700"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit"><span
                                                        class="fas fa-pencil-alt"></span></button><button
                                                    class="btn btn-light icon-item rounded-3 fs--2 icon-item-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Remove"><span class="fas fa-times"></span></button></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="d-flex py-3 hover-actions-trigger align-items-center border-top border-300">
                                            <span class="fas fa-grip-lines fs--2 text-secondary me-3"></span>
                                            <p class="mb-0 fs--1 me-6">How to take criticism and make best use of them.
                                            </p>
                                            <div class="hover-actions end-0 top-50 translate-middle-y"><button
                                                    class="btn btn-link me-3 fs--2 p-0 text-700"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit"><span
                                                        class="fas fa-pencil-alt"></span></button><button
                                                    class="btn btn-light icon-item rounded-3 fs--2 icon-item-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Remove"><span class="fas fa-times"></span></button></div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="position-relative mb-4 focus-actions-trigger"><input class="form-control"
                                        id="course-goal" type="text" placeholder="Add another goal..." />
                                    <div class="position-absolute end-0 top-50 translate-middle focus-actions"><button
                                            class="btn btn-link btn-sm p-0 text-700 me-2"><span
                                                class="fas fa-arrow-right"></span></button></div>
                                </div>
                                <div class="d-flex flex-between-center mb-2"><label class="mb-0 lh-1"
                                        for="course-features">Key
                                        features<span class="text-danger">*</span></label><button
                                        class="btn btn-link btn-sm fw-medium p-0" type="button">Add New</button>
                                </div><select class="form-select js-choice" id="course-features" multiple="multiple"
                                    size="1" name="features"
                                    data-options='{"removeItemButton":true,"placeholder":true}'>
                                    <option value="">Select multiple features...</option>
                                    <option>Total 13 hours of video lectures</option>
                                    <option>12 premium article access</option>
                                    <option>11 downloadable resources</option>
                                    <option>Mobile, Tab or TV friendly content </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sticky-sidebar top-navbar-height d-flex flex-column">
                            <div class="card mb-lg-3 order-lg-0 order-1">
                                <div class="card-header py-2 d-flex flex-between-center">
                                    <h5 class="mb-0">Publish your Course</h5><a
                                        class="btn btn-link btn-sm text-secondary px-0" href="#!"><span
                                            class="fw-medium d-lg-none d-xxl-inline-block">Preview</span><span
                                            class="fas fa-external-link-alt fs--2 ms-2"></span></a>
                                </div>
                                <div class="card-body bg-light">
                                    <ul class="list-unstyled fs--1 mb-0">
                                        <li class="mb-2 hover-actions-trigger"><span
                                                class="fas fa-file me-2"></span><span class="ms-1">Condition:
                                            </span><span class="text-800 fw-medium me-2">Draft</span><a
                                                class="btn btn-link btn-sm p-0 lh-sm hover-actions"
                                                href="#!">Edit</a></li>
                                        <li class="mb-2 hover-actions-trigger"><span
                                                class="fas fa-unlock-alt me-2"></span><span class="ms-1">Privacy:
                                            </span><span class="text-800 fw-medium me-2">Public</span><a
                                                class="btn btn-link btn-sm p-0 lh-sm hover-actions"
                                                href="#!">Edit</a></li>
                                        <li class="mb-2 hover-actions-trigger"><span
                                                class="fas fa-globe me-2"></span><span class="ms-1">Visibility:
                                            </span><span class="text-800 fw-medium me-2">Global
                                                Search</span><a class="btn btn-link btn-sm p-0 lh-sm hover-actions"
                                                href="#!">Edit</a></li>
                                        <li class="hover-actions-trigger"><span class="fas fa-clock me-2"></span><span
                                                class="ms-1">Publish: </span><span
                                                class="text-800 fw-medium me-2">Now</span><a
                                                class="btn btn-link btn-sm p-0 lh-sm hover-actions"
                                                href="#!">Edit</a></li>
                                    </ul>
                                </div>
                                <div class="card-footer py-2" id="course-publish-btn">
                                    <div class="row flex-between-center g-0">
                                        <div class="col-auto"><a
                                                class="btn btn-link btn-sm text-secondary fw-medium px-0"
                                                href="#!">Save as Draft</a></div>
                                        <div class="col-auto"><button
                                                class="btn btn-primary btn-md px-xxl-5 px-4 fw-medium"
                                                type="submit">Publish</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="mb-0">Upload Cover Photo <span data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Add cover photo"><span
                                                class="fas fa-info-circle text-primary fs-0 ms-2"></span></span></h5>
                                </div>
                                <div class="card-body bg-light">
                                    <form class="dropzone dropzone-single p-0" data-dropzone="data-dropzone"
                                        data-options='{"maxFiles":1,"acceptedFiles":"image/*"}'>
                                        <div class="fallback"><input type="file" name="file" /></div>
                                        <div class="dz-preview dz-preview-single">
                                            <div class="dz-preview-cover dz-complete"><img class="dz-preview-img"
                                                    src="admin/assets/img/generic/image-file-2.png" alt=""
                                                    data-dz-thumbnail="" /><a class="dz-remove text-danger"
                                                    href="#!" data-dz-remove="data-dz-remove"><span
                                                        class="fas fa-times"></span></a>
                                                <div class="dz-progress"><span class="dz-upload"
                                                        data-dz-uploadprogress=""></span></div>
                                                <div class="dz-errormessage m-1"><span
                                                        data-dz-errormessage="data-dz-errormessage"></span></div>
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload"
                                                    data-dz-uploadprogress=""></span></div>
                                        </div>
                                        <div class="dz-message fs--1" data-dz-message="data-dz-message"><img
                                                class="me-2" src="admin/assets/img/icons/cloud-upload.svg"
                                                width="20" alt="" /><span class="d-none d-lg-inline">Drag
                                                your image here<br />or, </span><span
                                                class="btn btn-link p-0 fs--1">Browse</span></div>
                                    </form>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="mb-0">Upload Preview Video<span data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Upload preview video"><span
                                                class="fas fa-info-circle text-primary fs-0 ms-2"></span></span></h5>
                                </div>
                                <div class="card-body bg-light">
                                    <form class="dropzone dropzone-single p-0" data-dropzone="data-dropzone"
                                        data-options='{"maxFiles":1,"acceptedFiles":".mp4,.mkv,.avi"}'>
                                        <div class="fallback"><input type="file" accept="video/*" /></div>
                                        <div class="dz-preview dz-preview-single">
                                            <div class="dz-preview-cover dz-complete"><video class="dz-preview-img"
                                                    controls="controls" data-dz-thumbnail=""></video><a
                                                    class="dz-remove text-danger" href="#!"
                                                    data-dz-remove="data-dz-remove"><span
                                                        class="fas fa-times"></span></a>
                                                <div class="dz-progress"><span class="dz-upload"
                                                        data-dz-uploadprogress=""></span></div>
                                                <div class="dz-errormessage m-1 text-center"><span
                                                        data-dz-errormessage="data-dz-errormessage"></span></div>
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload"
                                                    data-dz-uploadprogress=""></span></div>
                                        </div>
                                        <div class="dz-message fs--1" data-dz-message="data-dz-message"><img
                                                class="me-2" src="admin/assets/img/icons/cloud-upload.svg"
                                                width="20" alt="" /><span class="d-none d-lg-inline">Drag
                                                your .mp4 or .mkv file here<br />or,
                                            </span><span class="btn btn-link p-0 fs--1">Browse</span></div>
                                    </form><label class="form-label mt-3" for="video-link">or, paste youtube link
                                        here</label>
                                    <div class="position-relative"><input class="form-control" id="video-link"
                                            type="url" placeholder="youtu.be/xXxxXxXXxxX" />
                                        <div class="position-absolute top-50 end-0 translate-middle-y lh-1 me-2"><span
                                                class="fas fa-link text-400 me-1"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 mb-lg-0">
                                <div class="card-header">
                                    <h5 class="mb-0">Set Pricing</h5>
                                </div>
                                <div class="card-body bg-light">
                                    <div class="row gx-2">
                                        <div class="col-12 mb-3"><label class="form-label" for="base-price">Base
                                                Price <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Course regular price"><span
                                                        class="fas fa-question-circle text-primary fs--1 ms-1"></span></span></label><input
                                                class="form-control" id="base-price" type="text"
                                                placeholder="" /></div>
                                        <div class="col-12"><label class="form-label"
                                                for="discounted-price">Discounted Price
                                                <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Course discounted price"><span
                                                        class="fas fa-question-circle text-primary fs--1 ms-1"></span></span></label><input
                                                class="form-control" id="discounted-price" type="text"
                                                placeholder="" />
                                        </div>
                                        <div class="text-end"> <a class="fs--1 fw-medium"
                                                href="#schedule-discount-modal" data-bs-toggle="modal">Schedule
                                                Discount</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-0 bottom-bar d-lg-none"
                    data-bottom-bar='{"target":"course-publish-btn","breakPoint":"lg"}'>
                    <div class="card-body py-2 px-0">
                        <div class="container">
                            <div class="row flex-between-center g-0">
                                <div class="col-auto"><a class="btn btn-link btn-sm text-secondary fw-medium px-0"
                                        href="#!">Save as Draft</a></div>
                                <div class="col-auto"><button class="btn btn-primary btn-md px-5 fw-medium"
                                        type="submit">Publish</button></div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Modal --}}
                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                    data-bs-target="#error-modal">Launch demo modal</button>
                <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                        <div class="modal-content position-relative">
                            <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="rounded-top-3 py-3 ps-4 pe-6 bg-light">
                                    <h4 class="mb-1" id="modalExampleDemoLabel">Add a new illustration </h4>
                                </div>
                                <div class="p-4 pb-0">
                                    <form>
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">Recipient:</label>
                                            <input class="form-control" id="recipient-name" type="text" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label" for="message-text">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button"
                                    data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Understood </button>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.partials._footer')
            </div>
            <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
                aria-labelledby="authentication-modal-label" aria-hidden="false">
                <div class="modal-dialog mt-6" role="document">
                    <div class="modal-content border-0">
                        <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                            <div class="position-relative z-1" data-bs-theme="light">
                                <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                                <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                            </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body py-4 px-5">
                            <form>
                                <div class="mb-3"><label class="form-label"
                                        for="modal-auth-name">Name</label><input class="form-control" type="text"
                                        autocomplete="on" id="modal-auth-name" /></div>
                                <div class="mb-3"><label class="form-label" for="modal-auth-email">Email
                                        address</label><input class="form-control" type="email" autocomplete="on"
                                        id="modal-auth-email" /></div>
                                <div class="row gx-2">
                                    <div class="mb-3 col-sm-6"><label class="form-label"
                                            for="modal-auth-password">Password</label><input class="form-control"
                                            type="password" autocomplete="on" id="modal-auth-password" /></div>
                                    <div class="mb-3 col-sm-6"><label class="form-label"
                                            for="modal-auth-confirm-password">Confirm Password</label><input
                                            class="form-control" type="password" autocomplete="on"
                                            id="modal-auth-confirm-password" /></div>
                                </div>
                                <div class="form-check"><input class="form-check-input" type="checkbox"
                                        id="modal-auth-register-checkbox" /><label class="form-label"
                                        for="modal-auth-register-checkbox">I accept the <a href="#!">terms
                                        </a>and <a href="#!">privacy policy</a></label></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                        name="submit">Register</button></div>
                            </form>
                            <div class="position-relative mt-5">
                                <hr />
                                <div class="divider-content-center">or register with</div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100"
                                        href="#"><span class="fab fa-google-plus-g me-2"
                                            data-fa-transform="grow-8"></span> google</a></div>
                                <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100"
                                        href="#"><span class="fab fa-facebook-square me-2"
                                            data-fa-transform="grow-8"></span> facebook</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    @include('admin.frontend.canva_setting-panel')


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="admin/vendors/popper/popper.min.js"></script>
    <script src="admin/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="admin/vendors/anchorjs/anchor.min.js"></script>
    <script src="admin/vendors/is/is.min.js"></script>
    <script src="admin/vendors/tinymce/tinymce.min.js"></script>
    <script src="admin/vendors/choices/choices.min.js"></script>
    <script src="admin/assets/js/flatpickr.js"></script>
    <script src="admin/vendors/dropzone/dropzone.min.js"></script>
    <script src="admin/vendors/fontawesome/all.min.js"></script>
    <script src="admin/vendors/lodash/lodash.min.js"></script>
    <script src="admin/admin/polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="admin/vendors/list.js/list.min.js"></script>
    <script src="admin/assets/js/theme.js"></script>
</body>


<!-- Mirrored from prium.github.io/falcon/v3.16.0/app/e-learning/course/create-a-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 11:12:22 GMT -->

</html>
