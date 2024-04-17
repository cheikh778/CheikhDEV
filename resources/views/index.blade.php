
@extends('layouts.app')

 @section('content')

    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large">I love to create beautiful and efficient websites</h1>
                        <a class="btn-solid-lg page-scroll" href="#about">Mon Profil</a>
                        <a class="btn-outline-lg page-scroll" href="#contact"><i class="fas fa-user"></i>Contactez-moi</a>
                        <a class="btn-solid-lg page-scroll" style="width:310px text-align:center;" href="{{asset('storage/cv/cvCheikh.pdf')}}"><i class="fas fa-download"></i> Télécharger mon CV</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- About-->
    <div id="about" class="basic-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container first">
                        <hr>
                        <h2 style="text-align: center;">Salut, Je suis Serigne Cheikh NDAO</h2>
                        <hr>
                        <p style="display:inline">Jeune développeur passionné par l'art du code, je m'engage à créer des
                            solutions informatiques innovantes et efficaces. Avec une solide base en
                            programmation et un désir constant d'apprendre, je cherche à contribuer au
                            monde numérique en apportant créativité, résolution de problèmes et
                            engagement à chaque projet. Ma motivation découle de la volonté de
                            transformer des idées en réalité, tout en restant ouvert aux défis qui nourrissent
                            ma croissance professionnelle. Curieux et déterminé, je suis prêt à explorer de
                            nouvelles technologies et à collaborer pour façonner le futur du
                            développement logiciel.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container second">
                        <div class="time">2024 - PRESENT</div>
                        <h6>Developpeur Web Freelance</h6>
                        <p>Travail en Solo sur mes propres projets</p>
                        <div class="time">2022 - 2024</div>
                        <h6>Developpeur Back-end</h6>
                        <p>Technicien Supérieur en Développement Back-end</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container third">
                        <div class="time">Juin - 2023</div>
                        <h6>Marketing Digital</h6>
                        <p>Programme FORCE-N</p>
                        <div class="time">2014 - 2017</div>
                        <h6>Commerce Digital</h6>
                        <p>Programme FORCE-N</p>
                    </div> <!-- end of text-container -->
                </div>
                <div class="col-lg-6">
                    <div class="text-container fourth">
                        <div class="time">2018 - 2021</div>
                        <h6>Baccalauréat</h6>
                        <p>Baccalauréat de l'Ensignement du Second Degré</p>
                        {{-- <div class="time">2014 - 2017</div>
                        <h6>BFEM</h6>
                        <p>Brevet de Fin d'Études Moyenne</p> --}}
                    </div> <!-- end of text-container -->
                </div>
                <div class="col-lg-6">
                    <div class="text-container five">
                        {{-- <div class="time">2018 - 2021</div>
                        <h6>Baccalauréat</h6>
                        <p>Baccalauréat de l'Ensignement du Second Degré</p> --}}
                        <div class="time">2014 - 2017</div>
                        <h6>BFEM</h6>
                        <p>Brevet de Fin d'Études Moyenne</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of about -->


    <!-- Services -->
    <div id="services" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Services Offerts</h2>
                    <p class="p-heading">Depuis un an, la conception et le développement web sont devenus mon domaine d'expertise principal. Au cours de cette période, j'ai identifié ma capacité à offrir les services suivants aux startups et aux entreprises.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="far fa-gem"></i>
                        <h4>DESIGN</h4>
                        <p>Les projets en ligne réussis commencent par un bon design. Il établit une base solide pour le développement futur et permet une croissance à long terme.</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas fa-code"></i>
                        <h4>DÉVELOPPEMENT</h4>
                        <p>Je peux coder mes propres conceptions ou même utiliser le design du client comme base. Mon objectif est de générer un code propre et bien structuré pour garantir la fiabilité.</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas fa-tv"></i>
                        <h4>BASIC SEO</h4>
                        <p>Je peux configurer votre projet pour utiliser les principes de base du référencement naturel (SEO), ce qui propulsera votre projet en première page des moteurs de recherche et vous fera économiser de l'argent sur les annonces publicitaires.</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of services -->


    <!-- Details -->
	<div class="split">
		<div class="area-1">
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Text Container -->
                        <div class="text-container">
                            <h2>Pourquoi travailler avec moi ?</h2>
                            <p>Je suis bon en communication et j'aime investir tout le temps necessaire pour bien comprendre les besoins des clients.</p>
                            <h5>OUTILS DE DESIGNS</h5>
                            <p>Mes outils préferés sont Canva et Smashing Logo mais Je  peux créer des designs en Figma, Publisher et Photoshop aussi.</p>
                            <h5>COMPÉTENCES EN DÉVELOPPEMENT</h5>
                            <p>Je suis familier et travaille quotidiennement avec HTML, CSS, JavaScript, Bootstrap et d'autres frameworks modernes.</p>

                            <div class="icons-container">
                                <img src="{{ asset('storage/images/AJS.png') }}" alt="Angular JS">
                                <img src="{{ asset('storage/images/spring.png') }}" alt="SpringBoot">
                                <img src="{{ asset('storage/images/details-icon-html.png') }}" alt="HTML5">
                                <img src="{{ asset('storage/images/details-icon-css.png') }}" alt="CSS">
                                <img src="{{ asset('storage/images/details-icon-bootstrap.png') }}" alt="Bootstrap">
                                <img src="{{ asset('storage/images/details-icon-javascript.png') }}" alt="JavaScript">
                                <img src="{{ asset('storage/images/SQL.png') }}" alt="SQL">
                                <img src="{{ asset('storage/images/github.png') }}" alt="github">
                                <img src="{{ asset('storage/images/1200px-Laravel.svg.png') }}" alt="Laravel">
                                <img src="{{ asset('storage/images/php.png') }}" alt="PHP">
                                <img src="{{ asset('storage/images/java.png') }}" alt="JAVA">
                            </div> <!-- end of icons-container -->
                        </div> <!-- end of text-container -->
                        <!-- end of text container -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
		</div> <!-- end of area-2 -->
    </div> <!-- end of split -->
    <!-- end of details -->


    <!-- Projects -->
    <div id="projects" class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Delivered projects</h2>
                    <p class="p-heading">Listed below are some of the most representative projects I've worked on. They range from basic web design for presentation sites to advanced web development for online shops</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                {{-- <div class="col-lg-12">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/project-1.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Jumbotron, <strong>Project:</strong> web design for their corporate websites and landing pages for marketing campaigns <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/project-2.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Carsrepo, <strong>Project:</strong> designed and developed modern platform for purchasing second hand cars online <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/project-3.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Truevideo, <strong>Project:</strong> created a custom video editing and upload web app for this awesome team <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/project-4.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Evolosim, <strong>Project:</strong> complete redesign of their corporate website and platform update for their online shop <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col --> --}}
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of projects -->


    <!-- Works -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="https://www.gavagroundservices.com">
                                <img class="img-fluid" src="{{ asset('storage/images/logob.png') }}" alt="GAVA">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>Pour:</strong> GAVA (General Aviation Agency), <strong>Projet:</strong>Simple site pour des services aéroportuaires au Sénégal. Avec la es services de conciergerie et la location des voitures.<a class="blue" href="https://www.gavagroundservices.com">En Savoir plus</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="https://github.com/cheikh778/AgriManagerPlus">
                                <img class="img-fluid" src="{{ asset('storage/images/Am2.jpg') }}" alt="agrimanager+">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>Pour: </strong>ISEP Diamniadio (Projet de Fin de Formation), <strong>Projet:</strong>Une application de Gestion de projet agricole: AgriManager+.<a class="blue" href="https://github.com/cheikh778/AgriManagerPlus">En Savoir plus</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="https://github.com/cheikh778/maBergerie">
                                <img class="img-fluid" src="{{ asset('storage/images/mouton.jpg') }}" alt="Bergerie">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>Pour: </strong> ISEP Diamniadio, <strong>Projet:</strong> Une application de Gesion d'une Bergerie.<a class="blue" href="https://github.com/cheikh778/maBergerie">En Savoir plus</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="https://github.com/cheikh778/VotingSystem">
                                <img class="img-fluid" src="{{ asset('storage/images/vote.jpg') }}" alt="VotingSystem">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>Pour:</strong> ISEP Diamniadio, <strong>Project:</strong> Un système de gestion de vote.<a class="blue" href="https://github.com/cheikh778/VotingSystem">En Savoir plus</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="https://github.com/cheikh778/pharmacie">
                                <img class="img-fluid" src="{{ asset('storage/images/pharmacie.jpg') }}" alt="pharmacie">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>Pour:</strong> ISEP Diamniadio, <strong>Projet:</strong> Une Application de Gestion d'une Pharmacie. <a class="blue" href="https://github.com/cheikh778/pharmacie">En Savoir plus</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="https://github.com/cheikh778/GestionIsep">
                                <img class="img-fluid" src="{{ asset('storage/images/ISEP-DIAMNIADIO.jpg') }}" alt="IsepD">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>Pour:</strong> ISEP Diamniadio, <strong>Projet:</strong> Une plateforme de gestion des apprenants de l'ISEP Diamniadio. <a class="blue" href="https://github.com/cheikh778/GestionIsep">En Savoir plus</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of works -->



    <!-- Section Divider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <hr class="section-divider">
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    <!-- end of section divider -->


    <!-- Questions -->
    {{-- <div class="accordion-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Frequent questions</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How can I contact you and quickly get a quote for my online project?
                                </button>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    The best way to reach me is through the contact form of by messaging me on my social media accounts. For a fast quote make sure your provide many project details
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you create designs from the ground up or you are using themes?
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    The best way to reach me is through the contact form of by messaging me on my social media accounts. For a fast quote make sure your provide many project details
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Will I receive any included maintenance or warranty after project delivery?
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    The best way to reach me is through the contact form of by messaging me on my social media accounts. For a fast quote make sure your provide many project details
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    If something goes wrong with the project can I have my money back?
                                </button>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    The best way to reach me is through the contact form of by messaging me on my social media accounts. For a fast quote make sure your provide many project details
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What's your preferred method of payment and do you need an advance?
                                </button>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    The best way to reach me is through the contact form of by messaging me on my social media accounts. For a fast quote make sure your provide many project details
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of accordion -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of accordion-1 --> --}}
    <!-- end of questions -->


    <!-- Contact -->
    <div id="contact" class="form-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contactez-moi</h2>
                    <p class="p-heading">Pour tous vos types de projets n'hesitez pas à prendre contact avec moi. Le moins le plus rapide pour me joindre est d'utiliser cet email <a class="blue no-line" href="mailto:cheikhdev2024@gmail.com">cheikhdev2024@gmail.com</a> oubien d'utiliser mes réseaux sociaux qui sont sur l'entête ou le pied de page.</p>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Contact Form -->
                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" name="name">
                            <label class="label-control" for="cname">Name</label>

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" name="email">
                            <label class="label-control" for="cemail">Email</label>

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="message" id="cmessage"></textarea>
                            <label class="label-control" for="cmessage">Votre Message </label>

                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->




    @endsection
