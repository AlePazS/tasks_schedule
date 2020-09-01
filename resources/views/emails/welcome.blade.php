<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Cable Color</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
    <style>
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Work Sans', sans-serif;
            line-height: 1.6;
        }

        a{
            text-decoration:none;
        }

            /* *********************** Código perteneciente al HEADER ****************** */
        .header{
            
            color:rgb(95,33,103);
            text-align: center;
            padding: 40px 0 30px 0;
            background-image:url('../img/CABLE-COLOR.png') ;
            background-color: transparent;
            background-size: cover; 
            
        }
        .tittle-header{
            padding:10px 0 10px 0;
            margin:5px 0 5px 0;
        }
        .img-header{
            
            width: 500px;
            /* display: block; */
        }
        /* ************************ Fin código HEADER ******************** */


        /* *********************** Código perteneciente al BODY ****************** */
         .body{
            padding: 40px 30px 40px 30px;
            background-color:#ffffff;
         }

         

         .payment-methods{
             margin:50px 0px 30px 0px
         }

         .payment-fast{
            margin:50px 0px 30px 0px;
             background-color:rgb(24,64,127,0.6);
             text-align: center;
             color:white;
             font-family:'Work Sans',sans-serif;
             /* font-weight: bold; */
         }

         .text-fast-payment p{
            text-align: left; 
            font-size: 16px; 
            font-family: 'Work Sans', sans-serif; 
            line-height: 1.6;
         }


         .title-payment-method{
            font-weight: bold;
           text-align: center; 
           font-family: 'Work Sans', sans-serif; 
           line-height: 1.4; 
           font-weight: 400; 
           color: black; 
           font-size: 28px;
            background-color: #fff;
         }

         .btn{
            padding: 5px 15px;
            display: inline-block;
            font-size: 10px;
         }
         .btn-pink{
            border-radius: 5px;
            background:rgb(230,26,125);
            color: #ffffff;
         }

         .text-method{
            text-align: left; padding-right:25px;
         }

         .method{
            border-bottom: 1px solid rgba(0,0,0,.05);
         }

         .text p{
            font-size: 16px; font-family: 'Work Sans', sans-serif;
         }

       
         .text-other-payment{

            text-align: left; 
            font-size: 16px; 
            font-family: 'Work Sans', sans-serif; 
            line-height: 1.6; 
            
            padding: 0px 25px 0px 25px; 
            
         }

         .text-other-payment a{
            color:rgb(95,33,103);
         }
        /* ************************ Fin código BODY ******************** */

       /* *********************** Código perteneciente al FOOTER *******************/

        .footer{
            background-color:#181818;
            color:white;
            padding: 30px 30px 30px 30px;
        }
        /* *********************** Fin código FOOTER ********************* */

    </style>
</head>
<body>
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="800" style="border-collapse:collapse;"> 
        <tr><!-- HEADER -->
            <td class="header">
                
                <h1 class="tittle-header">Bienvenido a</h1>
                <img class="img-header" src="{{asset('img/logo.png')}}" alt="Cable Color" >
            </td>
        </tr><!-- END HEADER -->
        <tr><!-- Body -->
            <td class="body">
                <!-- Informacion del Cliente -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                 
                    <tr>
                        <td>
                            <p style="text-align: left; font-size: 25px; font-family: 'Work Sans', sans-serif; line-height: 1.6; color: #0f0f0f;background-color: #fff;" >
                                &iexcl;Hola, %s!
                               </p>
                            <p style="text-align: left; font-size: 16px; font-family: 'Work Sans', sans-serif; line-height: 1.6; color: #0f0f0f; background-color: #fff;" >
                                &iexcl;Gracias por adquirir nuestros servicios! Aqu&iacute; adjuntamos la informaci&oacute;n de tu contrato:
                               </p>
                               <p style="text-align: left; font-size: 16px; font-family: 'Work Sans', sans-serif; line-height: 1.6; color: #8a8a8a; background-color: rgb(245, 239, 239);" >
                                Nombre del Cliente: %s <br>
                                N&uacute;mero de Contrato: %d <br>   
                                Ciudad: %s <br>
                               </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
        
                                <table  cellpadding="0" cellspacing="0" width="100%" style="text-align: left; font-size: 16px; font-family: 'Work Sans', sans-serif; line-height: 1.6; color: #8a8a8a; background-color: rgb(245, 239, 239);" >

                                    <tr>
                                        <th>Contrato Servicio</th>
                                        
                                        <th>Descripción del Servicio</th>
                                    
                                        <th>Precio</th>
                            
                                    </tr>
                                <tbody>
                                    <tr>
                                        <td>%d</td>
                                    
                                        <td>%s</td>
                                    
                                        <td>%f</td>
                                
                                    </tr>
                                </tbody>
                                </table>
                           
                        </td>
                    </tr>
                
                </table>
                <!-- Fin informacion del cliente -->
                <!-- Pago Rapido-->
                <table class="payment-fast" border="0" cellpadding="0" cellspacing="0" width="100%"> 
                    <tr >
                        <td valign="middle" width="50%">
                            
                            <table  border="0" cellpadding="0" cellspacing="0" width="100%">
 
                                <tr>
                                
                                
                               <td width="200" height="80" valign="top">
                                
                                <img src="{{asset('img/fast-payment.png')}}" alt="" style="width: 50%; max-width: 600px; height: auto; margin: auto; display: block;padding:10px 0px;">
                                
                               </td>
                                
                                </tr>
                                
                               </table>
                        </td>
                        <td valign="middle" width="50%" height="80">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                              <tr>
                                <td  style="text-align: left;">
                                    <div class="text-fast-payment">
                                    <p>Puedes realizar tus pagos dentro de los primeros 15 días de cada mes.</p>
                                    <p>Utiliza nuestra plataforma de Pago Rápido haz <a href="https://pagorapido.cablecolor.hn/" style="color:rgb(95,33,103)">Click Aquí</a></p>
                                    </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                    </tr>
                </table>
                 <!-- Find Pago Rapido-->

                  <!-- Formas de Pago -->
                <table class="payment-methods" border="0" cellpadding="0" cellspacing="0" width="100%"> 
                    <tr>
                        <td>
                            
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <h2 class="title-payment-method">
                                    Formas de pago
                                 </h2>
                                <tr>
                                
                               <td width="260" valign="top">
                                
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                      <td class="text-method">
                                                  <div class="method">
                                                      <div class="text">
                                                          <h3>BAC Online <a class="btn btn-pink" href="#">Ir al sitio</a></h3>
                                                          <p>Busca en la sección Pago de Servicios "Televisión por Cable"</p>
                                                      </div>
                                                  </div>
                                                  <div class="method">
                                                      <div class="text">
                                                          <h3>Atlantida <a class="btn btn-pink" href="#">Ir al sitio</a></h3>
                                                          <p>Puedes pagar en las sucursales bancarias o en la Agencia Virtual</p>
                                                      </div>
                                                  </div>
                                                  <div class="method">
                                                      <div class="text">
                                                          <h3>Puntos Tengo <a class="btn btn-pink" href="#">Click Aquí</a></h3>
                                                          <p>Conoce los diferentes Puntos Tengo en el país</p>
                                                      </div>
                                                  </div>
                                                  <div class="method">
                                                    <div class="text">
                                                        <h3>Agencias</h3>
                                                        <p>Visita cualquiera de nuestras agencias a Nivel Nacional</p>
                                                    </div>
                                                </div>
                                                <div class="method">
                                                    <div class="text">
                                                        <h3>Call Center </h3>
                                                        <p>Llámanos al 2262-0000 y un agente te atenderá

                                                        </p>
                                                    </div>
                                                </div>
                                      </td>
                                    </tr>
                                  </table>
                                
                               </td>
                             
                                
                               <td width="260" valign="top">
                                
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                      <td style="background-color: rgb(253,195,18,0.5);">
                                        <img src="{{asset('img/pay.png')}}" alt="" style="width: 100%; max-width: 600px; height: auto;
                                        margin: 120px 15px; display: block;padding:20px 5px;">
                                      </td>
                                    </tr>
                                  </table>
                                
                               </td>
                                
                                </tr>
                                
                               </table>
                        </td>
                    </tr>
                </table>
                 <!-- Find Formas de Pago -->

                  <!-- Otras Formas de Pago -->
                <table class="other-payment-methods" border="0" cellpadding="0" cellspacing="0" width="100%"  
                    <tr>
                        <td>
                            
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
 
                                <tr>
                                
                               <td width="260" valign="top" cass="text-other-payment" align="center">
                               El número total de usuarios registrado el día de hoy es: {{ $count }}
                                  Para conocer otros puntos de pago puedes dar <a href="https://cablecolor.hn/contactenos#agencias">Click Aquí</a>
                            
                                </tr>
                                
                               </table>
                        </td>
                    </tr>
                </table>
                 <!-- Find Otras Formas de Pago -->
            </td>
        </tr><!-- END Body -->
        <tr><!-- Footer -->
            <td class="footer" >
                
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
 
                    <tr>
                    
                        <td width="75%">
 
                            <span style="font-weight: bold; font-size: 20px;  color: #fff;" >
                                <img class="img-footer" src="{{asset('img/logo-white.png')}}" alt="Cable Color" >
                                <!-- <a href="https://cablecolor.hn/" style="color: #ffffff;"><font color="#ffffff">CABLE COLOR</font></a> -->
                             </span> <br>
                             <span style=" font-size: 17px; color: #fff; padding-bottom: 5px;" >
                                El internet m&aacute;s r&aacute;pido de Honduras
                             </span>
                            
                            
                            
                           </td>
                    
                           <td align="right">
 
                            <table border="0" cellpadding="0" cellspacing="0">
                            
                           <tr>
                            <td>
                            
                                <a target="_blank" href="https://www.facebook.com/CableColorHonduras">
                            
                              <img src="{{asset('img/facebook-color.png')}}" alt="Facebook"  style="display: block;" border="0" />
                            
                             </a>
                            
                            </td>
                            <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                        
                            <td>
                            
                                <a target="_blank" href="https://www.youtube.com/user/CableColorHonduras">
                               
                                 <img src="{{asset('img/youtube-color.png')}}" alt="Facebook"  style="display: block;" border="0" />
                               
                                </a>
                               
                               </td>
                               <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                    
                               <td>
                            
                                <a target="_blank" href="https://www.linkedin.com/company/cable-color-honduras">
                               
                                 <img src="{{asset('img/linkedin-color.png')}}" alt="Twitter"  style="display: block;" border="0" />
                               
                                </a>
                               
                               </td>

                               <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>

                               <td>
                            
                                <a target="_blank" href="https://www.instagram.com/cablecolorhonduras/">
                               
                                 <img src="{{asset('img/instagram-color.png')}}" alt="Facebook"  style="display: block;" border="0" />
                               
                                </a>
                               
                               </td>
                               <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                               <td>
                            
                                <a target="_blank" href="https://www.cablecolor.hn">
                               
                                 <img src="{{asset('img/www-color.png')}}" alt="Facebook"  style="display: block;" border="0" />
                               
                                </a>
                               
                               </td>
                           

                            
                           </tr>
                            
                            </table>
                            
                           </td>
                    
                    </tr>
                    
                   </table>
                 </td>
            </td>
        </tr><!-- END Footer -->
    </table>
</body>
</html>