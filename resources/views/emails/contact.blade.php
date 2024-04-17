<link rel="stylesheet" href="{{ asset('storage/css/styles.css') }}">
@component('mail::message')
{{-- Header --}}
{{-- <div style="background-color: #1089ff; padding: 20px;">
    <img src="{{ asset('https://i.postimg.cc/g2jjY7qT/logob.png') }}" alt="Logo" width="120" height="60">
</div> --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="height: 120px;">
    <div class="container">
        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="/"><img src="{{ asset('storage/images/logo.png') }}" style="width: 200px; height:auto;" alt="alternative"></a>
    </div>
</nav>

{{-- Body --}}
# Nouveau message de contact

<strong>Nom:</strong> {{ $name }}<br>
<strong>Email:</strong> {{ $email }}<br>
<strong>Message:</strong> {{ $message }}

{{-- Footer --}}
@slot('footer')
    @component('mail::footer')
        {{-- © {{ date('Y') }} Votre Entreprise. Tous droits réservés. --}}
        <div class="footer bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="social-container">
                            <span class="fa-stack">
                                <a href="https://web.facebook.com/61556393978852/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://twitter.com/cheikh_dev">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://www.linkedin.com/in/serigne-cheikh-ndao-43842b234/  ">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://www.instagram.com/cheikh_dev?igsh=MXhrZWV0emJybmV3cQ==">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://www.wa.me/+221777026066">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-whatsapp fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://youtube.com/@CheikhDEV?si=nKSoKJqF1uC_bJ4X">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-youtube fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://github.com/cheikh778">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x"></i>
                                </a>
                            </span>
                        </div> <!-- end of social-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->
        <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © <a class="no-line" href="">Cheikh DEV</a></p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->

            {{-- <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Distributed By <a class="no-line" href="https://themewagon.com/">Themewagon</a></p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container --> --}}

        </div>
    @endcomponent
@endslot
@endcomponent
