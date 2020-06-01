@include('partie.header')

<section class="jumbotron text-center"
         style="background-image: url('https://odis.homeaway.com/odis/destination/b307142e-6dcd-45ff-9512-adb8db6f745d.hw5.jpg'); color: white">
    <div class="container">
        <h1>Projet Open Data Paris</h1>
        <p>
            Le site de la démarche Open Data de la Ville de Paris. Vous trouverez ici l'ensemble des jeux de données
            publiés par les services de la Ville et ses partenaires sous licence ODbL.
        </p>
        <p>
            <a href="#" class="btn btn-dark my-2">
                <svg class="bi bi-cloud-download" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.887 5.2l-.964-.165A2.5 2.5 0 1 0 3.5 10H6v1H3.5a3.5 3.5 0 1 1 .59-6.95 5.002 5.002 0 1 1 9.804 1.98A2.501 2.501 0 0 1 13.5 11H10v-1h3.5a1.5 1.5 0 0 0 .237-2.981L12.7 6.854l.216-1.028a4 4 0 1 0-7.843-1.587l-.185.96z"/>
                    <path fill-rule="evenodd"
                          d="M5 12.5a.5.5 0 0 1 .707 0L8 14.793l2.293-2.293a.5.5 0 1 1 .707.707l-2.646 2.646a.5.5 0 0 1-.708 0L5 13.207a.5.5 0 0 1 0-.707z"/>
                    <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 6z"/>
                </svg>
                Télécharger
            </a>
            <a href="{{ route('login') }}" class="btn btn-dark my-2">
                <svg class="bi bi-person-bounding-box" width="1em" height="1em" viewBox="0 0 16 16"
                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                    <path fill-rule="evenodd"
                          d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                S'identifier
            </a>
            <a href="#" class="btn btn-dark my-2">
                <svg class="bi bi-cloud-upload" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.887 6.2l-.964-.165A2.5 2.5 0 1 0 3.5 11H6v1H3.5a3.5 3.5 0 1 1 .59-6.95 5.002 5.002 0 1 1 9.804 1.98A2.501 2.501 0 0 1 13.5 12H10v-1h3.5a1.5 1.5 0 0 0 .237-2.981L12.7 7.854l.216-1.028a4 4 0 1 0-7.843-1.587l-.185.96z"/>
                    <path fill-rule="evenodd"
                          d="M5 8.854a.5.5 0 0 0 .707 0L8 6.56l2.293 2.293A.5.5 0 1 0 11 8.146L8.354 5.5a.5.5 0 0 0-.708 0L5 8.146a.5.5 0 0 0 0 .708z"/>
                    <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 6z"/>
                </svg>
                Téléverser
            </a>
        </p>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-dark" role="alert">
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
            @foreach($uploads as $jeu)
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
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                {{$uploads->links()}}
            </div>
            <div class="col-lg4"></div>
        </div>
    </div>
</div>

@include('partie.footer')
