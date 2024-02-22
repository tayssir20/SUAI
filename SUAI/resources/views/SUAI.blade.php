<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUAI</title>
    <!-- Update the CSS and JS paths in the head section -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/SUAI.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">

</head>

<body>
    <nav class="navbar" style="background-color: #f0f4f5" style="width:913px;" style="height:45;">
        <a class="navbar-brand" href="#" style="width: 53px;" style="height:24px;"><svg width="54"
                height="23" viewBox="0 0 54 23" fill="none" xmlns="{{ url('www.w3.org/2000/svg') }}">
                <g clip-path="url(#clip0_2_1100)">
                    <path
                        d="M49.5761 10.6126C50.5335 10.7104 51.1663 10.3291 51.4562 9.31697C52.3794 10.7714 52.9271 12.2431 53.1993 13.8071C53.5388 15.7592 53.6911 17.7387 53.1086 19.6584C52.1129 22.9407 48.33 23.9288 45.8183 21.5366C44.854 20.6185 44.082 19.4845 43.3328 18.3773C42.3697 16.9547 41.5178 15.4601 40.5541 13.8933C40.3173 14.278 40.1227 14.6023 39.9208 14.9216C38.7408 16.7915 37.6305 18.7083 36.3563 20.5145C35.1832 22.178 33.5622 23.1241 31.3758 22.7198C29.3285 22.3413 28.1605 21.0099 27.8216 19.1288C27.0576 14.8914 27.9511 10.9839 30.9609 7.76135C33.298 5.25848 36.4693 5.2294 39.0483 7.52258C40.9832 9.24316 42.3178 11.4206 43.6917 13.5656C44.8597 15.3896 46.0374 17.2092 47.2812 18.9834C47.5819 19.4129 48.1166 19.806 48.6227 19.9519C49.9156 20.3243 50.905 19.4123 50.9889 17.8768C51.1224 15.4327 50.7874 13.0713 49.656 10.8558C49.6263 10.7977 49.6143 10.73 49.5767 10.6115L49.5761 10.6126ZM39.2817 11.8864C38.6815 11.1852 38.1742 10.5007 37.5734 9.9069C35.7293 8.08287 33.7499 8.24951 32.2978 10.3755C30.7093 12.7005 30.1713 15.3029 30.4486 18.0625C30.5958 19.5242 31.6622 20.3366 32.9357 19.9458C33.447 19.7886 33.9879 19.4157 34.2977 18.989C35.9843 16.6657 37.6031 14.2942 39.2817 11.8875V11.8864Z"
                        fill="url(#paint0_linear_2_1100)" />
                    <path
                        d="M9.89721 13.6207C9.61021 13.8013 9.39624 13.9366 9.18171 14.0703C7.58694 15.0634 5.97847 16.0369 4.40082 17.0552C3.28819 17.7731 2.86025 18.5778 3.15867 19.3556C3.55522 20.389 4.48241 20.5293 5.4524 20.5701C7.64513 20.6618 9.77111 20.366 11.6769 19.2572C12.4135 18.8283 13.1004 18.2138 13.6088 17.5383C14.3329 16.5759 14.2445 15.4928 13.3903 14.6412C12.6451 13.8981 11.7853 13.2343 10.8826 12.6813C8.44965 11.1905 5.93796 9.82223 3.5187 8.31022C2.64914 7.7667 1.79726 7.0627 1.21071 6.2435C-0.518719 3.82954 1.06635 0.669085 4.27757 0.166946C7.74099 -0.374895 10.9631 0.399562 13.7555 2.48696C16.8349 4.78853 16.8121 8.19111 13.7469 10.8785C13.1004 10.4496 12.4374 10.0096 11.751 9.55382C12.1544 9.08467 12.527 8.68766 12.8591 8.25989C13.8211 7.02132 13.7538 5.68712 12.5527 4.68564C10.3057 2.8124 7.64628 2.24931 4.76884 2.59824C4.00312 2.69106 3.35152 3.06403 3.1193 3.87036C2.88194 4.69403 3.30131 5.30968 3.91583 5.76038C5.29321 6.77081 6.69968 7.74489 8.12043 8.69605C9.50294 9.62148 10.9522 10.4541 12.3073 11.4148C13.2317 12.0701 14.1269 12.8032 14.8915 13.6297C16.4178 15.2798 16.444 17.3023 15.0621 19.09C13.7452 20.7938 11.9159 21.7041 9.86127 22.2628C7.84769 22.8108 5.82327 23.0244 3.76748 22.5261C2.31193 22.1733 1.13767 21.4475 0.733133 19.9467C0.302345 18.3502 0.596194 16.8527 1.9867 15.825C3.66135 14.5864 5.4387 13.4804 7.18867 12.3413C7.34786 12.2379 7.67994 12.2295 7.84427 12.3229C8.5204 12.7081 9.16345 13.1499 9.89664 13.6207H9.89721Z"
                        fill="#111111" />
                    <path
                        d="M16.717 12.9058C17.4005 13.404 17.9905 13.8021 18.5366 14.2517C19.0233 14.6532 18.7848 15.7967 18.7985 16.333C18.8321 17.6269 18.8538 19.8826 20.529 20.2002C21.5355 20.3909 22.1124 19.7294 22.5238 19.0058C23.3015 17.6381 23.9668 16.2088 24.7188 14.826C25.9301 12.5977 27.109 10.3492 28.4276 8.18244C29.2287 6.86558 30.4617 5.91331 32.0439 5.60464C32.744 5.46764 33.4955 5.58171 34.2406 5.7025C34.1488 5.73996 34.0598 5.79252 33.9639 5.81265C32.1517 6.18506 30.8291 7.24414 29.7684 8.67339C28.5234 10.3509 27.8695 12.3377 27.4125 14.3418C26.814 16.9671 25.5473 19.4878 23.8253 21.5797C23.0795 22.4856 22.1261 23.0956 20.8993 22.9883C19.3108 22.849 17.8467 21.7631 17.2088 20.3423C16.147 17.9781 16.2212 15.5211 16.7176 12.9058H16.717Z"
                        fill="#111111" />
                </g>
                <defs>
                    <linearGradient id="paint0_linear_2_1100" x1="27.5631" y1="14.3512" x2="53.5"
                        y2="14.3512" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#008BFB" />
                        <stop offset="1" stop-color="#0567E1" />
                    </linearGradient>
                    <clipPath id="clip0_2_1100">
                        <rect width="53" height="23" fill="white" transform="translate(0.5)" />
                    </clipPath>
                </defs>
            </svg>
        </a>


        <div class="container-fluid  " style="width: 386px;" style="height: 24px;">
            <Button class="nav-link active" aria-current="page" href="#"style="font: 16px inter;">A prpos</Button>
            <button class="nav-link" href="#"style="font: 16px inter;">Solution</button>
            <button class="nav-link" href="#"style="font: 16px inter;">Service</button>
            <button class="nav-link" href="#"style="font: 16px inter;">Contact</button>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="button"style="font: 16px inter">Sign up</button>
        </div>
    </nav>
    <div id="logo"><svg xmlns="{{ url('www.w3.org/2000/svg') }}" width="295" height="338"
            viewBox="0 0 295 338" fill="none">
            <g filter="url(#filter0_f_2_987)">
                <path
                    d="M195.047 74.2079C213.89 74.1948 225.848 66.2648 230.396 47.7597C250.075 71.9017 262.427 97.0382 269.49 124.317C278.3 158.365 283.479 193.242 274.211 228.4C258.373 288.516 185.448 312.982 133.645 275.09C113.758 260.547 97.3928 241.819 81.5043 223.526C61.0789 200.023 42.7506 175.036 22.1538 148.972C17.9476 156.237 14.5006 162.353 10.9028 168.393C-10.1096 203.76 -29.7078 239.833 -52.6332 274.24C-73.7407 305.93 -104.409 325.698 -147.641 322.516C-188.12 319.537 -212.452 298.027 -221.173 265.24C-240.827 191.38 -227.681 120.349 -172.366 57.6129C-129.414 8.88812 -67.3933 2.57218 -14.383 38.5824C25.3867 65.6015 53.9184 101.832 83.1845 137.414C108.064 167.673 133.128 197.834 159.437 227.07C165.797 234.147 176.695 240.151 186.76 241.818C212.473 246.067 230.82 228.06 230.756 200.637C230.655 156.985 221.479 115.659 196.88 78.3817C196.235 77.4032 195.925 76.2235 195.057 74.187L195.047 74.2079ZM-4.97155 115.657C-17.4953 104.301 -28.1806 93.0731 -40.5963 83.6252C-78.7057 54.603 -117.251 61.1822 -143.305 101.595C-171.806 145.793 -179.444 192.995 -170.954 241.497C-166.451 267.187 -144.682 279.667 -120.197 270.396C-110.368 266.671 -100.198 259.058 -94.6089 250.914C-64.1858 206.566 -35.1446 161.489 -4.97031 115.676L-4.97155 115.657Z"
                    fill="url(#paint0_linear_2_987)" />
            </g>
            <defs>
                <filter id="filter0_f_2_987" x="-244.868" y="0.511206" width="539.081" height="337.44"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="7.55" result="effect1_foregroundBlur_2_987" />
                </filter>
                <linearGradient id="paint0_linear_2_987" x1="-231.535" y1="180.863" x2="276.955" y2="149.074"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#008BFB" />
                    <stop offset="1" stop-color="#0567E1" />
                </linearGradient>
            </defs>
        </svg>
    </div>

    <div class=" position-absolute top-10 start-50 translate-middle">
        <p id="agence">Agence</p>
        <p id="intellegence"> intellegence artificielle</p>
        <p id="para">Le numéro virtuel virtualise votre bureau en quelques minutes. </p>

        <div>
            <button id="Custmers" class="btn btn-primary">Get more Custmers </button>
            <button id="watch-demo" type="button" class="btn btn-outline-primary">
                <i class="bi bi-play"></i>watch free demo
            </button>
        </div>





        <div class="container3  ">
            <p id="aprops">A propos</p>
            <p id="assurer">Assurer la satisfaction de nos clients est au centre de notre expertise</p>

            <div class="container ">
                <div class="image-container">
                    <div class="overlay">
                        <!-- Update the image paths -->
                        <img src="{{ asset('img/SUAI2.png') }}">


                    </div>
                    <img id="image" src="{{ asset('img/SUAIIMAGE.png') }}">
                    <div class="container4 position-absolute top-10 start-50 translate-middle ">
                        <p id="nos">Nos clients</p>
                        <p id="defi">Notre défi quotidien est de gagner la satisfaction de nos clients. Nous
                            faisons tout notre possible pour vous livrer un travail impeccable à temps. Notre engagement
                            est la satisfaction du client et votre satisfaction est notre fierté!</p>
                        <div class="box "></div>


                        <div class="container4 ">
                            <p id="service">Nos Services</p>
                            <p id="notre">Notre défi quotidien est de gagner la satisfaction de nos clients. Nous
                                faisons tout notre possible pour vous livrer un travail impeccable à temps. Notre
                                engagement est la satisfaction du client et votre satisfaction est notre fierté!</p>
                            <div class="card-container">
                                <div class="card "></div>
                                <div class="card "></div>
                                <div class="card"></div>
                            </div>
                            <div class="container-footer">
                                <p id="devis"> Devis</p>
                                <p id="rendez"> Rendez prospere votre entreprise a l'ere du Digital</p>
                                <a href="{{ route('Button devis') }}">
                                    <button class="btn btn-primary" id="button2" type="button">Devis
                                        gratuit</button>
                                </a>




                                <svg class="position-absolute bottom-0 end-0" id="logo2"
                                    xmlns="{{ url('www.w3.org/2000/svg') }}" width="443" height="369"
                                    viewBox="0 0 443 369" fill="none">
                                    <g filter="url(#filter0_f_2_1109)">
                                        <path
                                            d="M440.241 87.7308C459.217 88.2163 471.088 79.7641 475.266 59.4211C495.609 86.6404 508.594 114.765 516.297 145.119C525.909 183.004 531.881 221.709 523.31 260.343C508.665 326.401 435.755 351.522 382.764 308.246C362.42 291.636 345.533 270.491 329.135 249.841C308.055 223.308 289.055 195.19 267.747 165.821C263.669 173.744 260.33 180.415 256.838 186.999C236.444 225.552 217.49 264.924 195.149 302.364C174.579 336.848 144.123 357.894 100.516 353.229C59.6861 348.86 34.715 324.429 25.2216 287.939C3.82584 205.742 15.5231 127.541 69.8689 59.6325C112.067 6.89015 174.39 1.55105 228.557 42.7789C269.194 73.7127 298.714 114.535 328.959 154.659C354.67 188.781 380.566 222.799 407.696 255.828C414.255 263.822 425.36 270.751 435.532 272.86C461.519 278.242 479.605 258.816 478.946 228.488C477.897 180.213 467.76 134.27 442.178 92.395C441.507 91.2958 441.17 89.983 440.251 87.7079L440.241 87.7308ZM239.707 128.26C226.848 115.37 215.844 102.671 203.135 91.8936C164.126 58.7887 125.451 65.0416 100.09 109.041C72.3464 157.16 65.6777 209.156 75.2799 263.017C80.3726 291.545 102.566 305.923 127.024 296.321C136.842 292.462 146.918 284.312 152.37 275.455C182.046 227.221 210.315 178.143 239.708 128.282L239.707 128.26Z"
                                            fill="url(#paint0_linear_2_1109)" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_f_2_1109" x="0.0489254" y="0.375341" width="542.489"
                                            height="368.598" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="7.55"
                                                result="effect1_foregroundBlur_2_1109" />
                                        </filter>
                                        <linearGradient id="paint0_linear_2_1109" x1="12.9555" y1="194.357"
                                            x2="523.029" y2="155.368" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#008BFB" />
                                            <stop offset="1" stop-color="#0567E1" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>























</body>

</html>
