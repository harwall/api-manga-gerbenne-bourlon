<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Api Manga Bourlon Gerbenne</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: normal;
                height: 100vh;
                margin: 0;
            }

            a {
                color: #636b6f;
                text-decoration: underline;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                padding-top: 15px;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .instructions {
                display: block;
                margin: 0 auto;
                width: 90%;
                max-width: 800px;
                text-align: left;
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
<!-- 	               $developers = [  'Bourlon', 'Gerbenne' ] ;
                   <br/>
 -->                   Documentation API-MANGA
                </div>


                <p class="instructions">
                    <b>Fonctionnalités prévues :</b>
                    <br/>
                    Récupération d'informations non triées
                    <br/>
                    Fonctionnalité de recherche selon certains critères
                    <br/>
                    <br/>
                    URL de base:
                    <a href="http://api.renaud-bourlon.com/">http://api.renaud-bourlon.com/</a>
                    <br/>
                    <br/>
                    <b>Routes :</b>
                    <br/>
                    <a href="http://api.renaud-bourlon.com/api/mangas">http://api.renaud-bourlon.com/api/mangas</a>
                    <br/>
                    Retourne l’id, le nom et un lien vers la première de couverture de tous les mangas contenus dans la base
                    <br/>
                    <a href="http://api.renaud-bourlon.com/api/mangas/{id}">http://api.renaud-bourlon.com/api/mangas/{id}</a>
                    <br/> 
                    Retourne toutes les infos du manga ciblé par l’id.
                    <br/>
                    <br/>
                    <a href="http://api.renaud-bourlon.com/api/types">http://api.renaud-bourlon.com/api/types</a>
                    <br/>
                    Retourne l’id et le nom de tous les types (action, aventure etc…) contenus dans la base.
                    <br/>
                    <a href="http://api.renaud-bourlon.com/api/types/{id}/mangas">http://api.renaud-bourlon.com/api/types/{id}/mangas</a>
                    <br/>
                    Retourne tous les mangas ayant pour type l’id ciblé.
                    <br/>
                    <br/>
                    <a href="http://api.renaud-bourlon.com/api/sellers">http://api.renaud-bourlon.com/api/sellers</a>
                    <br/>
                    Retourne l’id et le nom de tous les revendeurs contenus dans la base.
                    <br/>
                    <a href="http://api.renaud-bourlon.com/api/sellers/{id}/mangas">http://api.renaud-bourlon.com/api/sellers/{id}/mangas</a>
                    <br/>
                    Retourne tous les mangas ayant pour revendeur l’id ciblé.
                    <br/>
                    <br/>
                    <b>Routes de recherches avec auto-complétion :</b>
                    <br/>
                    <a href="http://api.renaud-bourlon.com/api/mangas/search?q={txt}">http://api.renaud-bourlon.com/api/mangas/search?q={txt}</a>
                    <br/>
                    Retourne l’id, le nom et la couverture de tous les mangas correspondants à la recherche
                    <br/>
                    <br/>
                    <a href="http://api.renaud-bourlon.com/api/mangas/searchByAuthors?q={txt}">http://api.renaud-bourlon.com/api/mangas/searchByAuthors?q={txt}</a>
                    <br/>
                    Retourne l’id, le nom et l’auteur de tous les mangas correspondants à la recherche
                    <br/>
                    <br/>
                    <b>Informations complémentaire concernant nos données :</b>
                    <br/>
                    <u>Status</u> : “publishing” signifie que le mangas est toujours en cours de publication et donc qu’une prochaine sortie est prévue (mais la date n’est pas forcément connue)
                    <br/>
                    <u>Status</u> : “published” signifie que la publication du manga est terminée et qu’aucun nouveau volume ne devrait sortir.
                    <br/>
                    <u>Volume</u>: Désigne le dernier numéro paru à ce jour
                </p>





            </div>
        </div>
    </body>
</html>
