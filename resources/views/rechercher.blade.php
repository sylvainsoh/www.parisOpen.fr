@include('partie.header')

<div class="album py-5 bg-light">
    <div class="container">
        @if(session()->has('notification.message'))
            <div class="alert alert-{{session('notification.type')}} col-lg-12 text-center" role="alert">
                <svg class="bi bi-exclamation-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>
                <b>{{session('notification.message')}}</b>
            </div>
        @endif
        <div class="row">
            @if(count($uploads) >0)
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
            @endif
        </div>
    </div>
</div>

@include('partie.footer')
