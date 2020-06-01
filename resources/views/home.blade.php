@include('partie.header')

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="alert alert-primary" role="alert">
                    <h3><b>Bienvenue sur le projet Open data Paris</b></h3>
                    <hr>
                    Le site de la démarche Open Data de la Ville de Paris. Vous trouverez ici l'ensemble des jeux de
                    données publiés par les services de la Ville et ses partenaires sous licence ODbL.
                    Partager avec nous vos attentes et vos idées sur les nouveaux jeux de données et services
                    Paris Data via notre Formulaire de Contact.
                </div>
            </div>
        </div>
        <div class="row">
            @if(session()->has('notification.message'))
                <div class="alert alert-{{session('notification.type')}} col-lg-12 text-center" role="alert">
                    <svg class="bi bi-exclamation-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                    <b>{{session('notification.message')}}</b>
                </div>
            @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Tableau de bord</div>
                    <div class="card-body">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button style="text-decoration: none" class="btn btn-link btn-block text-left"
                                                type="button" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            <svg class="bi bi-person-bounding-box" width="1em" height="1em"
                                                 viewBox="0 0 16 16" fill="currentColor"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd"
                                                      d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                            Vos informations
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="card text-center">
                                            <div class="card-header">
                                                <b>Nom : {{Auth::user()->name}}</b>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <svg class="bi bi-collection-fill" width="1em" height="1em"
                                                         viewBox="0 0 16 16" fill="currentColor"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="16" height="10" rx="1.5"
                                                              transform="matrix(1 0 0 -1 0 14.5)"/>
                                                        <path fill-rule="evenodd"
                                                              d="M2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
                                                    </svg>
                                                    Jeux de données : {{count(Auth::user()->uploads)}}
                                                </p>
                                                <a class="btn btn-xs btn-outline-danger" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <svg class="bi bi-box-arrow-right" width="1em" height="1em"
                                                         viewBox="0 0 16 16" fill="currentColor"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                              d="M11.646 11.354a.5.5 0 0 1 0-.708L14.293 8l-2.647-2.646a.5.5 0 0 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
                                                        <path fill-rule="evenodd"
                                                              d="M4.5 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
                                                        <path fill-rule="evenodd"
                                                              d="M2 13.5A1.5 1.5 0 0 1 .5 12V4A1.5 1.5 0 0 1 2 2.5h7A1.5 1.5 0 0 1 10.5 4v1.5a.5.5 0 0 1-1 0V4a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-1.5a.5.5 0 0 1 1 0V12A1.5 1.5 0 0 1 9 13.5H2z"/>
                                                    </svg>
                                                    Déconnexion
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form><br><br>
                                                <div class="text-center">
                                                    <div class="spinner-grow spinner-border-sm text-info" role="status">
                                                        <span class="sr-only">...</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-muted">
                                                <h6>
                                                    <svg class="bi bi-envelope-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                                    </svg> {{Auth::user()->email}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button style="text-decoration: none"
                                                class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                            <svg class="bi bi-folder-plus" width="1em" height="1em" viewBox="0 0 16 16"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
                                                <path fill-rule="evenodd"
                                                      d="M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd"
                                                      d="M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                                            </svg>
                                            Créer un jeu de données
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="card-body col-lg-12 text-center" style="padding: 4%">
                                            <form method="POST" action="{{ route('addUpload') }}">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="description"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                                                    <div class="col-md-6">
                                        <textarea rows="5" placeholder="Desciption..." id="description"
                                                  class="form-control @error('description') is-invalid @enderror"
                                                  name="description" required autocomplete="description"
                                                  autofocus></textarea>
                                                        @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="producteur"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Producteur') }}</label>
                                                    <div class="col-md-6">
                                                        <input id="producteur" type="text"
                                                               class="form-control @error('producteur') is-invalid @enderror"
                                                               name="producteur" value="{{ old('producteur') }}"
                                                               required>
                                                        @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="licence"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Licence') }}</label>
                                                    <div class="col-md-6">
                                                        <input id="licence" type="text"
                                                               class="form-control @error('licence') is-invalid @enderror"
                                                               name="licence" value="{{ old('licence') }}" required>
                                                        @error('licence')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="categorie"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Catégorie') }}</label>
                                                    <div class="col-md-6">
                                                        <select name="categorie" class="form-control" id="categorie">
                                                            <option>Selectionner une catégorie</option>
                                                            @foreach($categories as $categorie)
                                                                <option
                                                                    value="{{$categorie->id}}">{{$categorie->nomCategorie}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            <svg class="bi bi-check-circle" width="1em" height="1em"
                                                                 viewBox="0 0 16 16"
                                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                      d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                <path fill-rule="evenodd"
                                                                      d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                                                            </svg>
                                                            &nbsp;
                                                            {{ __(' Créer le jeu de données') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button style="text-decoration: none"
                                                class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                            <svg class="bi bi-folder-plus" width="1em" height="1em" viewBox="0 0 16 16"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
                                                <path fill-rule="evenodd"
                                                      d="M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd"
                                                      d="M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                                            </svg>
                                            Importer des données
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <div class="card-body col-lg-12 text-center" style="padding: 4%">
                                                <a  style="text-decoration: none;font-size: 12px" href="{{asset('fichiers/ClasseurExemple.csv')}}"> *Cliquer ici pour télécharger le fichier Model</a>
                                                <form method="POST" action="{{route('importExel')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label for="jeuxDeDonnees" class="col-md-4 col-form-label text-md-right">{{ __('Jeux de données') }}</label>
                                                        <div class="col-md-6">
                                                            <select name="jeuxDeDonnees" class="form-control" id="jeuxDeDonnees">
                                                                <option>Sélectionner le jeu de données</option>
                                                                @foreach($uploads as $upload)
                                                                    <option value="{{$upload->id}}">{{$upload->description}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fichier" class="col-md-4 col-form-label text-md-right">{{ __('Fichier de données') }}</label>
                                                        <div class="col-md-6">
                                                            <input type="file" class="form-control-file" id="fichier" name="file" accept=".csv">
                                                            @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                <svg class="bi bi-cloud-upload" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.887 6.2l-.964-.165A2.5 2.5 0 1 0 3.5 11H6v1H3.5a3.5 3.5 0 1 1 .59-6.95 5.002 5.002 0 1 1 9.804 1.98A2.501 2.501 0 0 1 13.5 12H10v-1h3.5a1.5 1.5 0 0 0 .237-2.981L12.7 7.854l.216-1.028a4 4 0 1 0-7.843-1.587l-.185.96z"/>
                                                                    <path fill-rule="evenodd" d="M5 8.854a.5.5 0 0 0 .707 0L8 6.56l2.293 2.293A.5.5 0 1 0 11 8.146L8.354 5.5a.5.5 0 0 0-.708 0L5 8.146a.5.5 0 0 0 0 .708z"/>
                                                                    <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 6z"/>
                                                                </svg>
                                                                &nbsp;
                                                                {{ __('Approvisionner le jeu de données') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-center"><b>Vos jeux de données</b></h4>
                        <hr>
                        <div class="row">
                    @foreach(Auth::user()->uploads as $jeu)
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                    <img src="https://opendata.paris.fr/assets/theme_image/header.png"
                                         alt="Illustration">
                                    <div class="card-body text-center">
                                        <p class="card-text">
                                            <strong>Description : </strong>{{substr($jeu->description,0,70)." ..."}}
                                        </p>
                                        <p class="card-text">
                                            <strong>Licence : </strong>{{$jeu->licence}}
                                        </p>
                                        <p class="card-text" style="font-size: 12px">
                                            <strong>Catégorie : </strong>{{$jeu->categorie->nomCategorie}}
                                        </p>
                                        <p class="card-text" style="font-size: 12px">
                                            <strong>Données : </strong>{{count($jeu->datas)}} éléments
                                        </p>
                                        <hr>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="{{route('consulter',['id'=>$jeu->id])}}" type="button" class="btn btn-sm btn-success">
                                                    <svg class="bi bi-clipboard-data" width="1em" height="1em"
                                                         viewBox="0 0 16 16" fill="currentColor"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                              d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                                        <path fill-rule="evenodd"
                                                              d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                                        <path
                                                            d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                                                    </svg>
                                                </a>
                                                <a href="{{route('api',['id'=>$jeu->id])}}" type="button" class="btn btn-sm btn-warning">
                                                    <svg class="bi bi-server" width="1em" height="1em"
                                                         viewBox="0 0 16 16" fill="currentColor"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path  d="M13 2c0-1.105-2.239-2-5-2S3 .895 3 2s2.239 2 5 2 5-.895 5-2z"/>
                                                        <path d="M13 3.75c-.322.24-.698.435-1.093.593C10.857 4.763 9.475 5 8 5s-2.857-.237-3.907-.657A4.881 4.881 0 0 1 3 3.75V6c0 1.105 2.239 2 5 2s5-.895 5-2V3.75z"/>
                                                        <path d="M13 7.75c-.322.24-.698.435-1.093.593C10.857 8.763 9.475 9 8 9s-2.857-.237-3.907-.657A4.881 4.881 0 0 1 3 7.75V10c0 1.105 2.239 2 5 2s5-.895 5-2V7.75z"/>
                                                        <path d="M13 11.75c-.322.24-.698.435-1.093.593-1.05.42-2.432.657-3.907.657s-2.857-.237-3.907-.657A4.883 4.883 0 0 1 3 11.75V14c0 1.105 2.239 2 5 2s5-.895 5-2v-2.25z"/>
                                                    </svg>
                                                </a>
                                                <a href="{{route('telecharger',['id'=>$jeu->id])}}"  type="button" class="btn btn-sm btn-primary">
                                                    <svg class="bi bi-cloud-download" width="1em" height="1em"
                                                         viewBox="0 0 16 16" fill="currentColor"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.887 5.2l-.964-.165A2.5 2.5 0 1 0 3.5 10H6v1H3.5a3.5 3.5 0 1 1 .59-6.95 5.002 5.002 0 1 1 9.804 1.98A2.501 2.501 0 0 1 13.5 11H10v-1h3.5a1.5 1.5 0 0 0 .237-2.981L12.7 6.854l.216-1.028a4 4 0 1 0-7.843-1.587l-.185.96z"/>
                                                        <path fill-rule="evenodd"
                                                              d="M5 12.5a.5.5 0 0 1 .707 0L8 14.793l2.293-2.293a.5.5 0 1 1 .707.707l-2.646 2.646a.5.5 0 0 1-.708 0L5 13.207a.5.5 0 0 1 0-.707z"/>
                                                        <path fill-rule="evenodd"
                                                              d="M8 6a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 6z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <small class="text-muted"><b>Date : </b>{{$jeu->created_at}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partie.footer')
