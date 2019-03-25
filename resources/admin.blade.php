<!DOCTYPE html>
<html lang="en" dir="ltr">
      <head>
          <meta charset="utf-8">

          <title>Acceuil</title>
          <link rel="stylesheet" href="public/css/general.css">
      </head>
        <style>

            body{
              background-color: #80808024 ;
            }
            .bbs{
              font-size: 30px ;
              color: red ;
            }
            .hautdepage{

              border-color : black ;
              margin-left: 100px ;
              margin-right : 100px ;
              font-weight: 800 ;
              box-shadow:1px 1px 7px 0px rgba(0, 0, 0, 0.29);
              border-radius: 10px ;
              padding: 10px 0px 10px 0px ;
            }

            .baspage{
              position: fixed ;
              bottom: 0 ;
              left : 100 ;
              border-color : #1f0da7 ;
              margin-left: 100px ;
              margin-right : 100px ;
              font-weight: 800 ;
              box-shadow:1px 1px 7px 0px rgba(0, 0, 0, 0.29);
              border-radius: 10px ;
              padding: 10px 0px 10px 0px ;
            }


            .contenuacceuil{
              border : 1px solid  #0400a7;

              background-color: #e0e0e0;
              box-shadow: 1px 2px 20px 0px  rgba(0, 0, 0, 0.5);
              border-radius: 2px ;
              margin : 50px 30px 50px 30px ;
              padding : 40px 40px 40px 40px ;

            }
            .contenu{
              width : 100% ;

            }

            .contenu a{
              display: inline-block;
              width: 30%;
              margin: 0 0.7% 0 0.7%;
              text-align: center;
              border: 1px solid #1f0da7;
              border-radius: 5px;
              text-decoration: none;
              background-color : #e0e0e0 ;
              color : black  ;
              font-size: 20px ;
              font-style: monospace ;
              letter-spacing: 3px ;
                transition: 0.3s ;

            }
            .contenu a:hover{
              transform: scale(1.05);
            }
            .contenu a:active{
              transform: scale(1.00);
            }

            h1{
              letter-spacing: 5px ;
              font-weight: 600 ;
              color: #1f0da7 ;
            }

        </style>
              <body>
                    <div class="hautdepage" align=center>
                        Parking M2L
                    </div>
                    <div class="contenuacceuil">


                        <h1 class="titre" align=center>Bienvenue sur l'application de réservation des places de parking</h1>
                        <div class="contenu">
                            <a href="">
                              <p>Consulter les demandes de places</p>
                            </a>

                            <a href="">
                              <p>Consulter les inscrits</p>
                            </a>

                            <a href="">
                              <p>Mon compte</p>
                            </a>
                        </div>


                      </div>
                      <div class="information" align=center>
                        <p>Well done vous avez reserver votre place le numeros est : </p>
                      </div>
                        <div class="baspage">
                          <p align=center>Contactez nous</p>
                        </div>

              </body>
</html>
