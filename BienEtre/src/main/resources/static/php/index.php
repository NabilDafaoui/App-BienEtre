<?php
session_start();
if (isset($_SESSION["erreurConnexion"])) {
    echo '<p style="color: red;">' . $_SESSION["erreurConnexion"] . '</p>';
    unset($_SESSION["erreurConnexion"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/stylesIndex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Connexion</title>
</head>
<body>
<?php
if (isset($_SESSION["connexionReussie"]) && $_SESSION["connexionReussie"]) {
    include 'menu.php';
}
else{
?>
<!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
    <section class="bg-gray-50 font-family: Montserrat">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
          NT3a
      </a>
      <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 bg-[#AFEEEE]">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8 bg-[#AFEEEE]">
              <h1 class="text-xl font-semibold leading-tight tracking-tight text-gray-900 md:text-2xl">Connexion</h1>
              <form class="space-y-4 md:space-y-6 bg-white" method="POST" action="connexion.php">
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Identifiant</label>
                      <input type="text" name="username_login" id="username_login" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="nt3a@umontpellier.fr" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Mot de passe</label>
                      <input type="password" name="password_login" id="password_login" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="souvenir" aria-describedby="souvenir" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required="">
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="souvenir" class="text-gray-500">Se souvenir de moi</label>
                          </div>
                      </div>
                      <a href="#" class="text-sm font-medium text-primary-600 hover:underline">Mot de passe oublié ?</a>
                  </div>
                  <button type="submit" class="w-full text-white bg-green-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
                  <p class="text-sm font-light text-gray-500">
                      Vous n'avez pas de compte ?<a href="../html/inscription.html" class="font-medium text-primary-600 hover:underline">Inscrivez-vous</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>

<?php
}?>

</body>
</html>
