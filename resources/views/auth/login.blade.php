@extends('layouts.app')

@section('content')
<!-- Section: Design Block -->
<section class="text-center text-lg-start" style="width: 53%; margin-left:23%; margin-top:3%;">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
    label{
        font-size: 20px;
    }
    p{
        font-size: 20px;
    }


  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Connectez-vous maintenant</h2>
            <form method="POST" action="{{ route('register') }}">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <!-- <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="Prénom" class="form-control @error('Prénom') is-invalid @enderror" name="Prénom" value="{{ old('Prénom') }}" required autocomplete="Prénom" required />
                    <label class="form-label " for="Prénom">Prénom</label>

                                @error('Prénom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="name"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" required />
                    <label class="form-label" for="name">Nom</label>


                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                  </div>
                </div> -->
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="email">Adresse Email</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" required />


                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="password">Mot de passe</label>
                <input type="password" id="form3Example4" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" required />


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <br>


              <!-- Submit button -->
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4 mx-auto">
                    <button type="submit" class="btn btn-outline-primary" style=" font-family: Lato; font-size: 150%; text-align:center; color:black;">
                        {{ __("Se Connecter") }}
                    </button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>

            <br><br><br>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Ou inscrivez-vous avec :</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
@endsection
