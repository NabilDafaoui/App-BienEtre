<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../styles/profile_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/chart_generator.js"></script>
    <script src="../js/progression_graphe.js"></script>
    <style>
    .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
  </style>
</head>
<body>

<?php

require("loginBD.php");

// Utilisez l'identifiant stocké dans la session
$identifiant = $_SESSION["identifiant"];

try {
    // Récupérez les notes spécifiques depuis la table bienetreuser
    $sql = "SELECT social, financier, santé, professionnel, identifiant, pdp FROM bienetreuser WHERE identifiant = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$identifiant]);

    // Vérifiez si des résultats sont retournés
    if ($stmt->rowCount() > 0) {
        // Récupérez les résultats
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $social = $row['social'];
        $financier = $row['financier'];
        $santé = $row['santé'];
        $professionnel = $row['professionnel'];
        $identifiant = $row['identifiant'];
        $pdp= $row['pdp'];

        // Retournez les résultats au format JSON
        $result = [
            'social' => $social,
            'financier' => $financier,
            'santé' => $santé,
            'professionnel' => $professionnel,
            'identifiant' => $identifiant,
            'pdp' => $pdp
        ];
    } else {
        echo json_encode(['error' => 'Aucune donnée trouvée pour cet utilisateur']);
    }
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
// Fermez la connexion
$dbh = null;
?>

<div class="grid grid-cols-5 gap-4">
  <div>
<section style="font-family: Montserrat" class="bg-[#ffffff] flex font-medium items-left justify-left min-h-screen" onclick="closeForm()">

    <section id="profile" class="profile w-full max-[820px]:w-1/4 max-[620px]:w-full mx-auto bg-[#AFEEEE] px-8 py-6 shadow-lg">
        <div class="flex items-center justify-between">
            <span class="text-gray-400 text-sm">2d ago</span>
            <div class="modal-open" onclick="openForm()">
            <button class="" onclick="openForm()">
            <span class="text-emerald-400"  onclick="openForm()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"  onclick="openForm()">
                <path  onclick="openForm()" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
            </svg>
            </span>
            </button>
            </div>
        </div>
        <div class="mt-4 ">
            <h2 class="text-white font-bold text-xl tracking-wide"> <?php echo $identifiant; ?></h2>
        </div>
        <div class="mt-6 w-fit mx-auto">
            <img src=<?php echo $pdp ; ?> id="image_profile" class="rounded-full w-28 " alt="profile picture"  srcset="">
        </div>
        <div class="mt-6 w-fit mx-auto" >
            <button class="modal-open affiche_radar font-semibold text-s text-white">Votre bilan</button>
        </div>
        <p class="text-emerald-400 font-semibold mt-2.5" >
        Épanoui
        </p>

        <div class="h-1 w-full bg-white mt-8 rounded-full">
            <div class="h-1 rounded-full bg-blue-900" style="width: <?php echo ($social/5)*100 ; ?>%;"></div>
        </div>
        <div class="mt-3 text-white text-xs invisible min-[820px]:visible">
            <span class="text-gray-400 font-semibold">Social :</span>
            <span><?php echo ($social/5)*100; ?>%</span>
        </div>
        <div class="h-1 w-full bg-white mt-8 rounded-full">
            <div class="h-1 rounded-full bg-blue-900" style="width: <?php echo ($financier/5)*100; ?>%;"></div>
        </div>
        <div class="mt-3 text-white text-xs invisible min-[820px]:visible">
            <span class="text-gray-400 font-semibold">Financier :</span>
            <span><?php echo ($financier/5)*100; ?>%</span>
        </div>
        <div class="h-1 w-full bg-white mt-8 rounded-full">
            <div class="h-1 rounded-full bg-blue-900" style="width: <?php echo ($santé/5)*100; ?>%;"></div>
        </div>
        <div class="mt-3 text-white text-xs flex invisible min-[820px]:visible">
            <span class="text-gray-400 font-semibold">Santé/Physique :</span>
            <span><?php echo ($santé/5)*100; ?>%</span>
        </div>
        <div class="h-1 w-full bg-white mt-8 rounded-full">
            <div class="h-1 rounded-full bg-blue-900" style="width: <?php echo ($professionnel/5)*100; ?>%;"></div>
        </div>
        <div class="mt-3 text-white text-xs flex invisible min-[820px]:visible">
            <span class="text-gray-400 font-semibold">Professionnel :</span>
            <span><?php echo ($professionnel/5)*100; ?>%</span>
        </div>
        <div class="home"><a href="index.php"><img src="jul.png" class="h-auto object-contain max-w-1/4" srcset=""></a></div>
    </section>
</section>
</div>

<div class="w-full w-1/2 bg-[#ffffff] col-span-4 md:col-span-2">
  <div class="grid grid-rows-2 grid-flow-row auto-rows-max gap-4 h-full">
    <div class="h-full h-1/2"><canvas class="w-full" id="sante_progression"></canvas></div>
    <div class="h-full h-1/2"><canvas class="w-full" id="pro_progression"></div>
  </div>
</div>
<div class="w-full w-1/2 bg-[#ffffff] col-span-4 md:col-span-2">
  <div class="grid grid-rows-2 grid-flow-row auto-rows-max gap-4 h-full">
    <div class="h-full h-1/2"><canvas class="w-full" id="social_progression"></div>
    <div class="h-full h-1/2"><canvas class="w-full" id="financier_progression"></div>
  </div>
</div>
</div>



</div>

<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
      
      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
      </div>

      <div class="modal-content py-4 text-center px-6">
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-semibold text-center">Bilan de santé global</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <canvas id="radarChart"></canvas>

        <!--Footer-->
        <div class="flex justify-end pt-2">
          <button class="modal-close px-4 bg-[#AFEEEE] p-3 text-white hover:bg-blue-900">Fermer</button>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal-parametres opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
      
      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
      </div>

      <div class="modal-content py-4 text-center px-6">
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-semibold text-center">Bilan de santé global</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <canvas id="radarChart"></canvas>

        <!--Footer-->
        <div class="flex justify-end pt-2">
          <button class="modal-close px-4 bg-[#AFEEEE] p-3 text-white hover:bg-blue-900">Fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
   
  </script>
</body>
</html>