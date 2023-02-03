<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link type="text/css" rel="stylesheet" href="/css/app.css">
    <script defer src="js/index.js"></script>

    {{--    fonts--}}
    <link href="https://fonts.cdnfonts.com/css/rajdhani" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/oxanium" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/exo-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    {!! SEOMeta::generate() !!}
</head>
<body>
<x-navigation></x-navigation>
<img class="details detail1 werkgeverAnimatie" src="svg/document.png">
<img class="details detail2" src="svg/post-it.png">
<img class="details detail3" src="svg/paper-airplane.png">
<img class="details detail4" src="svg/folder.png">
<img class="details detail5" src="svg/file.png">
<img class="details detail6" src="svg/map.png">
<div class="top-outer">
    <div class="top-inner">
        <h1 class="titel sofia">Laat je<span style="color: rgb(2, 163, 136)"> vacatures</span> <br>
            gevonden worden!
        </h1>
        <p class="poppins sub-titel">Voorkom dat je te veel geld spendeert aan recruiters <br>en uitzendbureaus door je
            eigen vacature bereik te vergroten</p>
    </div>
</div>

<div class="job-box-outer">
    <div class="job-box">
        <div class="container">
            <div class="text-side">
                <h2>Ons doel is jouw <span>vacatures</span> <br>in de <span>schijnwerpers</span> zetten!</h2>
                <p>Mensen die op zoek zijn naar werk zoeken veel online en komen veel vacatures tegen. Veel optie dus,
                    hoe krijg je het voor elkaar om de werkzoekende bij jou te laten solliciteren? Dat is een uitdaging
                    waar wij ons bij Werkdeal in specialiseren.</p>
                <br>
                <p>Werkdeal biedt allerlei diensten aan om ervoor te zorgen dat jouw vacature zoveel mogelijk aandacht
                    krijgt. Dit doen we door een werkenbij-website te bouwen en vervolgens kunnen wij deze op meerdere
                    manieren promoten.</p>

                <div class="buttons">
                    <p class="btn-style" onclick="scrollDiv()">Recensies</p>
                    <a class="btn-style" href="/contact">Contact</a>
                </div>
            </div>
            <div class="image-side">
                <img id="image1" class="preview-image hidden" src="img/stock1.png" alt="Werkdeal software preview">
                <img class="side-image" src="img/stock2.png" alt="Werkdeal software popup">
            </div>
        </div>
    </div>
</div>

<section class="text-image">
    <div class="container">
        <div class="image-side">
            <img id="image1" class="preview-image hidden hidden2" src="img/stock3.png" alt="Werkdeal software preview">
            <svg class="small-extra-preview" xmlns="http://www.w3.org/2000/svg" width="336" height="368"
                 viewBox="0 0 336 368" fill="none">
                <rect width="336" height="368" fill="white"/>
                <ellipse cx="301.406" cy="331.166" rx="11.798" ry="11.7988" fill="#E6E6E6"/>
                <ellipse cx="272.551" cy="331.166" rx="11.798" ry="11.7988" fill="#E6E6E6"/>
                <ellipse cx="243.694" cy="331.166" rx="11.798" ry="11.7988" fill="#E6E6E6"/>
                <path d="M0 0H336V38.3456H0V0Z" fill="#0A0A0A"/>
                <line x1="22.7949" y1="79.8404" x2="313.205" y2="79.8404" stroke="#E6E6E6" stroke-width="1.10927"/>
                <line x1="22.7949" y1="121.889" x2="313.205" y2="121.889" stroke="#E6E6E6" stroke-width="1.10927"/>
                <path
                    d="M24.173 105.77H26.5174V102.238H29.0677C31.4438 102.238 33.1704 100.717 33.1704 98.5626C33.1704 96.4084 31.4438 94.8877 29.0677 94.8877H24.173V105.77ZM26.5174 100.099V97.0261H28.8301C29.9865 97.0261 30.7785 97.6281 30.7785 98.5626C30.7785 99.4972 29.9865 100.099 28.8301 100.099H26.5174ZM37.2305 99.1171V97.5805H34.9178V105.77H37.2305V101.857C37.2305 100.321 38.3234 99.3388 40.0342 99.3388V97.3905C38.7828 97.3905 37.769 98.0558 37.2305 99.1171ZM45.6209 105.96C48.0762 105.96 50.0879 104.028 50.0879 101.667C50.0879 99.3071 48.0762 97.3905 45.6209 97.3905C43.1657 97.3905 41.1539 99.3071 41.1539 101.667C41.1539 104.028 43.1657 105.96 45.6209 105.96ZM45.6209 104.012C44.3854 104.012 43.3716 102.95 43.3716 101.667C43.3716 100.384 44.3854 99.3388 45.6209 99.3388C46.8565 99.3388 47.8544 100.384 47.8544 101.667C47.8544 102.95 46.8565 104.012 45.6209 104.012ZM56.7862 97.3905C55.6298 97.3905 54.6794 97.8973 54.0299 98.7527V97.5805H51.7172V108.495H54.0299V104.598C54.6794 105.453 55.6298 105.96 56.7862 105.96C58.9721 105.96 60.5562 104.186 60.5562 101.667C60.5562 99.1646 58.9721 97.3905 56.7862 97.3905ZM56.1209 104.012C54.9011 104.012 54.0299 103.045 54.0299 101.667C54.0299 100.305 54.9011 99.3388 56.1209 99.3388C57.4039 99.3388 58.3068 100.305 58.3068 101.667C58.3068 103.045 57.4039 104.012 56.1209 104.012ZM66.1484 105.96C68.6037 105.96 70.6154 104.028 70.6154 101.667C70.6154 99.3071 68.6037 97.3905 66.1484 97.3905C63.6932 97.3905 61.6814 99.3071 61.6814 101.667C61.6814 104.028 63.6932 105.96 66.1484 105.96ZM66.1484 104.012C64.9129 104.012 63.8991 102.95 63.8991 101.667C63.8991 100.384 64.9129 99.3388 66.1484 99.3388C67.384 99.3388 68.3819 100.384 68.3819 101.667C68.3819 102.95 67.384 104.012 66.1484 104.012ZM75.2386 105.96C77.2503 105.96 78.5809 104.93 78.5809 103.315C78.5809 101.525 76.9969 101.05 75.5871 100.685C74.4782 100.384 74.0189 100.258 74.0189 99.814C74.0189 99.3547 74.4941 99.0537 75.1277 99.0537C75.8722 99.0537 76.7593 99.418 77.5038 99.8932L78.3433 98.4042C77.4404 97.8023 76.2841 97.3905 75.1277 97.3905C73.1793 97.3905 71.9279 98.4993 71.9279 100.052C71.9279 101.667 73.2269 102.127 74.9059 102.539C75.8088 102.76 76.4741 102.982 76.4741 103.505C76.4741 103.98 76.0623 104.265 75.2861 104.265C74.399 104.265 73.3219 103.869 72.4824 103.267L71.5478 104.725C72.5299 105.517 73.9238 105.96 75.2386 105.96ZM83.6646 97.3905C82.5241 97.3905 81.3994 97.7073 80.243 98.2934L81.0192 99.8299C81.6687 99.4972 82.3815 99.2438 83.1418 99.2438C84.4883 99.2438 85.0427 100.004 85.0427 100.875V101.05C84.3457 100.764 83.6012 100.622 82.9359 100.622C81.0509 100.622 79.5461 101.731 79.5461 103.346C79.5461 104.915 80.8767 105.96 82.6191 105.96C83.522 105.96 84.4566 105.596 85.0427 104.946V105.77H87.2762V100.875C87.2762 98.7369 85.803 97.3905 83.6646 97.3905ZM83.1418 104.36C82.3498 104.36 81.7479 103.948 81.7479 103.283C81.7479 102.618 82.429 102.127 83.2685 102.127C83.9022 102.127 84.5199 102.238 85.0427 102.444V103.188C84.8684 103.948 84.0289 104.36 83.1418 104.36ZM89.3072 105.77H91.6199V94.6976H89.3072V105.77ZM100.785 97.137C100.785 96.5984 101.134 96.2183 101.561 96.2183C101.878 96.2183 102.195 96.3292 102.353 96.4876L102.908 95.0778C102.432 94.6501 101.688 94.3649 101.023 94.3649C99.5812 94.3649 98.5674 95.3946 98.5674 96.8677V97.5805H97.4427V99.4497H98.5674V105.77H100.785V99.4497H102.559V97.5805H100.785V97.137ZM107.869 105.96C110.324 105.96 112.336 104.028 112.336 101.667C112.336 99.3071 110.324 97.3905 107.869 97.3905C105.413 97.3905 103.402 99.3071 103.402 101.667C103.402 104.028 105.413 105.96 107.869 105.96ZM107.869 104.012C106.633 104.012 105.619 102.95 105.619 101.667C105.619 100.384 106.633 99.3388 107.869 99.3388C109.104 99.3388 110.102 100.384 110.102 101.667C110.102 102.95 109.104 104.012 107.869 104.012ZM113.965 105.77H116.278V94.6976H113.965V105.77ZM118.497 105.77H120.81V94.6976H118.497V105.77ZM126.927 105.96C129.382 105.96 131.394 104.028 131.394 101.667C131.394 99.3071 129.382 97.3905 126.927 97.3905C124.471 97.3905 122.46 99.3071 122.46 101.667C122.46 104.028 124.471 105.96 126.927 105.96ZM126.927 104.012C125.691 104.012 124.677 102.95 124.677 101.667C124.677 100.384 125.691 99.3388 126.927 99.3388C128.162 99.3388 129.16 100.384 129.16 101.667C129.16 102.95 128.162 104.012 126.927 104.012ZM134.94 105.77H137.015L138.551 100.622L140.088 105.77H142.163L144.935 97.5805H142.67L141.133 102.681L139.502 97.5805H137.585L135.969 102.681L134.417 97.5805H132.152L134.94 105.77ZM146.28 102.396H150.62V100.432H146.28V102.396ZM158.177 97.5805V102.428C158.177 103.315 157.433 104.012 156.466 104.012C155.548 104.012 154.898 103.315 154.898 102.301V97.5805H152.68V102.792C152.68 104.661 153.932 105.96 155.722 105.96C156.767 105.96 157.67 105.501 158.177 104.772V105.77H160.49V97.5805H158.177ZM167.777 97.3905C166.621 97.3905 165.67 97.8973 165.021 98.7527V97.5805H162.708V108.495H165.021V104.598C165.67 105.453 166.621 105.96 167.777 105.96C169.963 105.96 171.547 104.186 171.547 101.667C171.547 99.1646 169.963 97.3905 167.777 97.3905ZM167.112 104.012C165.892 104.012 165.021 103.045 165.021 101.667C165.021 100.305 165.892 99.3388 167.112 99.3388C168.395 99.3388 169.298 100.305 169.298 101.667C169.298 103.045 168.395 104.012 167.112 104.012Z"
                    fill="#0A0A0A"/>
                <rect opacity="0.4" x="22.7949" y="141.183" width="265.325" height="12.0019" rx="6.00093"
                      fill="#D0D0D0"/>
                <rect opacity="0.4" x="22.7949" y="164.267" width="164.258" height="12.0019" rx="6.00093"
                      fill="#D0D0D0"/>
                <rect opacity="0.4" x="22.7949" y="187.351" width="245.468" height="12.0019" rx="6.00093"
                      fill="#D0D0D0"/>
                <rect opacity="0.4" x="22.7949" y="218.093" width="245.468" height="12.0019" rx="6.00093"
                      fill="#D0D0D0"/>
                <rect opacity="0.4" x="22.7949" y="53.4136" width="68.5909" height="11.9132" rx="5.95661"
                      fill="#D0D0D0"/>
                <rect x="22.7949" y="316.919" width="71.5233" height="28.4943" rx="14.2471" fill="#4B84FF"/>
            </svg>
        </div>
        <div class="text-side">
            <h3 class="simple-hidden hidden3"><span>Overtuig</span> werkzoekenden sneller met <span>Werkdeal</span></h3>
            <p class="simple-hidden hidden4">Werkzoekenden bekijken vaak meerdere websites met vacatures erop. De
                bedoeling is dat jouw bedrijf met een vacature het meest opvalt.
                <br> <br>Hiervoor hebben wij een speciaal platform gebouwd wat hier op focust. Overtref je concurrenten
                met een werkenbij- website en verdubbel je sollicitaties!</p>
            <div class="stats simple-hidden hidden5">
                <div class="single-stat">
                    <b>75</b><b>%</b>
                    <h5>Meer sollicitaties</h5>
                </div>
                <div class="single-stat">
                    <b>1.5</b><b>X</b>
                    <h5>Sneller sollicitaties</h5>
                </div>
            </div>
            <a class="cta-button btn-style" href="/contact">
                Start nu!
            </a>
        </div>
    </div>
</section>

<section class="swiper-services">
    <div class="swiper-headline">
        <div class="container">
            <div class="left-side">
                <h2>Diensten met impact.</h2>
                <p>Het bouwen van een werkenbij- website is onze standaard dienst. Hierbij leveren wij ook verschillende diensten om dit platform een boost te geven!</p>
            </div>
            <div class="right-side">
                <div class="arrow arrow-left" onclick="swipeFunction()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="512" viewBox="0 0 24 24" width="512">
                        <path clip-rule="evenodd"
                              d="m13.7071 4.29289c-.3905-.39052-1.0237-.39052-1.4142 0-.3905.39053-.3905 1.02369 0 1.41422l5.2929 5.29289h-13.5858c-.55228 0-1 .4477-1 1s.44772 1 1 1h13.5858l-5.2929 5.2929c-.3905.3905-.3905 1.0237 0 1.4142s1.0237.3905 1.4142 0l7-7c.3905-.3905.3905-1.0237 0-1.4142z"
                              fill="rgb(0,0,0)" fill-rule="evenodd"/>
                    </svg>
                </div>
                <div class="arrow arrow-right" onclick="swipeFunction(1)">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="512" viewBox="0 0 24 24" width="512">
                        <path clip-rule="evenodd"
                              d="m13.7071 4.29289c-.3905-.39052-1.0237-.39052-1.4142 0-.3905.39053-.3905 1.02369 0 1.41422l5.2929 5.29289h-13.5858c-.55228 0-1 .4477-1 1s.44772 1 1 1h13.5858l-5.2929 5.2929c-.3905.3905-.3905 1.0237 0 1.4142s1.0237.3905 1.4142 0l7-7c.3905-.3905.3905-1.0237 0-1.4142z"
                              fill="white" fill-rule="evenodd"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div id="swiperOuter" class="swiper-items" style="margin-left: 90px">
        <div class="swiper-item">
            <h4>Werkenbij- <br> website</h4>
            <p>Mensen die werk zoeken moet je op jouw pagina terecht laten komen. <br><br>Zodra ze jouw pagina bezoeken
                heb je vaak maar een korte tijd om ze te overtuigen met de sfeerimpressie van jouw bedrijf.</p>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" version="1.1" id="svg1485"
                 xml:space="preserve" width="682.66669" height="682.66669" viewBox="0 0 682.66669 682.66669"><defs
                    id="defs1489">
                    <clipPath clipPathUnits="userSpaceOnUse" id="clipPath1499">
                        <path d="M 0,512 H 512 V 0 H 0 Z" id="path1497"/>
                    </clipPath>
                </defs>
                <g id="g1491" transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)">
                    <g id="g1493">
                        <g id="g1495" clip-path="url(#clipPath1499)">
                            <g id="g1501" transform="translate(382.2949,441.6479)">
                                <path
                                    d="m 0,0 h 104.06 c 10.083,0 18.256,-8.174 18.256,-18.257 v -288.216 c 0,-10.083 -8.173,-18.256 -18.256,-18.256 h -460.709 c -10.083,0 -18.257,8.173 -18.257,18.256 v 106.781"
                                    style="fill:none;stroke:#ffffff;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path1503"/>
                            </g>
                            <g id="g1505" transform="translate(7.3887,276.4111)">
                                <path d="m 0,0 v 146.98 c 0,10.083 8.174,18.257 18.257,18.257 H 209.23"
                                      style="fill:none;stroke:#ffffff;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path1507"/>
                            </g>
                            <g id="g1509" transform="translate(504.6113,170.1855)">
                                <path
                                    d="m 0,0 h -497.223 v -35.01 c 0,-10.083 8.174,-18.257 18.257,-18.257 H -18.257 C -8.174,-53.267 0,-45.093 0,-35.01 Z"
                                    style="fill:none;stroke:#ffffff;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path1511"/>
                            </g>
                            <g id="g1513" transform="translate(295.4541,116.9189)">
                                <path
                                    d="m 0,0 h -78.908 c 0,0 -2.675,-39.936 -8.025,-61.665 H 8.024 C 2.675,-39.936 0,0 0,0 Z"
                                    style="fill:none;stroke:#ffffff;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path1515"/>
                            </g>
                            <g id="g1517" transform="translate(405.124,13.4639)">
                                <path
                                    d="m 0,0 h -298.248 v 10.061 c 0,17.524 14.206,31.73 31.729,31.73 h 234.79 C -14.206,41.791 0,27.585 0,10.061 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path1519"/>
                            </g>
                            <g id="g1521" transform="translate(282.3135,222.3345)">
                                <path
                                    d="m 0,0 h -235.497 c -2.92,0 -5.287,2.367 -5.287,5.287 v 47.537 c 0,2.92 2.367,5.287 5.287,5.287 H 0 c 2.921,0 5.288,-2.367 5.288,-5.287 V 5.287 C 5.288,2.367 2.921,0 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path1523"/>
                            </g>
                            <g id="g1525" transform="translate(41.5293,314.4995)">
                                <path
                                    d="m 0,0 c 0,0 6.365,-6.405 13.297,-2.557 3.421,1.898 5.485,5.561 5.485,9.473 v 42.612"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path1527"/>
                            </g>
                            <g id="g1529" transform="translate(194.0479,351.7598)">
                                <path
                                    d="m 0,0 c 0,-6.775 -5.492,-12.268 -12.268,-12.268 -3.36,0 -15.487,-0.054 -15.487,-0.054 V 0 12.268 h 15.487 C -5.492,12.268 0,6.775 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path1531"/>
                            </g>
                            <g id="g1533" transform="translate(198.8359,325.126)">
                                <path
                                    d="m 0,0 c 0,-7.926 -6.426,-14.351 -14.352,-14.351 -3.93,0 -18.191,-0.064 -18.191,-0.064 V 0 14.351 h 18.191 C -6.426,14.351 0,7.926 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path1535"/>
                            </g>
                            <g id="g1537" transform="translate(139.7334,337.3696)">
                                <path
                                    d="m 0,0 c 0,-14.723 -11.936,-26.658 -26.658,-26.658 -14.723,0 -26.658,11.935 -26.658,26.658 0,14.723 11.935,26.658 26.658,26.658 C -11.936,26.658 0,14.723 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path1539"/>
                            </g>
                            <g id="g1541" transform="translate(369.4775,366.8872)">
                                <path d="m 0,0 31.561,-31.56 -26.05,-26.049 -31.56,31.56"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path1543"/>
                            </g>
                            <g id="g1545" transform="translate(461.7559,248.5605)">
                                <path
                                    d="m 0,0 v 0 c -11.62,-11.62 -30.46,-11.62 -42.08,0 l -46.452,46.452 c -3.452,3.452 -3.452,9.049 0,12.501 l 29.578,29.578 c 3.452,3.452 9.05,3.452 12.502,0 L 0,42.08 C 11.619,30.459 11.619,11.62 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path1547"/>
                            </g>
                            <g id="g1549" transform="translate(369.4785,458.272)">
                                <path
                                    d="m 0,0 c 20.471,-32.895 16.419,-76.706 -12.154,-105.28 -33.296,-33.295 -87.279,-33.295 -120.574,0 -33.294,33.296 -33.294,87.278 0,120.573 29.64,29.64 75.674,32.894 108.915,9.762"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path1551"/>
                            </g>
                            <g id="g1553" transform="translate(337.25,453.4917)">
                                <path
                                    d="m 0,0 c 22.21,-22.209 22.21,-58.217 0,-80.426 -22.209,-22.209 -58.217,-22.209 -80.426,0 -22.209,22.209 -22.209,58.217 0,80.426 C -58.217,22.209 -22.209,22.209 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path1555"/>
                            </g>
                        </g>
                    </g>
                </g></svg>
        </div>
        <div class="swiper-item">
            <h4>Google <br>
                Advertenties</h4>
            <p>Geef je vacature een boost door het boven in Google te laten komen! <br><br> Als mensen zoeken naar
                vacatures die jij aanbiedt, wil je graag bovenaan hebben zodat ze jouw vacature als eerste bekijken</p>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" version="1.1" id="svg5178"
                 xml:space="preserve" width="682.66669" height="682.66669" viewBox="0 0 682.66669 682.66669"><defs
                    id="defs5182">
                    <clipPath clipPathUnits="userSpaceOnUse" id="clipPath5192">
                        <path d="M 0,512 H 512 V 0 H 0 Z" id="path5190"/>
                    </clipPath>
                </defs>
                <g id="g5184" transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)">
                    <g id="g5186">
                        <g id="g5188" clip-path="url(#clipPath5192)">
                            <g id="g5194" transform="translate(330.2949,73.999)">
                                <path
                                    d="m 0,0 v -47.338 c 0,-10.703 -8.676,-19.38 -19.379,-19.38 H -241.42 c -10.703,0 -19.379,8.677 -19.379,19.38 V 411.34 c 0,10.703 8.676,19.38 19.379,19.38 H -19.379 C -8.676,430.72 0,422.043 0,411.34 v -65.331"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path5196"/>
                            </g>
                            <g id="g5198" transform="translate(330.2949,384.7012)">
                                <path d="M 0,0 V -185.626"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path5200"/>
                            </g>
                            <g id="g5202" transform="translate(132.5103,504.7187)">
                                <path
                                    d="m 0,0 8.975,-29.103 c 1.839,-5.964 7.352,-10.034 13.593,-10.034 h 89.634 c 6.242,0 11.755,4.07 13.593,10.034 L 134.771,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path5204"/>
                            </g>
                            <g id="g5206" transform="translate(284.0137,269.8818)">
                                <path
                                    d="m 0,0 h -168.236 c -7.493,0 -13.568,6.074 -13.568,13.568 v 101.847 c 0,7.493 6.075,13.568 13.568,13.568 H 0 c 7.493,0 13.567,-6.075 13.567,-13.568 V 13.568 C 13.567,6.074 7.493,0 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path5208"/>
                            </g>
                            <g id="g5210" transform="translate(102.2095,230.7051)">
                                <path d="M 0,0 H 195.372"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path5212"/>
                            </g>
                            <g id="g5214" transform="translate(147.6562,191.5283)">
                                <path d="M 0,0 H 40.581"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path5216"/>
                            </g>
                            <g id="g5218" transform="translate(102.2095,191.5283)">
                                <path d="M 0,0 H 10.697"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path5220"/>
                            </g>
                            <g id="g5222" transform="translate(102.2095,152.3516)">
                                <path d="M 0,0 H 86.028"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path5224"/>
                            </g>
                            <g id="g5226" transform="translate(172.9375,113.1758)">
                                <path d="M 0,0 H 15.3"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path5228"/>
                            </g>
                            <g id="g5230" transform="translate(102.2095,113.1758)">
                                <path d="M 0,0 H 35.84"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path5232"/>
                            </g>
                            <g id="g5234" transform="translate(102.2095,73.999)">
                                <path d="M 0,0 H 86.028"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path5236"/>
                            </g>
                            <g id="g5238" transform="translate(218.4946,341.0605)">
                                <path
                                    d="m 0,0 -25.62,17.562 c -6.795,4.659 -16.028,-0.207 -16.028,-8.445 v -31.611 c 0,-7.782 8.338,-12.72 15.162,-8.979 l 25.62,14.049 C 5.826,-13.754 6.295,-4.315 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path5240"/>
                            </g>
                            <g id="g5242" transform="translate(264.7187,73.999)">
                                <path
                                    d="M 0,0 H -19.934 C -26.343,0 -31.54,5.196 -31.54,11.605 v 101.866 c 0,6.409 5.197,11.605 11.606,11.605 H 166.18 c 6.41,0 11.606,-5.196 11.606,-11.605 V 11.605 C 177.786,5.196 172.59,0 166.18,0 H 33.996"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path5244"/>
                            </g>
                            <g id="g5246" transform="translate(264.7187,114.6074)">
                                <path d="m 0,0 16.469,43.241 c 0.337,0.823 1.501,0.824 1.84,0.002 L 34.628,0"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path5248"/>
                            </g>
                            <g id="g5250" transform="translate(269.8545,125.377)">
                                <path d="M 0,0 H 24.438"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path5252"/>
                            </g>
                            <g id="g5254" transform="translate(327.3398,157.7734)">
                                <path d="M 0,0 V -41.825"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path5256"/>
                            </g>
                            <g id="g5258" transform="translate(356.5811,136.5371)">
                                <path
                                    d="m 0,0 c 0,-11.728 -6.508,-21.007 -16.834,-21.187 -3.437,-0.06 -12.321,-0.093 -12.321,-0.093 0,0 -0.056,15.416 -0.056,21.327 0,4.855 -0.03,21.234 -0.03,21.234 h 12.054 C -5.861,21.281 0,11.728 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path5260"/>
                            </g>
                            <g id="g5262" transform="translate(409.5156,153.958)">
                                <path
                                    d="m 0,0 c 0,0 -7.87,6.615 -17.15,3.819 -8.522,-2.566 -9.714,-12.392 -3.549,-16.412 0,0 6.05,-2.699 12.76,-5.174 16.151,-5.958 9.193,-21.584 -3.809,-21.584 -6.512,0 -11.977,2.852 -15.284,6.502"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path5264"/>
                            </g>
                        </g>
                    </g>
                </g></svg>

        </div>
        <div class="swiper-item">
            <h4>Social <br>
                media boost</h4>
            <p>Je ziet het telkens vaker, bedrijven met een 'werkenbij' account op sociale media. Dit geeft een erg
                goede impressie over jouw bedrijf.
                <br> <br> Hiermee bereik je de jongere doelgroep a.k.a de toekomst</p>
            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="512"
                 viewBox="0 0 512 512" width="512">
                <g>
                    <path
                        d="m500.158 400.534h-12.695v-178.333c0-7.35-5.979-13.329-13.328-13.329h-12.422v-195.158c0-7.051-5.736-12.787-12.786-12.787h-293.317c-4.126 0-7.471 3.344-7.471 7.471s3.345 7.471 7.471 7.471h291.161v49.727h-431.829v-49.726h106.557c4.126 0 7.471-3.344 7.471-7.471s-3.345-7.471-7.471-7.471h-108.713c-7.05-.001-12.786 5.735-12.786 12.786v484.572c0 7.051 5.736 12.787 12.786 12.787h436.142c7.05 0 12.786-5.736 12.786-12.787v-48.364h38.444c6.53 0 11.842-5.313 11.842-11.842v-25.703c0-6.53-5.312-11.843-11.842-11.843zm-53.387 95.596h-431.829v-415.591h431.829v128.333h-25.633c-7.349 0-13.328 5.979-13.328 13.329v43.58c0 4.127 3.345 7.471 7.471 7.471s7.471-3.344 7.471-7.471v-41.967h49.768v176.719h-49.768v-98.125c0-4.127-3.345-7.471-7.471-7.471s-7.471 3.344-7.471 7.471v98.126h-27.987v-80.781c0-7.35-5.979-13.328-13.328-13.328h-52.997c-7.349 0-13.328 5.979-13.328 13.328v80.781h-27.987v-145.514c0-7.35-5.979-13.328-13.328-13.328h-52.997c-7.349 0-13.328 5.979-13.328 13.328v145.514h-27.987v-118.183c0-7.348-5.979-13.327-13.328-13.327h-52.996c-7.349 0-13.327 5.979-13.327 13.327v118.184h-12.695c-6.53 0-11.842 5.313-11.842 11.843v25.703c0 6.53 5.312 11.842 11.842 11.842h374.575v46.207zm-81.89-174.763v79.167h-49.768v-79.167zm-107.64-64.733v143.899h-49.768v-143.899zm-107.639 27.332v116.568h-49.768v-116.568zm347.456 151.014h-421.761v-19.504h421.761z"/>
                    <path
                        d="m159.137 233.137 71.688-35.059 77.684 38.78c1.059.529 2.201.787 3.335.787 1.814 0 3.609-.661 5.013-1.93l88.429-79.987-3.9 23.081c-.688 4.069 2.053 7.925 6.122 8.612.421.071.84.105 1.253.105 3.579 0 6.741-2.58 7.358-6.227l7.746-45.839c.389-2.299-.318-4.647-1.911-6.35-1.592-1.702-3.885-2.559-6.207-2.329l-46.254 4.675c-4.105.414-7.097 4.079-6.682 8.184.414 4.106 4.08 7.103 8.185 6.682l25.231-2.551-85.61 77.438-76.422-38.149c-2.081-1.039-4.528-1.05-6.619-.027l-75.004 36.68c-3.707 1.812-5.242 6.287-3.429 9.993 1.813 3.707 6.286 5.241 9.994 3.431z"/>
                </g>
            </svg>
        </div>
        <div class="swiper-item">
            <h4>Fotografie & <br>
                video</h4>
            <p>Als je werk zoekt, is het fijn dat je een juiste sfeer impressie krijgt bij jouw bedrijf. Dit werkt erg
                goed met een video en goede fotografie.
                <br><br>Bij Werkdeal zorgen wij ervoor dat jouw bedrijf de juiste impressie geeft.</p>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" version="1.1" id="svg525"
                 xml:space="preserve" width="682.66669" height="682.66669" viewBox="0 0 682.66669 682.66669"><defs
                    id="defs529">
                    <clipPath clipPathUnits="userSpaceOnUse" id="clipPath539">
                        <path d="M 0,512 H 512 V 0 H 0 Z" id="path537"/>
                    </clipPath>
                </defs>
                <g id="g531" transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)">
                    <g id="g533">
                        <g id="g535" clip-path="url(#clipPath539)">
                            <g id="g541" transform="translate(274.4521,209.1743)">
                                <path
                                    d="m 0,0 v -166.155 c 0,-10.191 -8.262,-18.452 -18.452,-18.452 -10.191,0 -18.452,8.261 -18.452,18.452 v 72.688"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path543"/>
                            </g>
                            <g id="g545" transform="translate(237.5479,149.8701)">
                                <path d="M 0,0 V 59.304"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path547"/>
                            </g>
                            <g id="g549" transform="translate(305.0273,238.9663)">
                                <path
                                    d="m 0,0 119.134,-203.945 c 5.095,-8.826 2.071,-20.111 -6.754,-25.206 -8.825,-5.096 -20.11,-2.072 -25.206,6.754 L -26.374,-28.015"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path551"/>
                            </g>
                            <g id="g553" transform="translate(206.9727,238.9663)">
                                <path
                                    d="m 0,0 -119.134,-203.945 c -5.095,-8.826 -2.071,-20.111 6.754,-25.206 8.825,-5.096 20.11,-2.072 25.206,6.754 L 26.374,-28.015"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path555"/>
                            </g>
                            <g id="g557" transform="translate(384.8994,504.6597)">
                                <path
                                    d="m 0,0 h 66.675 c 9.127,0 16.526,-7.399 16.526,-16.526 v -181.487 c 0,-9.127 -7.399,-16.526 -16.526,-16.526 h -391.149 c -9.127,0 -16.526,7.399 -16.526,16.526 V -16.526 C -341,-7.399 -333.601,0 -324.474,0 H -34.52"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path559"/>
                            </g>
                            <g id="g561" transform="translate(468.1006,454.8545)">
                                <path
                                    d="m 0,0 -24.818,-7.654 c -5.086,-1.568 -8.556,-6.269 -8.556,-11.592 v -76.437 c 0,-5.323 3.47,-10.024 8.556,-11.592 L 0,-114.929 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path563"/>
                            </g>
                            <g id="g565" transform="translate(304.6006,415.564)">
                                <path
                                    d="m 0,0 c 0,-26.841 -21.76,-48.6 -48.601,-48.6 -26.84,0 -48.6,21.759 -48.6,48.6 0,26.841 21.76,48.6 48.6,48.6 C -21.76,48.6 0,26.841 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path567"/>
                            </g>
                            <g id="g569" transform="translate(272.4238,420.2412)">
                                <path
                                    d="m 0,0 -17.92,12.285 c -4.753,3.257 -11.212,-0.145 -11.212,-5.908 v -22.111 c 0,-5.443 5.833,-8.897 10.606,-6.28 l 17.92,9.827 C 4.075,-9.62 4.403,-3.019 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path571"/>
                            </g>
                            <g id="g573" transform="translate(91.5898,326.4683)">
                                <path d="M 0,0 H 328.82"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path575"/>
                            </g>
                            <g id="g577" transform="translate(152.2207,334.6406)">
                                <path d="M 0,0 V -16.345"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path579"/>
                            </g>
                            <g id="g581" transform="translate(321.248,258.6982)">
                                <path
                                    d="m 0,0 h -130.496 c -7.153,0 -12.953,5.799 -12.953,12.953 V 31.422 H 12.953 V 12.953 C 12.953,5.799 7.153,0 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path583"/>
                            </g>
                            <g id="g585" transform="translate(308.8389,258.6982)">
                                <path
                                    d="m 0,0 c 0,-29.182 -23.657,-52.838 -52.839,-52.838 -29.182,0 -52.839,23.656 -52.839,52.838 z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path587"/>
                            </g>
                        </g>
                    </g>
                </g></svg>
        </div>
        <div class="swiper-item">
            <h4>Vacature <br>
                boost</h4>
            <p>Een vacature kunnen wij bovenaan laten komen via de google SEO. <br><br> Hierin hebben specialisten in
                het schrijven van google-vriendelijke teksten</p>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" version="1.1" id="svg2436"
                 xml:space="preserve" width="682.66669" height="682.66669" viewBox="0 0 682.66669 682.66669"><defs
                    id="defs2440">
                    <clipPath clipPathUnits="userSpaceOnUse" id="clipPath2450">
                        <path d="M 0,512 H 512 V 0 H 0 Z" id="path2448"/>
                    </clipPath>
                </defs>
                <g id="g2442" transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)">
                    <g id="g2444">
                        <g id="g2446" clip-path="url(#clipPath2450)">
                            <g id="g2452" transform="translate(166.1875,355.1631)">
                                <path
                                    d="m 0,0 -19.857,-17.406 c -18.13,-15.892 -31.056,-36.956 -36.612,-60.416 -3.029,-12.79 -5.275,-27.776 -5.104,-43.779 0.076,-7.097 5.876,-12.805 12.973,-12.805 h 62.93"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path2454"/>
                            </g>
                            <g id="g2456" transform="translate(106.915,263.2578)">
                                <path d="M 0,0 H 64.507"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path2458"/>
                            </g>
                            <g id="g2460" transform="translate(344.9941,355.8804)">
                                <path
                                    d="m 0,0 20.676,-18.124 c 18.13,-15.891 31.055,-36.955 36.612,-60.416 3.028,-12.79 5.275,-27.775 5.103,-43.778 -0.076,-7.098 -5.875,-12.805 -12.973,-12.805 H 37.032"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path2462"/>
                            </g>
                            <g id="g2464" transform="translate(347.2095,220.7573)">
                                <path d="M 0,0 H -13.989"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path2466"/>
                            </g>
                            <g id="g2468" transform="translate(405.085,263.2578)">
                                <path d="M 0,0 H -64.507"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path2470"/>
                            </g>
                            <g id="g2472" transform="translate(177.2065,398.7427)">
                                <path
                                    d="m 0,0 c -2.261,-6.654 -4.293,-13.602 -6.037,-20.84 -7.029,-29.182 -8.137,-59.473 -3.877,-89.187 4.607,-32.13 15.857,-94.118 39.004,-143.234 2.287,-4.853 7.166,-7.953 12.531,-7.953 h 37.172 37.173 c 5.365,0 10.244,3.1 12.531,7.953 23.147,49.117 34.397,111.104 39.003,143.234 4.261,29.714 3.153,60.005 -3.876,89.187 -14.972,62.157 -51.215,102.819 -71.141,121.291 -7.717,7.154 -19.662,7.154 -27.379,0 C 51.55,87.886 30.447,65.055 13.624,32.176"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path2474"/>
                            </g>
                            <g id="g2476" transform="translate(192.4453,180.0312)">
                                <path d="M 0,0 H 127.109"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path2478"/>
                            </g>
                            <g id="g2480" transform="translate(300.855,354.4463)">
                                <path
                                    d="m 0,0 c 0,-24.772 -20.082,-44.855 -44.855,-44.855 -24.773,0 -44.855,20.083 -44.855,44.855 0,24.773 20.082,44.855 44.855,44.855 C -20.082,44.855 0,24.773 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path2482"/>
                            </g>
                            <g id="g2484" transform="translate(199.9888,112.9248)">
                                <path d="M 0,0 C 0,0 -12.509,-16.072 -14.506,-33.149"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path2486"/>
                            </g>
                            <g id="g2488" transform="translate(148.9233,27.7412)">
                                <path
                                    d="m 0,0 c -8.842,5.611 -14.71,15.488 -14.71,26.736 0,17.475 14.167,31.642 31.642,31.642 10.529,0 19.857,-5.143 25.61,-13.053"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path2490"/>
                            </g>
                            <g id="g2492" transform="translate(107.0259,47.4668)">
                                <path
                                    d="M 0,0 C 0.197,9.779 -4.127,19.513 -12.516,25.876 -26.439,36.437 -46.288,33.71 -56.849,19.786 -73.594,-2.291 -57.97,-34.5 -32.285,-40.026"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path2494"/>
                            </g>
                            <g id="g2496" transform="translate(95.7617,75.1035)">
                                <path
                                    d="M 0,0 C 6.07,10.527 19.524,14.141 30.051,8.071 36.394,4.414 40.227,-1.924 40.944,-8.687"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path2498"/>
                            </g>
                            <g id="g2500" transform="translate(312.0112,112.9248)">
                                <path d="M 0,0 C 0,0 12.509,-16.072 14.506,-33.149"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path2502"/>
                            </g>
                            <g id="g2504" transform="translate(363.0767,27.7412)">
                                <path
                                    d="m 0,0 c 8.842,5.611 14.71,15.488 14.71,26.736 0,17.475 -14.167,31.642 -31.642,31.642 -10.529,0 -19.857,-5.143 -25.61,-13.053"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path2506"/>
                            </g>
                            <g id="g2508" transform="translate(404.9741,47.4668)">
                                <path
                                    d="M 0,0 C -0.197,9.779 4.127,19.513 12.516,25.876 26.439,36.437 46.288,33.71 56.849,19.786 73.594,-2.291 57.97,-34.5 32.285,-40.026"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path2510"/>
                            </g>
                            <g id="g2512" transform="translate(416.2383,75.1035)">
                                <path
                                    d="M 0,0 C -6.07,10.527 -19.524,14.141 -30.051,8.071 -36.394,4.414 -40.227,-1.924 -40.944,-8.687"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path2514"/>
                            </g>
                            <g id="g2516" transform="translate(272.3755,136.7656)">
                                <path
                                    d="m 0,0 h -16.375 -16.376 c -28.643,-22.834 -16.413,-64.954 12.036,-82.322 2.658,-1.623 6.021,-1.623 8.679,0 C 16.413,-64.954 28.643,-22.834 0,0 Z"
                                    style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                    id="path2518"/>
                            </g>
                            <g id="g2520" transform="translate(311.9995,447.2598)">
                                <path d="M 0,0 H -111.999"
                                      style="fill:none;stroke:#000000;stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                      id="path2522"/>
                            </g>
                        </g>
                    </g>
                </g></svg>
        </div>

    </div>
</section>

<section class="clients" id="clients">
    <div class="container">
        <div class="image-side">
            <img class="client-image" src="img/nielsschut.webp" alt="Client image">
            <div class="client-text">
                <p>Binnenkort begint ons partnership tussen Sportunity en Werkdeal dus op dit moment is hier nog geen
                    tekst voor. Dit gaat in februari plaatsvinden.</p>
                <hr>
                <h4>Niels Schut</h4>
                <h6>CEO Sportunity</h6>
            </div>
        </div>
        <div class="text-side">
            <h3>Wat zeggen onze klanten?</h3>
            <p>Bij Werkdeal vinden wij het belangrijk om naar de klant te luisteren. Dit doen we door regelmatig een
                meeting te houden over de wensen & feedback van onze diensten.</p>
            <br>
            <p>Wij zijn er ook voor bedrijven met unieke wensen. Ons platform wordt telkens vernieuwd en verbeterd zodat
                we het nummer 1 doel van ons platform kunnen bereiken, meer sollicitanten krijgen op je vacatures!</p>
            <a class="cta-button btn-style" href="/contact">
                Contact
            </a>
        </div>
    </div>
</section>

<x-footer-bar></x-footer-bar>

</body>

<script>
    function scrollDiv() {
        var elem = document.getElementById("clients");
        elem.scrollIntoView();
    }
</script>
</html>
