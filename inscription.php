<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Speedelivery</title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
 
  <link href="assets/css/style.css" rel="stylesheet" />

  <link href="assets/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="info-section">
    <div class="footer_bg">

        <!-- contact section -->
        <section class="contact_section layout_padding" id="contactLink">
          <div class="container">
            <div class="heading_container">
              <h2>
                Se connecter
              </h2>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-8 mx-auto">
                <form action="traitement/inscription.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="nom" required placeholder="nom">
                    <input type="text" name="prenom" required placeholder="prenom">
                   
                    <select name="ville">
                    <script language="javascript">
                        var states = new Array("Agadir", "Al Hoceima", "Azilal", "Beni Mellal", "Ben Slimane", "Boulemane", "Casablanca", "Chaouen", "El Jadida", "El Kelaa des Sraghna", "Er Rachidia", "Essaouira", "Fes", "Figuig", "Guelmim", "Ifrane", "Kenitra", "Khemisset", "Khenifra", "Khouribga", "Laayoune", "Larache", "Marrakech", "Meknes", "Nador", "Ouarzazate", "Oujda", "Rabat-Sale", "Safi", "Settat", "Sidi Kacem", "Tangier", "Tan-Tan", "Taounate", "Taroudannt", "Tata", "Taza", "Tetouan", "Tiznit");
                        for(var hi=0; hi<states.length; hi++)
                        document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
                    </script>
                  </select>
                  <input type="text" name="username" required placeholder="username">
                  <input type="email" name="email" required placeholder="email">
                  <input type="phone" name="phone" required vplaceholder="numero de telephone">
                  <input type="password" name="password" required placeholder="password">
                  <input type="password" name="Cpassword" required placeholder="confirm password">
                  <input class="" type="file" name="photo" />
                  <input type="radio" name="role" value="1">
                  <label for="valeur_1">inscrire  en tant que chauffeur </label>
                  <input type="radio" name="role" value="2">
                  <label for="valeur_2">inscrire en tant que client</label>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                    <input type="submit" name="Valider" class="e" placeholder="s'inscrire" required> 
                </div>




    
            <!--      <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control"  name="nom" id="inputName4" placeholder="nom"  required>
                    </div>
                    
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                    $sql="insert into utilisateur,Phone,image,role) values('".$user_id."', '".$nom."','".$prenom."''".$password."','".$image."','2')";
    $req="insert into client (User_id,disponible) values('".$userid."','0')";
   
                      <input type="prenom" class="form-control" id="inputSubject4"  name="password" placeholder="password"  required>
                    </div>
                  </div><div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="password" class="form-control" id="inputSubject4"  name="password" placeholder="password"  required>
                    </div>
                  </div><div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="password" class="form-control" id="inputSubject4"  name="password" placeholder="password"  required>
                    </div>
                  </div><div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="password" class="form-control" id="inputSubject4"  name="password" placeholder="password"  required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="password" class="form-control" id="inputSubject4"  name="password" placeholder="password"  required>
                    </div>
                  </div>
                 
                  <div class="form-row">
                    <div class="form-group col-md-6">
                    <input type="submit" name="Valider" class="e" value="s'inscrire" required> 
                </div>
                <div class="d-flex justify-content-center">
                    <a href="log.php">se connecter</a>
                </div>
            </div>
-->
                </form>
              </div>
            </div>
          </div>
        </section>
    </div>    
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>
