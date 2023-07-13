@extends('auth.layouts')

@section('content')
<style>
    .Cnx {
        font-family: calibri;
        color: rgb(233, 28, 158);
        font-size: 1.5rem;
        font-weight: bold;
        position: relative;
        text-align: center;
        bottom: 350px;
    }

    .Tik {
        position: relative;
        bottom: 300px;
        text-align: center;
        margin-left: 700px;
        font-family: calibri;
        color: rgba(9, 9, 198, 0.832);
        font-size: 1.2rem;
    }

    .Adresse {
        height: 35px;
        width: 300px;
        padding: 0px;
        font-size: 16px;
        border-radius: 5px;
        position: relative;
        font-family: calibri;
        text-align: center;
        margin-left: 610px;
        bottom: 270px;
    }

    .Tok {
        position: relative;
        bottom: 240px;
        text-align: center;
        margin-left: 700px;
        font-family: calibri;
        color: rgba(9, 9, 198, 0.832);
        font-size: 1.2rem;
    }

    .Pass {
        height: 35px;
        width: 300px;
        padding: 0px;
        font-size: 16px;
        border-radius: 5px;
        position: relative;
        font-family: calibri;
        text-align: center;
        margin-left: 610px;
        bottom: 210px;
    }

    .Bou {
        font-weight: bold;
        margin-left: 1.2rem;
        background-color: rgba(8, 0, 255, 0.819);
        color: white;
        font-family: calibri;
        padding: 1rem 7rem;
        font-size: 1.1rem;
        border-radius: 28px;
        box-shadow: 1px 2px 4px rgba(0, 0, 0, 1);
        border: none;
        transition: box-shadow 0.3s, text-align 0.3s, color 0.3s, background-color 0.3s;
        font-family: calibri;
        position: relative;
        left: 590px;
        bottom: 150px;
    }

    .Bou:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
    text-align: center;
    background-color: white;
    color: rgba(8, 0, 255, 0.819);
  }

  .Revenir {
        font-weight: bold;
        margin-left: 1.2rem;
        background-color: white;
        color: rgba(8, 0, 255, 0.819);
        font-family: calibri;
        padding: 1rem 4rem;
        font-size: 1.1rem;
        border-radius: 28px;
        box-shadow: 1px 2px 4px rgba(0, 0, 0, 1);
        border-color: rgba(8, 0, 255, 0.819);
        transition: box-shadow 0.3s, background-color 0.3s;
        font-family: calibri;
        position: relative;
        left: 1170px;
    }

    .Revenir:hover {
        box-shadow: 0 4px 8 px rgba(0, 0, 0, 0.4);
        background-color: rgba (8, 0, 255, 0.819);
    }
</style>

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="Cnx">Se Connecter</div>
            <div class="card-body">
                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="Tik">Adresse Email:</label>
                        <div class="col-md-6">
                          <input type="email" class="Adresse" placeholder="Email..." id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="Tok">Mot de passe:</label>
                        <div class="col-md-6">
                          <input type="password" class="Pass" placeholder="Password..." id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="Bou" value="Connexion">
                    </div>
                    <a href="http://localhost:3000/">
                    <input class="Revenir" type="button" value="Revenir à la page d'accueil">
                    </a>
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection