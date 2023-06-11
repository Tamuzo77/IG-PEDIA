<x-admin.layouts :title="'Tag: '.$tag->name">
    <div class="card mb-3 mt-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor" id="search-example">{{ __("Liste des Catégories et Cours associé à   ") }} <code>{{ $tag->name }}</code><a class="anchorjs-link "
                            aria-label="Anchor" data-anchorjs-icon="#" href="#search-example"
                            style="padding-left: 0.375em;"></a></h5>
                    <p class="mb-0 pt-1 mt-2 mb-0">Exécuter une recherche sur <code>Type</code> pour effectuer un filtre par Category/Course</p>
                </div>
                <div class="col-auto ms-auto mb-2">
                    <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist">
                        <a class="btn btn-sm active" href="{{ route('admin.tags-table') }}" >Back To the Table</a>
                  </div>
                </div>
        </div>
        <div class="card-body pt-0">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active show" role="tabpanel"
                    aria-labelledby="tab-dom-9f4833fd-a87d-4a87-971b-1500e4b3df8c"
                    id="dom-9f4833fd-a87d-4a87-971b-1500e4b3df8c">
                    <div id="tableExample3"
                        data-list='{"valueNames":["increment","name","type"],"page":5,"pagination":true}'>
                        <div class="row justify-content-end g-0">
                            <div class="col-auto col-sm-5 mb-3">
                                <form>
                                    <div class="input-group"><input
                                            class="form-control form-control-sm shadow-none search" type="search"
                                            placeholder="Search..." aria-label="search" />
                                        <div class="input-group-text bg-transparent"><span
                                                class="fa fa-search fs--1 text-600"></span></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive scrollbar">
                            <table class="table table-bordered table-striped fs--1 mb-0">
                                <thead class="bg-200 text-900">
                                    <tr>
                                        <th class="sort" data-sort="increment">Numérotation</th>
                                        <th class="sort" data-sort="name">Name | Title</th>
                                        <th class="sort" data-sort="type">Type</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($tableTag as $tableDetail )
                                    <tr>
                                        <td class="increment">{{ $increment }}</td>
                                        <td class="name">{{ $tableDetail['name'] }}</td>
                                        <td class="type">{{ $tableDetail['type'] }}</td>
                                    </tr>
                                    @php
                                        $increment++;
                                    @endphp
                                    @endforeach
                                    
                                    <tr>
                                        <td class="name">Homer</td>
                                        <td class="email">homer@example.com</td>
                                        <td class="age">35</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Oscar</td>
                                        <td class="email">oscar@example.com</td>
                                        <td class="age">52</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Emily</td>
                                        <td class="email">emily@example.com</td>
                                        <td class="age">30</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Jara</td>
                                        <td class="email">jara@example.com</td>
                                        <td class="age">25</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Clark</td>
                                        <td class="email">clark@example.com</td>
                                        <td class="age">39</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Jennifer</td>
                                        <td class="email">jennifer@example.com</td>
                                        <td class="age">52</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Tony</td>
                                        <td class="email">tony@example.com</td>
                                        <td class="age">30</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Tom</td>
                                        <td class="email">tom@example.com</td>
                                        <td class="age">25</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Michael</td>
                                        <td class="email">michael@example.com</td>
                                        <td class="age">39</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Antony</td>
                                        <td class="email">antony@example.com</td>
                                        <td class="age">39</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Raymond</td>
                                        <td class="email">raymond@example.com</td>
                                        <td class="age">52</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Marie</td>
                                        <td class="email">marie@example.com</td>
                                        <td class="age">30</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Cohen</td>
                                        <td class="email">cohen@example.com</td>
                                        <td class="age">25</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Rowen</td>
                                        <td class="email">rowen@example.com</td>
                                        <td class="age">39</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center mt-3"><button
                                class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                                data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1"
                                type="button" title="Next" data-list-pagination="next"><span
                                    class="fas fa-chevron-right"> </span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layouts>
