<!-- menu.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- Lien vers votre fichier CSS -->
</head>
<body>
<div class="flex justify-center items-center">
    <img src="nt2a.png" width="10%" alt="alternate text">
</div>
<section>
  <div class="h-screen flex items-center justify-center p-10 pt-0">
    <div
      class="flex h-full flex-wrap items-center justify-center text-neutral-800">
      <div class="w-full">
        <div
          class="block rounded-lg bg-white shadow-[0_8px_30px_rgb(0,0,0,0.12)]">
          <div class="g-0 lg:flex lg:flex-wrap">
            <!-- Left column container-->
            <div class="px-4 md:px-0 lg:w-6/12">
              <div class="h-full flex items-center justify-center md:mx-6 md:p-12">

                <div class="grid md:grid-cols-1 gap-4 w-full md:w-auto">
                  <button onclick="location.href = 'profil.php'" class="bg-[#AFEEEE] hover:bg-blue-700 text-white font-bold w-full w-20 h-30 md:w-60 h-20 shadow">Profil</button>
                  <button onclick="location.href = '../html/QuestRap.html'" class="bg-[#AFEEEE] hover:bg-red-700 text-white font-bold w-full w-30 h-30 md:w-50 h-20 shadow">Questionnaire Rapide
                  </button>
                  <button onclick="location.href = '../html/QuestApp.html'" class="bg-[#AFEEEE] hover:bg-green-700 text-white font-bold w-full w-30 h-30 md:w-50 h-20 shadow">Questionnaire long</button>
                  <button onclick="location.href = 'deconnexion.php'" class="bg-[#AFEEEE] hover:bg-yellow-700 text-white font-bold w-full w-30 h-30 md:w-50 h-20 shadow">Se déconnecter</button>
              </div>
              </div>
            </div>

            <!-- Right column container with background and description-->
            <div
              class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-e-lg lg:rounded-bl-none">
              <div class="px-4 py-6 text-black md:mx-6 md:p-12">
                <h4 class="mb-6 text-xl font-semibold">
                  Votre bien-être, notre priorité
                </h4>
                <p class="text-sm text-black">
                Bienvenue sur notre site ! Nous croyons fermement au bien-être des étudiants et à son impact sur leur épanouissement. Saviez-vous qu'un simple test de bien-être peut faire une réelle différence dans la façon dont vous vous sentez au quotidien ?
                <br><br>
Notre test de bien-être spécialement conçu pour les étudiants vise à vous aider à prendre conscience de votre état mental, émotionnel et physique. En répondant à quelques questions simples, vous pourrez évaluer votre niveau de stress, votre qualité de sommeil, votre niveau d'anxiété et bien plus encore. Les résultats vous fourniront une vue d'ensemble de votre bien-être global et mettront en évidence les domaines dans lesquels vous pourriez avoir besoin de soutien supplémentaire.
<br><br>
En prenant le temps de faire ce test, vous vous donnez la possibilité de prendre soin de vous-même de manière proactive. En identifiant les aspects de votre vie qui pourraient être améliorés, vous serez en mesure de mettre en place des stratégies et des habitudes positives pour favoriser votre bien-être. N'oubliez pas que votre santé mentale et émotionnelle est aussi importante que vos études. Investir dans votre bien-être vous permettra de vous sentir mieux, plus équilibré et plus épanoui en tant qu'étudiant.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>