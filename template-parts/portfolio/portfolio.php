<?php get_header(); ?>
<main class="wrap dark:bg-dc_black bg-white dark:text-dc_white pb-8">
    <div class='head container mx-auto flex flex-col md:flex-row items-center justify-between py-8 gap-7 max-w-3xl'>
        <div class='mb-2'>
            <h1 class='text-4xl semibold'>Cristian Leguizamón</h1>
            <small>Soy desarrollador full stack con amplia experiencia en WordPress</small>
            <p class='mt-2.5 font-light text-dc_gray mb-2'>
                Quise mostrar lo que sé  hacer de una manera muy sencilla. Así que creé este theme de WordPress desde cero con la librería de Tailwind.
            </p>
            <div class='flex flex-row gap-3'>
                <a class='rounded-md p-1.5 bg-dc_black_2 hover:bg-dc_green_hover' href="https://www.linkedin.com/in/cristian-leguizam%C3%B3n-783544145/" target="_blank">
                    <img width='18' src="<?php echo TH_DV_ASSETS_URL . 'img/linkedin.svg' ?>" alt="Linkedin">
                </a>
                <a class='rounded-md p-1.5 bg-dc_black_2 hover:bg-dc_green_hover' href="https://github.com/devleguizamon" target="_blank">
                    <img  width='18' src="<?php echo TH_DV_ASSETS_URL . 'img/github.svg' ?>" alt="Github">
                </a>
                <a class='rounded-md p-1.5 bg-dc_black_2 hover:bg-dc_green_hover' href="mailto:cristian21legui@gmail.com" target="_blank">
                    <img  width='18' src="<?php echo TH_DV_ASSETS_URL . 'img/mail-send.svg' ?>" alt="Mail">
                </a>
            </div>
        </div>
        <div class='min-w-36 '>
            <img class='w-auto rounded-full' src="<?php echo TH_DV_ASSETS_URL . 'img/cristian-photo.jpg' ?>" alt="cristian perfil">
        </div>
    </div>
    <div class='experience container mx-auto py-8 px-0 max-w-3xl'>
        <div class="owl-carousel owl-theme owl-portfolio">
            <div class="item box-job rounded-lg p-4">
                <small class='text-dc_gray mt-1.5'>08/2022 - Ahora</small>
                <h3 class='font-semibold text-2xl'>Pluranza</h3>
                <small class='font-medium'>Co - Founder | Desarrollador</small>
                <p class='text-dc_gray mt-2.5'>Mi propia empresa. Una experiencia inigualable que no se cuenta en 2 líneas</p>
            </div>
            <div class="item box-job rounded-lg p-4">
                <small class='text-dc_gray mt-1.5'>02/2022 - 04/2023</small>
                <h3 class='font-semibold text-2xl'>Creditop</h3>
                <small class='font-medium'>Creditop</small>
                <p class='text-dc_gray mt-2.5'>Mi propia empresa. Una experiencia inigualable que no se cuenta en 2 líneas</p>
            </div>
            <div class="item box-job rounded-lg p-4">
                <small class='text-dc_gray mt-1.5'>02/2019 - 02/2022</small>
                <h3 class='font-semibold text-2xl'>Eukast</h3>
                <small class='font-medium'>Desarrollador WordPress</small>
                <p class='text-dc_gray mt-2.5'>Mi propia empresa. Una experiencia inigualable que no se cuenta en 2 líneas</p>
            </div>
            <div class="item box-job rounded-lg p-4">
                <small class='text-dc_gray mt-1.5'>2019 - 02/2022</small>
                <h3 class='font-semibold text-2xl'>Workana</h3>
                <small class='font-medium'>Diseñador | Desarrollador</small>
                <p class='text-dc_gray mt-2.5'>Mi propia empresa. Una experiencia inigualable que no se cuenta en 2 líneas</p>
            </div>
            <div class="item box-job rounded-lg p-4">
                <small class='text-dc_gray mt-1.5'>2017 - 2022</small>
                <h3 class='font-semibold text-2xl'>Independiente</h3>
                <small class='font-medium'>Diseñador | Desarrollador</small>
                <p class='text-dc_gray mt-2.5'>Mi propia empresa. Una experiencia inigualable que no se cuenta en 2 líneas</p>
            </div>
            
        </div>
    </div>
    <div class='habilities container mx-auto py-8 gap-7 max-w-3xl bg-dc_black_1 rounded-lg'>
        <h2 class='text-3xl font-semibold'>Habilidades</h2>
        <p class='mt-2.5 mb-5 font-light'>
            Durante mi experiencia me he dado cuenta que no es necesario saberselas todas, todos los días se aprende cuándo hay retos desafiantes y un equipo que te motiva.
        </p>
        <div class='container flex flex-col gap-7 md:flex-row items-center justify-between p-0 mb-7'>
            <div class='bg-dc_black_2 p-4 w-full md:w-3/5 rounded-lg shadow'>
                <h3 class='flex items-center gap-2 mb-2.5 text-lg font-semibold'><img width='30' src="<?php echo TH_DV_ASSETS_URL . 'img/code.svg' ?>" alt="codigo"/> Desarrollo</h3>
                <ul class='list-disc list-inside text-dc_gray'>
                    <li>HTML | CSS | JS | PHP | Python | API Rest</li>
                    <li>Bases de datos: MySQL | PostgreSQL</li>
                    <li>Frameworks: Bootstrap | Tailwind | FastAPI</li>
                    <li>No-code | Low-code: Elementor | Oxygen | Divi</li>
                </ul>
            </div>
            <div class='bg-dc_black_2 p-4 w-full md:w-2/5 rounded-lg shadow'>
                <h3 class='flex items-center gap-2 mb-2.5 text-lg font-semibold'><img width='30' src="<?php echo TH_DV_ASSETS_URL . 'img/velocidad.svg' ?>" alt="velocidad"/> ADS | SEO</h3>
                <ul class='list-disc list-inside text-dc_gray'>
                    <li>Meta ADS | Pixel de Meta</li>
                    <li>Pixel de Tiktok</li>
                    <li>Gtag Manager</li>
                    <li>Google Cloud</li>
                </ul>
            </div>
        </div>
        <div class='container flex flex-col gap-7 md:flex-row items-center justify-between p-0'>
            <div class='bg-dc_black_2 p-4 w-full md:w-1/3 rounded-lg shadow'>
                <h3 class='flex items-center gap-2 mb-2.5 text-lg font-semibold'><img width='30' src="<?php echo TH_DV_ASSETS_URL . 'img/sol.svg' ?>" alt="sol"/>
                    Diseño
                </h3>
                <ul class='list-disc list-inside text-dc_gray'>
                    <li>Adobe Photoshop</li>
                    <li>Adobe Illustrator</li>
                    <li>Figma</li>
                </ul>
            </div>
            <div class='bg-dc_black_2 p-4 w-full md:w-2/3 rounded-lg shadow'>
                <h3 class='flex items-center gap-2 mb-2.5 text-lg font-semibold'><img width='30' src="<?php echo TH_DV_ASSETS_URL . 'img/wordpress.svg' ?>" alt="wordpress"/>WordPress</h3>
                <ul class='list-disc list-inside text-dc_gray'>
                    <li>Creación de plugins | Creación de themes</li>
                    <li>Core WordPress | Seguridad | Optimización PageSpeed</li>
                    <li>Amplia experiencia en sistemas E-learning y E-commerce</li>
                </ul>
            </div>
        </div>
        
    </div>
</main>
<?php get_footer(); ?>