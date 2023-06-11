<x-admin.layouts>
    @if (Session::has('success'))
        <div class="alert alert-success border-2 d-flex align-items-center" role="alert">
            <div class="bg-success me-3 icon-item"><span class="fas fa-check-circle text-white fs-3"></span></div>
            <p class="mb-0 flex-1">{{ session('success') }}</p><button class="btn-close" type="button"
                data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card mx-auto" style="max-width: 400px;">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor" id="custom-styles-example"> {{ __('Tag Form Create') }}
                        <a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#"
                            style="padding-left: 0.375em;"></a></h5>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active show" role="tabpanel"
                    aria-labelledby="tab-dom-831c6aca-24da-4a28-80d8-7abaf543d184"
                    id="dom-831c6aca-24da-4a28-80d8-7abaf543d184">
                    <form class="row g-3 needs-validation was-validated" novalidate=""
                        action="{{ route('admin.store-tag') }}" method="POST">
                        @csrf
                        <x-admin.form.input name="Tag Name" placeholder="Laravel" />

                        <div class="col-12">
                            <div class="form-check"><input class="form-check-input" id="invalidCheck" type="checkbox"
                                    value="" required=""><label class="form-check-label mb-0"
                                    for="invalidCheck">Agree to terms and conditions</label>
                                <div class="invalid-feedback mt-0">You must agree before submitting.</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin.layouts>
