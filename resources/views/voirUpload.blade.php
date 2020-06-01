@include('partie.header')

<div class="album py-5 bg-light">
    <div class="container">
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
                    <div class="card-header">
                        <b>Description : </b>{{$upload->description}}<br>
                        <b>Producteur : </b>{{$upload->producteur}}<br>
                        <b>Licence : </b>{{$upload->licence}}<br>
                        <b>Catégorie : </b>{{$upload->categorie->nomCategorie}}<br>
                        <b>Création : </b>{{$upload->created_at}}<br>
                        <b>Nombre d'éléments : </b>{{count($upload->datas)}} Lignes<br>
                        <a href="{{asset('upload/fichier.csv')}}"  type="button" class="btn btn-sm btn-warning">
                            <svg class="bi bi-cloud-download" width="1em" height="1em"
                                 viewBox="0 0 16 16" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.887 5.2l-.964-.165A2.5 2.5 0 1 0 3.5 10H6v1H3.5a3.5 3.5 0 1 1 .59-6.95 5.002 5.002 0 1 1 9.804 1.98A2.501 2.501 0 0 1 13.5 11H10v-1h3.5a1.5 1.5 0 0 0 .237-2.981L12.7 6.854l.216-1.028a4 4 0 1 0-7.843-1.587l-.185.96z"/>
                                <path fill-rule="evenodd"
                                      d="M5 12.5a.5.5 0 0 1 .707 0L8 14.793l2.293-2.293a.5.5 0 1 1 .707.707l-2.646 2.646a.5.5 0 0 1-.708 0L5 13.207a.5.5 0 0 1 0-.707z"/>
                                <path fill-rule="evenodd"
                                      d="M8 6a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 6z"/>
                            </svg>&nbsp; Télécharger
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Identifiant</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Valeur</th>
                                <th scope="col">Producteur</th>
                                <th scope="col">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($upload->datas as $data)
                                <tr>
                                    <th scope="row">{{$data->id}}</th>
                                    <td>{{$data->identifiant}}</td>
                                    <td>{{$data->nom}}</td>
                                    <td>{{$data->valeur}}</td>
                                    <td>{{$data->upload->producteur}}</td>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partie.footer')
