<body>
    <!--BANNER SECTION-->
    <div class="banner-container">
        <!--<img class="banner" src="img/Jampromo_background.png">-->
        <img class="banner_logo" src="img/Jampromo_2022_2.png">
        <div class="benefitting_div">
            <h3 class="banner_text">Benefitting</h3>
            <a href="https://tiltify.com/doctors-without-borders-msf"><img class="mfs" src="img/msf_logo.png"></a>
        </div>
    </div>
    <br>
    <div class="raised_container">
        <script>
            var g_Url = "https://bot.tf2maps.net/livecount.php";
            var g_Element = document.querySelector(".amount_raised");

            function GetAmount() {
                return new Promise(async (rs, rj) => {

                    var data = await fetch(g_Url).then(r => r.json());
                    var amount = data.amount;
                    rs(amount);

                });
            }

            async function UpdateCounter() {
                if (!g_Element)
                    return;

                var count = await GetAmount();
                g_Element.innerText = `Raised: $${count}`;
            }
            document.addEventListener("DOMContentLoaded", function () {
                UpdateCounter();
            });
        </script>
        <h1 class="amount_raised">Raised: $0.00</h1>
    </div>
    <br>
    <!--ABOUT SECTION-->
    <div class="about_section">
        <!--container-->
        <div class="">
            <!--Top section-->
            <div class="container what_is_section flex">
                <div class="what_is">
                    <h2>WHAT IS THE TF2MAPS JAM?</h2>
                    <p>For anyone new to the concept of the 72hr Jam, the 72hr Jam is a yearly
                        TF2Maps tradition where the community dedicates 3 days of their time to
                        producing cool content themed around <a href="https://www.teamfortress.com/">Team Fortress
                            2</a>! This includes
                        maps, models, warpaints, animations, videos, paintings, drawings, mods,
                        fan-fiction, woodwork, stonework, legwork, homework, and everything
                        else in-between so long as it's related to Team Fortress 2!
                        <br>
                        <br>
                        This year, we're partnering with <a
                            href="https://tiltify.com/doctors-without-borders-msf">Doctors Without Borders/Médecins Sans
                            Frontières</a>.
                        Doctors Without Borders is an independent medical humanitarian organization
                        that delivers emergency aid to people affected by armed conflict, epidemics,
                        malnutrition, natural disasters, and exclusion from health care, without regard
                        to race, religion, or political affiliation. On any given day, in over 72 countries,
                        more than 45,200 individuals representing dozens of nationalities assist people
                        caught in crises around the world. They are doctors, nurses, logistics experts,
                        administrators, epidemiologists, laboratory technicians, mental health
                        professionals, and others whose work is guided by humanitarian principles
                        and medical ethics. MSF medical teams conduct evaluations on the ground
                        to determine a population's medical needs before opening programs,
                        aiming to fill existing gaps (rather than replicating services that are already
                        offered) or reach neglected communities.
                    </p>
                </div>
                <div class="about_image">
                    <img src="img/MSF_Spain_Pop_Up_Hospital.png">
                </div>
            </div>
            <!--bottom section-->
            <div class="container medals_section flex">

                <div class="medal_showcase">
                    <img class="medal" src="img/jammedal_promo2.png">
                    <img class="medal" src="img/jammedal_promo1.png">

                </div>
                <div class="medal_info">
                    <h2>IN-GAME MEDALS!</h2>
                    <p>As always, you are able to recieve a medal simply by participating in the Jam!
                        All you need to do is create some TF2-related content within 72 hours, and
                        submit it to the 72hr Jam category on TF2Maps.net, and you should recieve
                        your medal in roughly 4-6 weeks following the end of the event!

                        <br><br>
                        As a bonus for <a href="">donating to the campaign</a>, you'll receive an in-game medal
                        if you donate at least 5$ (Items count too) before August 1st, 2022!
                        Although you won't be able to recieve a medal by donating after this date,
                        our charity drive this year is open until August 26th, 2022.
                        <br><br>
                        Additionally, we will be providing other donation incentives for the duration
                        of our livestreams, so be sure to tune in and check that out!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--GUESTS SECTION-->
    <div class="guests_container">
        <h2 class="guests_title">SCHEDULED GUESTS</h2>
        <div class="guests_layout">
            <div class="guests_grid">
                <center>
                    <div class="guest">
                        <img src="img/agro.gif" class="guest_img">
                        <h3 class="guest_title">Agro</h3>
                        <!--<div class="guest_title">Nesman</div>-->
                    </div>
                    <div class="guest">
                        <img src="img/arrayseven.png" class="guest_img">
                        <h3 class="guest_title">ArraySeven</h3>
                    </div>
                    <div class="guest">
                        <img src="img/casperr.png" class="guest_img">
                        <h3 class="guest_title">Casperr</h3>
                    </div>
                    <div class="guest">
                        <img src="img/caylegeorge.png" class="guest_img">
                        <h3 class="guest_title">CayleGeorge</h3>
                        <!--<div class="guest_title">Nesman</div>-->
                    </div>
                    <div class="guest">
                        <img src="img/dewill.png" class="guest_img">
                        <h3 class="guest_title">DEWILL</h3>
                    </div>
                    <div class="guest">
                        <img src="img/grizzlyberry.png" class="guest_img">
                        <h3 class="guest_title">GrizzlyBerry</h3>
                    </div>
                    <div class="guest">
                        <img src="img/jbird.png" class="guest_img">
                        <h3 class="guest_title">jbird</h3>
                        <!--<div class="guest_title">Nesman</div>-->
                    </div>
                    <div class="guest">
                        <img src="img/kaya.png" class="guest_img">
                        <h3 class="guest_title">KAYA</h3>
                    </div>
                    <div class="guest">
                        <img src="img/moonly.png" class="guest_img">
                        <h3 class="guest_title">MoonlyDays</h3>
                    </div>
                    <div class="guest">
                        <img src="img/shork.png" class="guest_img">
                        <h3 class="guest_title">Shork</h3>
                        <!--<div class="guest_title">Nesman</div>-->
                    </div>
                    <div class="guest">
                        <img src="img/solarlight.png" class="guest_img">
                        <h3 class="guest_title">SolarLight</h3>
                    </div>
                    <div class="guest">
                        <img src="img/surny.png" class="guest_img">
                        <h3 class="guest_title">Surny</h3>
                    </div>
                    <div class="guest">
                        <img src="img/ueakcrash.png" class="guest_img">
                        <h3 class="guest_title">UEAKCrash</h3>
                    </div>

                </center>
            </div>
        </div>

    </div>

    <!--THE TEAM SECTION-->

    <div class="team_container">
        <h2 class="team_banner_title">MEET THE TEAM</h2>
        <div class="team_layout">
            <div class="team_grid">
                <center>
                    <div class="team" id="nesman">
                        <img src="img/nesman.gif" class="team_img">
                        <div class="team_title">Nesman</div>
                        <div class="team_desc">Jam Organizer, Backend, TF2Maps Staff.</div>

                        <div class="team_socials">
                            <a class="mdi mdi-steam" href=""></a>
                            <a class="mdi mdi-twitter" href=""></a>
                        </div>


                        <!--I'm not doing this for everyone.-->
                        <audio id="yeayah" preload="auto">
                            <source src="sounds/yeayah.ogg" controls>
                        </audio>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <script>
                            var audio = $("#yeayah")[0];
                            $("#nesman").mouseenter(function () {
                                audio.play();
                            });
                        </script>
                        <!--<div class="guest_title">Nesman</div>-->
                    </div>
                    <div class="team">
                        <img src="img/suna.jpg" class="team_img">
                        <div class="team_title">Suna</div>
                        <div class="team_desc">Jam Organizer, Backend, TF2Maps Staff.</div>

                        <div class="team_socials">
                            <a class="mdi mdi-steam" href=""></a>
                            <a class="mdi mdi-twitter" href=""></a>
                        </div>
                    </div>
                    <div class="team">
                        <img src="img/14bit.png" class="team_img">
                        <div class="team_title">14Bit</div>
                        <div class="team_desc">Jam Organizer, Backend, TF2Maps Staff.</div>


                        <div class="team_socials">
                            <a class="mdi mdi-steam" href=""></a>
                            <a class="mdi mdi-twitter" href=""></a>
                        </div>
                    </div>
                    <div class="team">
                        <img src="img/erk.png" class="team_img">
                        <div class="team_title">Erk</div>
                        <div class="team_desc">Jam Organizer, Dog Poster, TF2Maps Staff.<br><br><br> Erk.</div>


                        <div class="team_socials">
                            <a class="mdi mdi-steam" href=""></a>
                            <a class="mdi mdi-twitter" href=""></a>
                        </div>
                    </div>
                    <div class="team">
                        <img src="img/flipy.png" class="team_img">
                        <div class="team_title">Flipy</div>
                        <div class="team_desc">TF2Maps Staff, 2D Artist.</div>


                        <div class="team_socials">
                            <a class="mdi mdi-steam" href=""></a>
                            <a class="mdi mdi-twitter" href=""></a>
                        </div>
                    </div>
                    <div class="team">
                        <img src="img/neavlof.png" class="team_img">
                        <div class="team_title">Neavlof</div>
                        <div class="team_desc">2D Artist.</div>


                        <div class="team_socials">
                            <a class="mdi mdi-steam" href=""></a>
                            <a class="mdi mdi-twitter" href=""></a>
                        </div>
                    </div>
                    <div class="team">
                        <img src="img/mcl15.png" class="team_img">
                        <div class="team_title">MCL15</div>
                        <div class="team_desc">3D Artist, 2D Artist.</div>


                        <div class="team_socials">
                            <a class="mdi mdi-steam" href=""></a>
                            <a class="mdi mdi-twitter" href=""></a>
                        </div>
                    </div>
                    <div class="team">
                        <img src="img/hotrod.png" class="team_img">
                        <div class="team_title">Hotrod McCoolgal</div>
                        <div class="team_desc">3D Artist, 2D Artist.</div>


                        <div class="team_socials">
                            <a class="mdi mdi-steam" href=""></a>
                            <a class="mdi mdi-twitter" href=""></a>
                        </div>
                    </div>
                    <div class="team">
                        <img src="img/maid.png" class="team_img">
                        <div class="team_title">Maid</div>
                        <div class="team_desc">2D Artist.</div>


                        <div class="team_socials">
                            <a class="mdi mdi-steam" href=""></a>
                            <a class="mdi mdi-twitter" href=""></a>
                        </div>
                    </div>
                    <div class="team">
                        <img src="img/phe.png" class="team_img">
                        <div class="team_title">Phe</div>
                        <div class="team_desc">3D Artist.</div>


                        <div class="team_socials">
                            <a class="mdi mdi-steam" href=""></a>
                            <a class="mdi mdi-twitter" href=""></a>
                        </div>
                    </div>
                    <div class="team">
                        <img src="img/bonk.png" class="team_img">
                        <div class="team_title">Bonk</div>
                        <div class="team_desc">3D Artist.</div>


                        <div class="team_socials">
                            <a class="mdi mdi-steam" href=""></a>
                            <a class="mdi mdi-twitter" href=""></a>
                        </div>
                    </div>
                </center>
            </div>
        </div>

    </div>


</body>