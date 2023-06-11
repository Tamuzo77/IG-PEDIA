<x-admin.layouts>
    @if (Session::has('success'))
    <div class="alert alert-success border-2 d-flex align-items-center" role="alert">
        <div class="bg-success me-3 icon-item"><span class="fas fa-check-circle text-white fs-3"></span></div>
        <p class="mb-0 flex-1">{{ session('success') }}</p><button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="card theme-wizard h-100 mb-5">
        <div class="card-header bg-light pt-3 pb-2">
            <h5 class="mb-0" data-anchor="data-anchor" id="custom-styles-example"> {{ __('Category Create') }} <a
                    class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#"
                    style="padding-left: 0.375em;"></a></h5>
            <p class="mb-0 fs--1 text-400"> Blablabla</p>
        </div>
        <div class="card-body py-4" id="wizard-controller">
            <div class="tab-content">
                <div class="tab-pane px-sm-3 px-md-5 active show" role="tabpanel"
                    aria-labelledby="bootstrap-wizard-validation-tab2" id="bootstrap-wizard-validation-tab2">
                    <form action="{{ route('admin.category-store') }}" method="POST" enctype="multipart/form-data" id="dropzone-form" >
                        @csrf
                        <div class="dropzone dropzone-single p-0" id="my-dropzone" data-dropzone="data-dropzone" data-options='{"url":"/admin/store-category","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
                            <div class="fallback"><input type="file" name="file"   /></div>
                            <div class="dz-preview dz-preview-single">
                              <div class="dz-preview-cover dz-complete"><img class="dz-preview-img" src="{{ asset('admin/assets/img/generic/image-file-2.png') }}" alt="..." data-dz-thumbnail="" /><a class="dz-remove text-danger" href="#!" data-dz-remove="data-dz-remove"><span class="fas fa-times"></span></a>
                                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                <div class="dz-errormessage m-1"><span data-dz-errormessage="data-dz-errormessage"></span></div>
                              </div>
                              <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                            </div>
                            <div class="dz-message" data-dz-message="data-dz-message">
                              <div class="dz-message-text"><img class="me-2" src="{{ asset('admin/assets/img/icons/cloud-upload.svg') }}" width="25" alt="" />Drop your Category Picture file here</div>
                            </div>
                        </div>
                          
                        <x-admin.form.input name="Category Name" />

                        <x-admin.form.textarea name="Category Description" />
                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <x-admin.form.select name="Category Parent" :items="$categories" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="course-tags">Tags<span
                                        class="text-danger">*</span></label><select class="form-select js-choice"
                                    id="course-tags" multiple="multiple" size="1" name="tags[]"
                                    required="required" data-placeholder="Select upto 4 tags"
                                    data-options='{"removeItemButton":true,"placeholder":true}'>
                                    <option value="">Select organizer...</option>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Please select one or multiple</div>
                            </div>
                        </div>
                            <div class="px-sm-3 px-md-5">
                                <button class="btn btn-primary px-5 px-sm-6" type="submit">Submit</button>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
        
    </div>

    <script>
 Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#my-dropzone", {
        url: "{{ route('admin.category-store') }}",
        maxFiles: 1,
        dictDefaultMessage: "Choose or Drop a file here"
    });

    // Écouter l'événement "success" pour récupérer la réponse du serveur
    myDropzone.on("success", function(file, response) {
        // La réponse du serveur contient les informations sur le fichier téléchargé
        console.log(response.file); // Affiche le chemin du fichier sur le serveur
    });

    </script>
</x-admin.layouts>
