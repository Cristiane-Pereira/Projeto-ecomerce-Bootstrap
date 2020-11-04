<?php //Ligaçao com o Banco de Dados WampSever para envio do pedido do formulario!!
$servername ="localhost";
$username = "root";
$password = "";
$database ="loja_virtual";

//criando a conexão
$conn = mysqli_connect($servername,$username,$password,$database);

//verificando conexão
if(!$conn){
    die("A conexão ao BD falhou:" . mysqli_connect_error());
  }

  if(isset($_POST['email'])){
     $email = $_POST['email'];

     $sql = "INSERT INTO envio_cadastro (email) values ('$email')";
     $result = $conn->query($sql);

     echo "<script>
     alert('Cadastro Promocional enviado com Sucesso!')
     window.location.href ='index.php'
     </script>
     ";
   }
  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website-Bootstrap</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <!-- Header -->
    <header class="l-header">
    <div class="container-fluid">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav_logo"><strong>MOB MODAS</strong></a>
            </div>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item"><a href="#home" class="nav_link active">Home</a></li>
                    <li class="nav_item"><a href="#featured" class="nav_link">Featured</a></li>
                    <li class="nav_item"><a href="#new" class="nav_link">New</a></li>
                    <li class="nav_item"><a href="#suscribed" class="nav_link">Subscribed</a></li>
                </ul>

            </div>

             <div>
                <i class='bx bx-cart nav_cart'></i>
                <i class='bx bx-menu nav_toggle' id="nav_toggle"></i>
             </div>

        </nav>
     </header>
                           <!-- home -->

     <main class="l-main">
         <section class="home" id="home">
             <div class="home_container bd-grid">
            <div class="home_data">
                <h1 class="home_title">NEW <br><span>ARRIVALS</span></h1>
                <a href="#featured" class="button">GO SHOPPING</a>
            </div>
            <img src="./img/home.png" alt="" class="home_img">
             </div>
         </section>

                         <!-- coleçao -->

        <section class="collection section">
            <div class="collection_container bd-grid">
               <div class="collection_box">
                   <img src="./img/backpackMan.png" alt="" class="collection_img">

                 <div class="collection_data">
                   <h2 class="collection_title"><span class="collection_subtitle">Men</span><br>backpackMan</h2>
                    <a href="#" class="collection_view">View collection</a>
                 </div>
               </div>
               <div class="collection_box">
                  
                 <div class="collection_data">
                   <h2 class="collection_title"><span class="collection_subtitle">Women</span><br>backpackMan</h2>
                    <a href="#" class="collection_view">View collection</a>
                 </div>
                 <img src="./img/backpackWoman.png" alt="" class="collection_img">
               </div>
            </div>
        </section>
                    <!-- Featured products -->

            <section class="featured section" id="featured">
                <h2 class="section-title">FEATURED PRODUCTS</h2>
                <a href="#" class="section-all">View All</a>

                <div class="featured_container bd-grid">
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/feature1.png" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Headphone One Black</h3>
                              <span class="featured_preci">R$29,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/feature2.png" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Speaker Beats Pill</h3>
                              <span class="featured_preci">R$199,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/feature3.png" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Aple air Pods</h3>
                              <span class="featured_preci">R$112,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/feature4.png" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Smartwatch F9 Negro</h3>
                              <span class="featured_preci">R$756,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/produto-2b-570x708.jpg" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Vestido Crepp</h3>
                              <span class="featured_preci">R$86,90</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/produto-1a-570x708.jpg" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Vestido Manga Longa Floral</h3>
                              <span class="featured_preci">R$75,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/shutterstock_116081557_2-570x708.jpg" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Vestido social c/cinto</h3>
                              <span class="featured_preci">R$99,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/shutterstock_94577944_2-570x708.jpg" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Vestido Básico</h3>
                              <span class="featured_preci">R$56,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/shutterstock_342042911_2-570x708.jpg" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Vestido Rap</h3>
                              <span class="featured_preci">R$64,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/produto-4a-570x708.jpg" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Bolsa de Couro Original</h3>
                              <span class="featured_preci">R$156,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/vestido-cor-de-rosa-com-corações.jpg" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Vestido rosa com Coração</h3>
                              <span class="featured_preci">R$120,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/shutterstock_327014729_2-570x708.jpg" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Vestido Moda Inverno</h3>
                              <span class="featured_preci">R$112,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/20.png" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Saia Blogueirinha</h3>
                              <span class="featured_preci">R$86,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/girls_PNG6477.png" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Vestido Fashion</h3>
                              <span class="featured_preci">R$88,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/girls_PNG6476.png" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Vestido Curto Azul</h3>
                              <span class="featured_preci">R$56,00</span>
                          </div>
                    </div>
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NEW</div>
                            <img src="./img/girls_PNG6485.png" alt="" class="featured_img">
                        </div>
                          <div class="featured_data">
                              <h3 class="featured_name">Saia Curta Preta</h3>
                              <span class="featured_preci">R$46,00</span>
                          </div>
                    </div>
                </div>
            </section>
                              <!-- Offer -->

               <section class="offer section">
                   <div class="offer_bg">
                       <div class="offer_data">
                           <h2 class="offer_title">Oferta Especial</h2>
                           <p class="offer_description">Special Offerts discounts for women this week only</p>

                           <a href="#" class="button">SHOP NOW</a>
                       </div>
                   </div>
               </section>
                       <!-- New ARRIVALS -->

            <section class="new section" id="new">
                <h2 class="section-title">NEW ARRIVALS</h2>
                <a href="#" class="section-all">View All</a>
                <div class="new_container bd-grid">
                   <div class="new_box">
                       <img src="./img/new1.png" alt="" class="new_img">
                       <div class="new_link">
                           <a href="#" class="button">VIEW PRODUCT</a>
                       </div>
                   </div>
                   <div class="new_box">
                       <img src="./img/new2.png" alt="" class="new_img">
                       <div class="new_link">
                           <a href="#" class="button">VIEW PRODUCT</a>
                       </div>
                   </div>
                   <div class="new_box">
                       <img src="./img/new3.png" alt="" class="new_img">
                       <div class="new_link">
                           <a href="#" class="button">VIEW PRODUCT</a>
                       </div>
                   </div>
                   <div class="new_box">
                       <img src="./img/new4.png" alt="" class="new_img">
                       <div class="new_link">
                           <a href="#" class="button">VIEW PRODUCT</a>
                       </div>
                   </div>
                   <div class="new_box">
                       <img src="./img/new5.png" alt="" class="new_img">
                       <div class="new_link">
                           <a href="#" class="button">VIEW PRODUCT</a>
                       </div>
                   </div>
                   <div class="new_box">
                       <img src="./img/new6.png" alt="" class="new_img">
                       <div class="new_link">
                           <a href="#" class="button">VIEW PRODUCT</a>
                       </div>
                   </div>
                </div>
            </section>
                               <!-- Newsletter -->
                            

            <section class="newsletter section" id="suscribed">
                <div class="newsletter_container bd-grid">
                    <div class="newsletter_suscribe">
                        <h2 class="section-title">OUR NEWSLETTER</h2>
                        <p class="newsletter_description">Promotion  new products and sales. Directy to your</p>
                        <form method ="Post" action="" class="newsletter_form">
                        <input type="email" name="email" class="newsletter_input" placeholder="Enter your email">
                        <button type="Submit" class="button">SUSCRIBE</button>
                    </form>
                 </div>
             </div>
        </section>

                                <!-- Sponsors -->

        <section class="sponsors section">
          <div class="sponsors_container bd-grid">
             <div class="sponsors_logo">
                 <img src="./img/logo1.png" alt="">
             </div>

             <div class="sponsors_logo">
                 <img src="./img/logo2.png" alt="">
             </div>

             <div class="sponsors_logo">
                 <img src="./img/logo3.png" alt="">
             </div>

             <div class="sponsors_logo">
                 <img src="./img/logo4.png" alt="">
             </div>
          </div>
        </section>
      </main>       
   
                         <!-- Footer -->

      <footer class="footer section">
        <div class="footer_container bd-grid">
            <div class="footer_box">
                <h3 class="footer_title">MOB MODAS</h3>
                <p class="footer_deal">Products store</p>
                <a href="#"><img src="./img/footerstore1.png" alt="" class="footer-store"></a>
                <a href="https://play.google.com/store/apps?hl=pt_BR&gl=US"><img src="./img/footerstore2.png" alt="" class="footer-store"></a>
           </div>
           <div class="footer_box">
               <h3 class="footer_title">EXPLORE</h3>
               <ul>
                   <li><a href="#" class="footer_link">Home</a></li>
                   <li><a href="#" class="footer_link">Featured</a></li>
                   <li><a href="#" class="footer_link">New</a></li>
                   <li><a href="#" class="footer_link">suscribed</a></li>
               </ul>
           </div>
           <div class="footer_box">
               <h3 class="footer_title">OUR SERVICES</h3>
               <ul>
                   <li><a href="#" class="footer_link">Pricing</a></li>
                   <li><a href="#" class="footer_link">Free Shipping</a></li>
                   <li><a href="#" class="footer_link">Git Cards</a></li>
               </ul>
           </div>
           <div class="footer_box">
               <h3 class="footer_title">FOLLOW</h3>
              <a href="#" class="footer-social"><i class='bx bxl-facebook-square'></i></a>
              <a href="#" class="footer-social"><i class='bx bxl-instagram-alt'></i></a>
              <a href="#" class="footer-social"><i class='bx bxl-twitter'></i></a>
           </div>
        </div>
        <p class="footer_copy">&#169; 2020 copyright Cristiane Pereira da Silva</p>
      </footer>

    </div>
    <script src="./main.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
</body>
</html>