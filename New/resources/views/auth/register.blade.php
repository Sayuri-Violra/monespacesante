@extends('auth.layouts')

@section('content')
<style>

  .Confirmation {
    position: relative;
    left: -350px;
    top: -210px;
    font-size: 0.9rem;
    font-family: calibri;
  }

  .Id {
    position: relative;
    left: -350px;
    top: -290px;
    font-size: 0.9rem;
    font-family: calibri;
  }

  .Your-Name {
    position: relative;
    font-size: 0.9rem;
    font-family: calibri;
    right: 350px;
    bottom: 350px;
  }

    .All {
        position: relative;
        left: 1000px;
    }

    .Pink {
    font-family: calibri;
    position: relative;
    font-weight: bold;
    color: rgb(233, 28, 158);
    font-size: 1rem;
    top: -350px;
    left: -350px;
  }

  .Black {
    font-family: calibri;
    position: relative;
    font-weight: bold;
    color: rgba(0, 0, 0, 0.658);
    font-size: 1.7rem;
    top: -350px;
    left: -350px;
  }

  .Blue {
    font-family: calibri;
    position: relative;
    font-weight: bold;
    color: rgba(9, 9, 198, 0.832);
    font-size: 0.9rem;
    top: -350px;
    left: -350px;
  }

  .Write2 {
    height: 35px;
    width: 300px;
    padding: 0px;
    font-size: 16px;
    border-radius: 5px;
    top: 10px;
    position: relative;
    left: -350px;
    top: -190px;    
  }

  .Write {
    height: 35px;
    width: 300px;
    padding: 0px;
    font-size: 16px;
    border-radius: 5px;
    top: 10px;
    position: relative;
    left: -350px;
    top: -330px;
  }

  .Input1 {
    height: 35px;
    width: 300px;
    padding: 0px;
    font-size: 16px;
    border-radius: 5px;
    top: 10px;
    position: relative;
    left: -350px;
    top: -270px;
  }

  .Input2 {
    height: 35px;
    width: 300px;
    padding: 0px;
    font-size: 16px;
    border-radius: 5px;
    top: 10px;
    position: relative;
    left: -350px;
    top: -235px;
  }

  .Link1 {
    text-decoration: underline;
    color:rgba(9, 9, 198, 0.832);
    font-weight: bold;
    font-size: 0.8rem;
    position: relative;
    left: -350px;
    top: -170px;
    font-family: calibri;
  }

  .Link2 {
    text-decoration: underline;
    color: rgba(9,9, 198, 0.832);
    font-weight: bold;
    font-size: 0.8rem;
    font-family: calibri;
    position: relative;
    left: -350px;
    top: 500px;
  }

  .PW {
    position: relative;
    left: -350px;
    top: -250px;
    font-family: calibri;
    font-size: 0.9rem;
  }

  .Low {
    position: relative;
    font-family: calibri;
    color: gray;
    font-size: 1.1rem;
    right: 350px;
    top: -170px;
  }

  .Wow {
    position: relative;
    color: gray;
    font-family: calibri;
    font-size: 1.15rem;
    right: 350px;
    top: -350px;
  }

  .Link {
    color:rgba(9, 9, 198, 0.832);
    text-decoration: underline;
    font-weight: bold;
    top: -150px;
  }

  .Hola {
    font-weight: bold;
    margin-left: 1rem;
    background-color: rgba(8, 0, 255, 0.819);
    color: white;
    font-family: calibri;
    padding: 0.9rem 5rem;
    font-size: 1rem;
    border-radius: 28px;
    box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.5);
    border: none;
    transition: box-shadow 0.3s, text-decoration 0.3s, text-align 0.3s;
    font-family: calibri;
    position: relative;
    right: 350px;
    bottom: 170px;
}

.Hola:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
    text-align: center;
    text-decoration: underline;
}
</style>
<div class="All">
<p class="Pink">Etape 1/3</p>
<p class="Black">Je m'identifie</p>
<p class="Blue">Se connecter avec mes identifiants Mon<br/>espace santé</p>
<p class="Wow">Tous les champs sont obligatoires</p>
    <div class="col-md-8">

        <div class="card">
                <div class="card-body">
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="Your-Name">Nom</label>
                        <div class="col-md-6">
                          <input type="text" class="Write" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="Id">Email</label>
                        <div class="col-md-6">
                          <input type="email" class="Input1" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="PW">Mon mot de passe</label>
                        <div class="col-md-6">
                          <input type="password" class="Input2" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <br/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password_confirmation" class="Confirmation">Confirmation du mot de passe</label>
                        <div class="col-md-6">
                          <input type="password" class="Write2" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="Hola" value="Continuer">
                    </div>
                    <div>
                        <p class="Low">
                            Pas encore de profil?
                            <a href="http://localhost:3000/" class="Link">Activer mon profil</a>
                        </p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection