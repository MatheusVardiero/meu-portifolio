<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="./dist/output.css" rel="stylesheet">
  <link href="./src/css/main.css" rel="stylesheet">
</head>

<?php
$habilidades = [
  'HTML',
  'SCSS',
  'TailwindCSS',
  'Bootstrap',
  'Javascript',
  'Typescript',
  'PHP',
  'Laravel',
  'Wordpress',
  'Next.js',
  'MySQL',
  'Git/Github'
];

$projetos = [
  [
    'nome' => 'Projeto1',
    'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
    'linguagens' => ['PHP', 'Javascript', 'TailwindCSS'],
    'imagem' => './src/images/dark_wallpaper.jpg'
  ],
  [
    'nome' => 'Projeto 2',
    'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
    'linguagens' => ['PHP', 'Laravel', 'Javascript', 'TailwindCSS'],
    'imagem' => './src/images/dark_wallpaper.jpg'
  ]
];

$redes_sociais = [
  [
    'nome' => 'Linkedin',
    'icone' => './src/images/linkedinLogo.png',
    'link' => 'https://www.linkedin.com/in/matheus-vardiero/'
  ],
  [
    'nome' => 'Instagram',
    'icone' => './src/images/InstagramLogo.png',
    'link' => 'https://www.instagram.com/matheusvardiero_/'
  ],
  [
    'nome' => 'Github',
    'icone' => './src/images/GithubLogo.png',
    'link' => 'https://github.com/MatheusVardiero'
  ],
  [
    'nome' => 'E-mail',
    'icone' => './src/images/EnvelopeSimple.png',
    'link' => 'matheusvardiero13@gmail.com'
  ],
]

?>

<body class="container bg-secondary">
  <section class="perfil flex justify-center flex-col items-center px-4 lg:px-64 gap-6 mt-20">
    <img class="w-24 h-24 rounded-[100%] mb-6 border-primary border-2" src="./src/images/1649101697664.jpeg" alt="Foto Perfil">
    <h1 class="text-[#E2E4E9] text-center text-[18px] md:text-[20px]">Olá! meu nome é <span class="text-primary">Matheus Vardiero</span>, e sou <br /> <span class="text-[28px] md:text-[56px] font-bold"> Desenvolvedor Web </span></h1>
    <p class="text-center text-[#878EA1]">
      Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
    </p>
    <div class="flex items-center justify-center gap-5 flex-wrap px-4 md:px-10 mt-10 lg:mt-20">
      <?php foreach ($habilidades as $item) : ?>
        <div class="px-3 py-1 bg-primary rounded-2xl text-[#16181D]"><?= $item; ?></div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="projetos mt-20 px-4 xl:px-0">
    <h2 class="text-center text-[28px] text-[#E2E4E9] font-bold">Meus projetos</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
      <?php
      foreach ($projetos as $projeto):
      ?>
        <div class="grid grid-cols-1 lg:grid-cols-2 bg-[#292C34] p-3 rounded-xl gap-5 drop-shadow-lg">
          <div>
            <img class="max-w-full w-full h-full rounded-lg" src="<?php echo $projeto['imagem']; ?>" alt="">
          </div>
          <div class="text-[#E2E4E9]">
            <h3 class="font-bold"><?php echo $projeto['nome']; ?></h3>
            <p class="leading-[140%] mt-5 mb-10 text-[#878ea1]">
              <?php echo $projeto['descricao']; ?>
            </p>
            <div class="flex items-center flex-wrap gap-x-2 gap-y-3">
              <?php foreach ($projeto['linguagens'] as $linguagem): ?>
                <div class="px-3 py-1 bg-primary rounded-2xl text-[#16181D] text-[14px]"><?= $linguagem; ?></div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="contato my-20 px-4 xl:px-0">
    <h2 class="text-center text-[28px] text-[#E2E4E9] font-bold mb-10">Contato</h2>
    <div class="flex items-center justify-center flex-col gap-5">
      <?php foreach ($redes_sociais as $r_social) : ?>
        <a href="<?php echo $r_social['link']; ?>" target="_blank" class="bg-[#292C34] p-5 rounded-lg flex items-center justify-between max-w-[400px] w-full drop-shadow-lg">
          <div class="flex items-center gap-2">
            <img src="<?php echo $r_social['icone']; ?>" alt="<?php echo $r_social['nome']; ?>">
            <h2 class="text-[#C0C4CE]"> <?= $r_social['nome']; ?> </h2>
          </div>
          <img src="./src/images/ArrowUpRight.png" alt="">
        </a>
      <?php endforeach; ?>
    </div>
  </section>

</body>

</html>