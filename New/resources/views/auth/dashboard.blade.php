@extends('auth.layouts')

@section('content')

<!DOCTYPE html>
<html>
    <head>
        <style>

            .First {
                display: none;
            }

            .Second {
                display: none;
            }

            .Yohoho {
                font-weight: bold;
                position: relative;
                text-decoration: none;
                text-align: center;
                margin-top: 180px;
                margin-left: 600px;
                font-size: 1.2rem;
                border-radius: 28px;
                border-color: rgba(8, 0, 255, 0.819);
                background-color: white;
                color: rgba(0, 0, 0, 0.5);
                font-family: calibri;
                padding: 1rem 4rem;
                box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.5);
                transition: box-shadow 0.3s, text-decoration 0.3s, border-color 0.3s;
            }

            .Yohoho:hover {
                box-shadow: 2px 4px 8px rgba(1, 1, 1, 1);
                text-decoration: underline;
                border-color: rgba (0, 0, 0, 0.5);
            }

            .Pink {
                color: rgba(230, 27, 196, 0.919);
                font-family: calibri;
                font-size: 1.5rem;
                position: relative;
                margin-left: 50px;
            }

            .Black {
                color: rgba(0, 0, 0, 0.77);
                font-family: calibri;
                font-size: 5rem;
                font-weight: 500;
                position: relative;
                margin-top: 10px;
                margin-left: 40px;
            }

            .Gray {
                color: rgba(45, 44, 44, 0.77);
                font-family: calibri;
                font-size: 1.3rem;
                position: relative;
                margin-left: 50px;
                margin-top: -30px;
            }
        </style>
        <title>Dashboard</title>            
    </head>
    <body>
        <p class="Pink">Vous avez la main sur votre santé</p>
        <p class="Black">Bonjour {{ Auth::user()->name }},<p>

        <p class="Gray">Mon espace santé vous permet de consserver et partager vos données et documents de santé en toute
        <br/> confidentialité.</p>
        <a href="http://localhost:3000/Activer">
        <button class="Yohoho">Compléter mon profil médical</button>
        </a>
    </body>
</html>
    
@endsection