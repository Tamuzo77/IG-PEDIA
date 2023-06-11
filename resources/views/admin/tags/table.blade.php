<x-admin.layouts title="Tags List">
    <div class="row g-3 mt-5">
        <div class="col-12">
            <nav style="--falcon-breadcrumb-divider: '»';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">IG-PEDIA || Database</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tags</li>
                </ol>
              </nav>
        </div>
        <div class="col-12">
            <div class="card z-1">
                <div class="card-header border-bottom">
                  <div class="row flex-between-end">
                    <div class="col-auto align-self-center">
                      <h5 class="mb-0" data-anchor="data-anchor" id="striped">{{ __('Tags Table') }}<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#striped" style="padding-left: 0.375em;"></a></h5>
                      <p class="mb-0 pt-1 mt-2 mb-0">Liste des différents <code>.tags IG-PEDIA</code> pour ajouter soit à un Cours soit à une (sous)-Categorie .</p>
                    </div>
                    
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="tab-content">
                    <div class="tab-pane preview-tab-pane active show" role="tabpanel" aria-labelledby="tab-dom-dabeb540-c34c-4548-b4a7-439561a3f7d5" id="dom-dabeb540-c34c-4548-b4a7-439561a3f7d5">
                      <div class="table-responsive scrollbar">
                        <table class="table table-striped overflow-hidden">
                          <thead>
                            <tr class="btn-reveal-trigger">
                              <th scope="col">Numero #</th>
                              <th scope="col">Nom</th>
                              <th class="text-end" scope="col">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($tags as $tag )
                            <tr class="btn-reveal-trigger">
                                @php
                                    $tagCrypt = \Illuminate\Support\Facades\Crypt::encrypt($tag->id);
                                @endphp
                                <td>{{ $increment }}</td>
                                <td>{{ $tag->name }}</td>
                                <td class="text-end">
                                  <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                    <div class="dropdown-menu dropdown-menu-end border py-0" style="">
                                      <div class="py-2">
                                        <a class="dropdown-item" href="{{ url("admin/tags/$tagCrypt") }}">Details</a>
                                        <a class="dropdown-item" href="#!">Edit</a>
                                        <a class="dropdown-item text-danger" href="#!">Delete</a></div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              @php
                                  $increment++
                              @endphp
                            @endforeach
                          </tbody>
                        </table>
                        {{ $tags->links() }}
                      </div>
                    </div>
                    
                  </div>
                </div>
            </div>
        </div>
    </div>
    
</x-admin.layouts>