@include('partie.header')

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="card mb-3 col-lg-12 bg-light border-dark" style="padding: 4%">
                <span><b>Se connecter au Projet Open Paris</b></span>
                <hr>
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img style="padding: 4%"
                             src="{{asset("https://images.adsttc.com/media/images/5d44/14fa/284d/d1fd/3a00/003d/large_jpg/eiffel-tower-in-paris-151-medium.jpg?1564742900")}}"
                             class="card-img img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="padding: 4%">
                            <form method="POST" action="{{ route('login') }}" class="text-center">
                                @csrf
                                <div class="form-group row">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Votre E-Mail') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-dark">
                                            <svg class="bi bi-check-circle-fill" width="1em" height="1em"
                                                 viewBox="0 0 16 16" fill="currentColor"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                            </svg>
                                            &nbsp;
                                            {{ __('Se connecter') }}
                                        </button> <br>
                                        @if (Route::has('password.request'))
                                            <!--<a style="text-decoration: none;font-size: 10px" class="btn btn-link" href="{{ route('password.request') }}">-->
                                            <a style="text-decoration: none;font-size: 10px" class="btn btn-link" >
                                                {{ __('Mot de passe oublié ?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <a href="{{url('/')}}">Condition d'utilisation</a><a style="display: inline" href="{{url('/')}}">Politique de confidentialité</a>
            </div>
        </div>
    </div>
</div>

@include('partie.footer')
