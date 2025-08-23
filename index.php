<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="anexos/icon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siga em Frente, Mulher!</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts (Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body class="text-gray-800">

    <?php include 'header.php'; ?>

    <main>

        <?php include 'mapa.php'; ?>

        <?php include 'empreendedorismo.php';?>

        <?php include 'biblioteca.php'; ?>

        <?php include 'produtos.php'; ?>

        <?php include 'comunidade.php'; ?>

        <?php include 'quiz.php'; ?>

        <?php include 'perguntas.php'; ?>

        <?php include 'contato.php'; ?>

    </main>

    <!-- Modals -->
    <div id="modal-quem-somos" class="modal">
        <div class="modal-content bg-white rounded-lg shadow-2xl">
            <span class="close-button absolute top-4 right-6 text-3xl text-gray-500 hover:text-gray-800 cursor-pointer">&times;</span>
            <h2 class="text-3xl font-bold text-brand-pink-dark mb-4">Quem Somos</h2>
            <p class="text-gray-700 leading-relaxed">
                O projeto "Siga em Frente, Mulher!“ nasceu no Instituto Federal do Maranhão, Campus Barra do Corda, e é uma iniciativa dedicada a apoiar mulheres que estão em condições de violência doméstica. Reconhecendo a gravidade e a complexidade da violência doméstica e de gênero, este projeto visa proporcionar suporte emocional e capacitações com base no empreendedorismo, para o empoderamento financeiro, a fim de que possam seguir em frente, com novas perspectivas de vida.
            </p>
        </div>
    </div>
    <div id="modal-violencia-fisica" class="modal">
        <div class="modal-content bg-white rounded-lg shadow-2xl">
            <span class="close-button absolute top-4 right-6 text-3xl text-gray-500 hover:text-gray-800 cursor-pointer">&times;</span>
            <h2 class="text-3xl font-bold text-brand-pink-light mb-4">Violência Física</h2>
            <p class="text-gray-700 leading-relaxed">Envolve o uso da força física contra a mulher, resultando em lesões corporais.</p>
        </div>
    </div>
    <div id="modal-violencia-psicologica" class="modal">
        <div class="modal-content bg-white rounded-lg shadow-2xl">
            <span class="close-button absolute top-4 right-6 text-3xl text-gray-500 hover:text-gray-800 cursor-pointer">&times;</span>
            <h2 class="text-3xl font-bold text-brand-pink-light mb-4">Violência Psicológica</h2>
            <p class="text-gray-700 leading-relaxed">Inclui comportamentos que causam danos emocionais e psicológicos, como ameaças, humilhação, isolamento, manipulação e controle excessivo.</p>
        </div>
    </div>
    <div id="modal-violencia-sexual" class="modal">
        <div class="modal-content bg-white rounded-lg shadow-2xl">
            <span class="close-button absolute top-4 right-6 text-3xl text-gray-500 hover:text-gray-800 cursor-pointer">&times;</span>
            <h2 class="text-3xl font-bold text-brand-pink-light mb-4">Violência Sexual</h2>
            <p class="text-gray-700 leading-relaxed">Refere-se a qualquer ato sexual forçado ou não consensual, incluindo estupro, assédio sexual e exploração sexual.</p>
        </div>
    </div>
    <div id="modal-violencia-patrimonial" class="modal">
        <div class="modal-content bg-white rounded-lg shadow-2xl">
            <span class="close-button absolute top-4 right-6 text-3xl text-gray-500 hover:text-gray-800 cursor-pointer">&times;</span>
            <h2 class="text-3xl font-bold text-brand-pink-light mb-4">Violência Patrimonial</h2>
            <p class="text-gray-700 leading-relaxed">Envolve a destruição ou retenção de bens, documentos pessoais, recursos econômicos e direitos patrimoniais da mulher.</p>
        </div>
    </div>
    <div id="modal-violencia-moral" class="modal">
        <div class="modal-content bg-white rounded-lg shadow-2xl">
            <span class="close-button absolute top-4 right-6 text-3xl text-gray-500 hover:text-gray-800 cursor-pointer">&times;</span>
            <h2 class="text-3xl font-bold text-brand-pink-light mb-4">Violência Moral</h2>
            <p class="text-gray-700 leading-relaxed">Consiste em calúnias, difamações e injúrias que visam desonrar ou denegrir a imagem da mulher.</p>
        </div>
    </div>
    <div id="modal-violencia-institucional" class="modal">
        <div class="modal-content bg-white rounded-lg shadow-2xl">
            <span class="close-button absolute top-4 right-6 text-3xl text-gray-500 hover:text-gray-800 cursor-pointer">&times;</span>
            <h2 class="text-3xl font-bold text-brand-pink-light mb-4">Violência Institucional</h2>
            <p class="text-gray-700 leading-relaxed">Ocorre quando instituições públicas ou privadas, como hospitais, delegacias e escolas, falham em prestar atendimento adequado às mulheres vítimas de violência, perpetuando a violência e a discriminação.</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>