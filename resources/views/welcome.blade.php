<!DOCTYPE html>
<html lang="{{ app()->isLocale('ar') ? 'ar' : 'en' }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- font awesome -->
        <link
        href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
        rel="stylesheet"
        />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
        />

        <!-- bootsatrap link  -->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
        />
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
        />

        <!-- Logo -->
        <link
        rel="shortcut icon"
        href="{{asset('imges/SobkyLogoo.png') }}"
        type="image/x-icon"
        />

        <!-- css  link  -->
        <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/styles' . (app()->isLocale('ar') ? 'ar' : 'en') . '.css') }}">

        <link rel="stylesheet" href="{{asset('css/responsive.css') }}" />
        <title>فورمتك معانا|سبكي كوتش</title>
        <meta
        name="description"
        content="مدرب لياقة بدنية معتمد دوليًا، أخصائي تغذية رياضية، المؤسس والرئيس التنفيذي لأكاديمية السبكي لتأهيل المدربين، حاصل على شهادات (NASM | CPT، NASM | CPR)."
        />
        <script src="{{asset('js/index.js') }}" defer></script>
    </head>
    <body>
        {{-- nav bar --}}
        <nav>
            <div class="nav__logo">
                <a href="/" style="font-size: 22px">
                <img src="{{asset('imges/Sobky-Logo.png') }}" alt="{{ __('messages.sobky_coach') }}" />
                </a>
            </div>
            <ul class="nav__links">
                <li class="link"><a href="#details" class="scroll-to">{{ __('messages.details') }}</a></li>
                <li class="link"><a href="#results" class="scroll-to">{{ __('messages.results') }}</a></li>
                <li class="link"><a href="#transformation" class="scroll-to">{{ __('messages.transformation') }}</a></li>
                <li class="link"><a href="#cashback" class="scroll-to">{{ __('messages.cashback') }}</a></li>
                <li class="link"><a href="#about" class="scroll-to">{{ __('messages.sobky_coach') }}</a></li>
            </ul>
            <button class="btn" onclick="scrollToPackage()">{{ __('messages.subscribe_now') }}</button>
        </nav>


        {{-- hero --}}
        <header class="section__container header__container section__container-res" id="home" >
            <div class="header__content">
                <span class="bg__blur"></span>
                <span class="bg__blur header__blur"></span>
                <h4 class="heading-home">{{ __('messages.hero_title') }}</h4>
                <h1>{!! __('messages.hero_subtitle') !!}</h1>
                <p>{{ __('messages.hero_description') }}</p>
                <button class="btn" onclick="scrollToPackage()">
                {{ __('messages.hero_button') }}
                </button>
            </div>
            <div class="header__image">
                <div class="video-widget-container">
                <div class="home-wrapper home-open-inline">
                    <iframe
                    class="home-video"
                    frameborder="0"
                    allowfullscreen=""
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    title="{{ __('hero_subtitle_title') }}"
                    width="640"
                    height="360"
                    src="https://www.youtube.com/embed/5XBkit_ocE4?si=RVEd5sYshs0T7oWz?controls=1&amp;rel=0&amp;playsinline=1&amp;modestbranding=0&amp;enablejsapi=1&amp;muted=1"
                    >
                    </iframe>
                    <div class="home-video-summery">
                    <h4 class="home-heading-title home-size-default">
                        {{ __('messages.browse_site') }}
                    </h4>
                    </div>
                </div>
                </div>
            </div>
        </header>

        {{-- program  --}}
        <section class="section__container section__container-res text-center amI" id="details">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <h2 class="details-heading-title py-5">{{ __('messages.details_heading') }}</h2>
                    <img src="{{asset('imges/1to10.gif') }}" alt="" class="ard-cash">
                    <div class="content-wrapper">
                        <p class="section__subheader">
                            {!! __('messages.content_wrapper.paragraph1') !!}
                        </p>
                        <p class="section__subheader">
                            {!! __('messages.content_wrapper.paragraph2') !!}
                        </p>
                    </div>
                    <div class="accordion" id="accordionDetails">
                        <h3 class="custom-heading">{{ __('messages.offer') }}</h3>

                        <!-- Card 1: خطة لنظام غذائي (دايت) متوازن -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <h5
                                class="mb-0"
                                style="
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                "
                            >
                                <p
                                data-toggle="collapse"
                                data-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                                data-number="1"
                                >
                                {{ __('messages.diet_plan') }}
                                </p>
                                <i
                                aria-hidden="true"
                                class="fa-toggle fas fa-plus"
                                data-toggle="collapse"
                                data-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                                ></i>
                            </h5>
                            </div>
                            <div
                            id="collapseOne"
                            class="collapse show"
                            aria-labelledby="headingOne"
                            data-parent="#accordionDetails"
                            >
                            <div class="card-body">
                                <ul>
                                <li>
                                    {{ __('messages.designed_for_you') }}
                                </li>
                                <li>
                                    {{ __('messages.calculated_calories') }}
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <!-- Card 2: خطة تمارين -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h5
                                class="mb-0"
                                style="
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                "
                            >
                                <p
                                data-toggle="collapse"
                                data-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                                data-number="2"
                                >
                                {{ __('messages.exercise_plan') }}
                                </p>
                                <i
                                aria-hidden="true"
                                class="fa-toggle fas fa-plus"
                                data-toggle="collapse"
                                data-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                                ></i>
                            </h5>
                            </div>
                            <div
                            id="collapseTwo"
                            class="collapse"
                            aria-labelledby="headingTwo"
                            data-parent="#accordionDetails"
                            >
                            <div class="card-body">
                                <ul>
                                    <li>{{ __('messages.build_based_on_level') }}</li>
                                    <li>{{ __('messages.set_goals_and_time') }}</li>
                                    <li>{{ __('messages.consider_all_aspects') }}</li>
                                    <li>{{ __('messages.proper_execution') }}</li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <!-- Card 3: ملف بصيغة (PDF) خاص للإطالات والإحماءات -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                            <h5
                                class="mb-0"
                                style="
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                "
                            >
                                <p
                                data-toggle="collapse"
                                data-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                                data-number="3"
                                >
                                {{ __('messages.pdf_description') }}
                                </p>
                                <i
                                aria-hidden="true"
                                class="fa-toggle fas fa-plus"
                                data-toggle="collapse"
                                data-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                                ></i>
                            </h5>
                            </div>
                            <div
                            id="collapseThree"
                            class="collapse"
                            aria-labelledby="headingThree"
                            data-parent="#accordionDetails"
                            >
                            <div class="card-body">
                                <ul>
                                    <li>{{ __('messages.dynamic_and_static') }}</li>
                                    <li>{{ __('messages.modify_body_shape') }}</li>
                                    <li>{{ __('messages.muscle_recovery') }}</li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <!-- Card 4: روتين للكارديو وعضلات الكور CORE -->
                        <div class="card">
                            <div class="card-header" id="headingFour">
                            <h5
                                class="mb-0"
                                style="
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                "
                            >
                                <p
                                data-toggle="collapse"
                                data-target="#collapseFour"
                                aria-expanded="false"
                                aria-controls="collapseFour"
                                data-number="4"
                                >
                                {{ __('messages.cardio_routine') }}
                                </p>
                                <i
                                aria-hidden="true"
                                class="fa-toggle fas fa-plus"
                                data-toggle="collapse"
                                data-target="#collapseFour"
                                aria-expanded="false"
                                aria-controls="collapseFour"
                                ></i>
                            </h5>
                            </div>
                            <div
                            id="collapseFour"
                            class="collapse"
                            aria-labelledby="headingFour"
                            data-parent="#accordionDetails"
                            >
                            <div class="card-body">
                                <ul>
                                    <li>{{ __('messages.cardio_and_core_goal') }}</li>
                                    <li>{{ __('messages.full_core_exercise') }}</li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <!-- Card 5: التركيز على التقدم وقياسه -->
                        <div class="card">
                            <div class="card-header" id="headingFive">
                            <h5
                                class="mb-0"
                                style="
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                "
                            >
                                <p
                                data-toggle="collapse"
                                data-target="#collapseFive"
                                aria-expanded="false"
                                aria-controls="collapseFive"
                                data-number="5"
                                >
                                    {{ __('messages.focus_and_measurement') }}

                                </p>
                                <i
                                aria-hidden="true"
                                class="fa-toggle fas fa-plus"
                                data-toggle="collapse"
                                data-target="#collapseFive"
                                aria-expanded="false"
                                aria-controls="collapseFive"
                                ></i>
                            </h5>
                            </div>
                            <div
                            id="collapseFive"
                            class="collapse"
                            aria-labelledby="headingFive"
                            data-parent="#accordionDetails"
                            >
                            <div class="card-body">
                                <ul>
                                    <li>{{ __('messages.progress_tracking_sheet') }}</li>
                                    <li>{{ __('messages.level_determination') }}</li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <!-- Card 6: المتابعة المستمرة -->
                        <div class="card">
                            <div class="card-header" id="headingSix">
                            <h5
                                class="mb-0"
                                style="
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                "
                            >
                                <p
                                data-toggle="collapse"
                                data-target="#collapseSix"
                                aria-expanded="false"
                                aria-controls="collapseSix"
                                data-number="6"
                                >
                                {{ __('messages.continuous_follow_up') }}
                                </p>
                                <i
                                aria-hidden="true"
                                class="fa-toggle fas fa-plus"
                                data-toggle="collapse"
                                data-target="#collapseSix"
                                aria-expanded="false"
                                aria-controls="collapseSix"
                                ></i>
                            </h5>
                            </div>
                            <div
                            id="collapseSix"
                            class="collapse"
                            aria-labelledby="headingSix"
                            data-parent="#accordionDetails"
                            >
                            <div class="card-body">
                                <ul>
                                    <li>{{ __('messages.goal_follow_up') }}</li>
                                    <li>{{ __('messages.see_results_motivation') }}</li>
                                    <li>{{ __('messages.ask_questions') }}</li>
                                    <li>{{ __('messages.weekly_follow_up') }}</li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <!-- Card 7: بديل لعناصر النظام الغذائي (الدايت) -->
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                            <h5
                                class="mb-0"
                                style="
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                "
                            >
                                <p
                                data-toggle="collapse"
                                data-target="#collapseSeven"
                                aria-expanded="false"
                                aria-controls="collapseSeven"
                                data-number="7"
                                >
                                {{ __('messages.diet_alternatives') }}
                                </p>
                                <i
                                aria-hidden="true"
                                class="fa-toggle fas fa-plus"
                                data-toggle="collapse"
                                data-target="#collapseSeven"
                                aria-expanded="false"
                                aria-controls="collapseSeven"
                                ></i>
                            </h5>
                            </div>
                            <div
                            id="collapseSeven"
                            class="collapse"
                            aria-labelledby="headingSeven"
                            data-parent="#accordionDetails"
                            >
                            <div class="card-body">
                                <ul>
                                    <li>{{ __('messages.food_variety') }}</li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <!-- Card 8: تمارين بديلة لتمارين البرنامج -->
                        <div class="card">
                            <div class="card-header" id="headingEight">
                            <h5
                                class="mb-0"
                                style="
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                "
                            >
                                <p
                                data-toggle="collapse"
                                data-target="#collapseEight"
                                aria-expanded="false"
                                aria-controls="collapseEight"
                                data-number="8"
                                >
                                {{ __('messages.exercise_alternatives') }}
                                </p>
                                <i
                                aria-hidden="true"
                                class="fa-toggle fas fa-plus"
                                data-toggle="collapse"
                                data-target="#collapseEight"
                                aria-expanded="false"
                                aria-controls="collapseEight"
                                ></i>
                            </h5>
                            </div>
                            <div
                            id="collapseEight"
                            class="collapse"
                            aria-labelledby="headingEight"
                            data-parent="#accordionDetails"
                            >
                            <div class="card-body">
                                <ul>
                                    <li>{{ __('messages.exercise_variety') }}</li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <!-- Card 9: التعلم -->
                        <div class="card">
                            <div class="card-header" id="headingNine">
                            <h5
                                class="mb-0"
                                style="
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                "
                            >
                                <p
                                data-toggle="collapse"
                                data-target="#collapseNine"
                                aria-expanded="false"
                                aria-controls="collapseNine"
                                data-number="9"
                                >
                                {{ __('messages.learning') }}
                                </p>
                                <i
                                aria-hidden="true"
                                class="fa-toggle fas fa-plus"
                                data-toggle="collapse"
                                data-target="#collapseNine"
                                aria-expanded="false"
                                aria-controls="collapseNine"
                                ></i>
                            </h5>
                            </div>
                            <div
                            id="collapseNine"
                            class="collapse"
                            aria-labelledby="headingNine"
                            data-parent="#accordionDetails"
                            >
                            <div class="card-body">
                                <ul>
                                    <li>{{ __('messages.journey_info.first_item') }}</li>
                                    <li>{{ __('messages.journey_info.second_item') }}</li>
                                </ul>

                            </div>
                            </div>
                        </div>

                        <!-- Card 10: الدعم النفسي -->
                        <div class="card">
                            <div class="card-header" id="headingTen">
                            <h5
                                class="mb-0"
                                style="
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                "
                                >
                                <p
                                data-toggle="collapse"
                                data-target="#collapseTen"
                                aria-expanded="false"
                                aria-controls="collapseTen"
                                data-number="10"
                                >
                                {{ __('messages.emotional_support') }}
                                </p>
                                <i
                                aria-hidden="true"
                                class="fa-toggle fas fa-plus"
                                data-toggle="collapse"
                                data-target="#collapseTen"
                                aria-expanded="false"
                                aria-controls="collapseTen"
                                ></i>
                            </h5>
                            </div>
                            <div
                            id="collapseTen"
                            class="collapse"
                            aria-labelledby="headingTen"
                            data-parent="#accordionDetails"
                            >
                            <div class="card-body">
                                <ul>
                                    <li>{{ __('messages.support_info.item') }}</li>
                                </ul>

                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional content -->
                    <div class="accordion" id="accordionDetails">
                        <h3 class="custom-heading">{{ __('messages.accordion.title') }}</h3>
                        <!-- Card 1: الالتزام والاستمرارية -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0" style="display: flex; justify-content: space-between; align-items: center;">
                                    <p data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" data-number="1">
                                        {{ __('messages.accordion.commitment.title') }}
                                    </p>
                                    <i aria-hidden="true" class="fa-toggle fas fa-plus" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></i>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionDetails">
                                <div class="card-body">
                                    <ul>
                                        <li>{{ __('messages.accordion.commitment.description') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                </div>
            </div>
        </section>

        {{-- results clients  --}}
        <section class="section__container explore__container section__container-res text-center" id="results" >
            <div class="explore__header d-flex">
                <h2 class="section-heading-title py-5">{{ __('messages.some_clients_results') }}</h2>
            </div>
            <div class="swiper video_swiper">
                <div class="card__content__video">
                <div class="swiper-wrapper">
                    <iframe
                    class="explore__video swiper-slide"
                    width="326"
                    height="579"
                    src="https://www.youtube.com/embed/xa1hBKkHBLI"
                    title="Super Proud of You ya Wahid ❤️"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    ></iframe>
                    <iframe
                    class="explore__video swiper-slide"
                    width="326"
                    height="579"
                    src="https://www.youtube.com/embed/2n6aowWXUgA"
                    title="Super Proud of You ya Taha ❤️"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    ></iframe>
                    <iframe
                    class="explore__video swiper-slide"
                    width="326"
                    height="579"
                    src="https://www.youtube.com/embed/GBVrirvxGZQ"
                    title="برغم الغربة و وجوده في روسيا انور اتحدى نفسه وقدرنا نوصل للفورمة اللي بيحلم بيها🏋فخور بيك حقيقي😎❤"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    ></iframe>
                    <iframe
                    class="explore__video swiper-slide"
                    width="326"
                    height="579"
                    src="https://www.youtube.com/embed/n_Gfs9PWlyc"
                    title="⏳Super proud of you Mina ❤️😌"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    ></iframe>
                    <iframe
                    class="explore__video swiper-slide"
                    width="326"
                    height="579"
                    src="https://www.youtube.com/embed/oncWFbRTQw8"
                    title="صلاح عملها في اسبوعين🔥"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    ></iframe>
                    <iframe
                    class="explore__video swiper-slide"
                    width="326"
                    height="579"
                    src="https://www.youtube.com/embed/rHLHY7dm_oI"
                    title="🚨Another Legendary Transformation ✨ Muhammad Hamed Super Proud of You 🏋❤"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    ></iframe>
                </div>
                <div class="explore__header">
                    <div class="explore__nav">
                    <span class="swiper-button-prev"></span>
                    <span class="swiper-button-next"></span>
                    </div>
                </div>
                </div>
            </div>
            <div
                class="row"
                style="
                justify-content: center;
                align-items: center;
                margin-top: 50px;"
                >
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn">
                    {{ __('messages.get_results') }}
                    </button>
                </div>
            </div>
        </section>

        {{-- al-abtaal transformation--}}
        <section class="cards-section section__container bg text-center" style="max-width: 100%" id="transformation" >
            <div class="container">
                <div class="explore__header d-flex">
                    <h2 class="section-heading-title py-5">{{ __('messages.section_transformation') }}</h2>
                </div>
                <div class="row">
                    <ul>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/01.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/02.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/03.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/04.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/05.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/06.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/07.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/08.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/09.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/010.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/011.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/1.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/2.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/3.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/4.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/5.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/6.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/7.png') }}" alt="" />
                        </figure>
                        </li>
                        <li class="product">
                        <figure>
                            <img src="{{asset('imges/Clients/8.png') }}" alt="" />
                        </figure>
                        </li>
                    </ul>
                </div>
                <div
                    class="row"
                    style="
                    justify-content: center;
                    align-items: center;
                    margin-top: 50px;"
                    >
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button
                        class="btn"
                        >
                            {{ __('messages.join_now') }}
                        </button>
                    </div>
                </div>
            </div>
        </section>

        {{-- feedback  --}}
        <section class="section__container explore__container section__container-res text-center" id="feedback" >
            <div class="explore__header d-flex">
                <h2 class="section-heading-title py-5">{{ __('messages.section_customer_reviews') }}</h2>
            </div>
            <div class="header__content">
                <div class="swiper">
                <div class="card__images">
                    <div class="swiper-wrapper">
                    <!-- Image 1 -->
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/1.PNG') }}" alt="Image 1" />
                    </div>
                    <!-- Image 2 -->
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/2.PNG') }}" alt="Image 2" />
                    </div>
                    <!-- Image 3 -->
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/3.PNG') }}" alt="Image 3" />
                    </div>
                    <!-- Image 4 -->
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/4.PNG') }}" alt="Image 4" />
                    </div>
                    <!-- Image 5 -->
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/5.PNG') }}" alt="Image 4" />
                    </div>
                    <!-- Image 7 -->
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/6.PNG') }}" alt="Image 4" />
                    </div>
                    <!-- Image 8 -->
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/7.PNG') }}" alt="Image 4" />
                    </div>
                    <!-- Image 9 -->
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/8.PNG') }}" alt="Image 4" />
                    </div>
                    <!-- Image 10 -->
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/9.PNG') }}" alt="Image 4" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/10.PNG') }}" alt="Image 4" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/11.PNG') }}" alt="Image 4" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/12.PNG') }}" alt="Image 4" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/13.PNG') }}" alt="Image 4" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('imges/Feedbacks/14.PNG') }}" alt="Image 4" />
                    </div>
                    </div>
                    <div class="explore_images">
                    <div class="explore__nav__images">
                        <span class="swiper-button-prev"></span>
                        <span class="swiper-button-next"></span>
                    </div>
                    <!-- Pagination Bullets -->
                    <div class="swiper-pagination mtop"></div>
                    </div>
                </div>
                </div>
            </div>
            <div
                class="row"
                style="
                justify-content: center;
                align-items: center;
                margin-top: 50px;"
                >
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn">
                        {{ __('messages.get_results') }}
                    </button>
                </div>
            </div>
        </section>

        {{-- cashbback  --}}
        <section class="section__container join__container" id="cashback">
            <h2 class="section__header section-heading-title">{{ __('messages.cashback_offer_title') }}</h2>
            <p class="section__subheader">{{ __('messages.cashback_offer_description') }}</p>
            <div class="price__grid" id="subscribe">
                <div class="price__card">
                    <div class="price__card__content">
                        <h3>{{ __('messages.new_challenge') }}</h3>
                        <div class="content-list">
                            <div class="icon-package">
                                <i class="fa-solid fa-reply"></i>
                                <p>
                                    {{!! __('messages.introductory_call') !!}}
                                </p>
                            </div>
                        </div>
                        <div class="sale mt-10">
                            <img src="{{asset('imges/package/sale.gif') }}" alt="" />
                        </div>

                        <div class="buttons">
                            <button
                                class="btn price__btn mounthlyBtn"
                                data-months="3"
                                data-package="golden"
                                onclick="showPriceDetailsGolden(3)"
                            >
                                3 شهور
                            </button>
                            <button
                                class="btn price__btn mounthlyBtn"
                                data-months="6"
                                data-package="golden"
                                onclick="showPriceDetailsGolden(6)"
                            >
                                6 أشهر
                            </button>
                            <button
                                class="btn price__btn mounthlyBtn"
                                data-months="9"
                                data-package="golden"
                                onclick="showPriceDetailsGolden(9)"
                            >
                                9 أشهر
                            </button>
                        </div>

                        <div id="priceDetailsGolden">
                            <!-- ستعرض تفاصيل الأسعار هنا -->
                        </div>
                    </div>
                    <button class="btn price__btn joinNow">{{ __('messages.subscribe_now') }}</button>
                </div>
            </div>
            <!-- Confetti JS -->
            <script src="{{asset('js/confetti.min.js') }}"></script>
            <script>
                // Function to handle intersection changes
                function handleIntersection(entries, observer) {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                    startConfetti();
                    } else {
                    stopConfetti();
                    }
                });
                }

                // Set up the Intersection Observer
                const observer = new IntersectionObserver(handleIntersection, {
                root: null,
                rootMargin: "0px",
                threshold: 0.5, // Adjust as needed
                });

                // Observe the section
                const cashbackSection = document.getElementById("cashback");
                observer.observe(cashbackSection);

                // Start confetti
                function startConfetti() {
                setTimeout(function () {
                    confetti.start();
                }, 100); // 100 ms
                }

                // Stop confetti
                function stopConfetti() {
                setTimeout(function () {
                    confetti.stop();
                }, 500); // 500 ms
                }
            </script>
        </section>


        {{-- about us  --}}
        <section class="coach-section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 gridlabb">
                        <h2
                        class="section-title section__header section-heading-title py-5"
                        >
                        {{ __('messages.coach_section_title') }}
                        </h2>
                        <ul class="coach-list">
                        <li>
                            {{ __('messages.coach_list_item_1') }}
                        </li>
                        <li>
                            {{ __('messages.coach_list_item_2') }}
                        </li>
                        <li>
                            {{ __('messages.coach_list_item_3') }}
                        </li>
                        <li>
                            {{ __('messages.coach_list_item_4') }}
                        </li>
                        </ul>
                        <button
                        class="btn"
                        data-phone="+201069847600"
                        data-message="{{ __('messages.whatsapp_message') }}"
                        role="button"
                        onclick=" whatsappCall()"
                        >
                        {{ __('messages.whatsapp_contact') }}
                        </button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img
                        src="{{asset('imges/DSC07507.png') }}"
                        alt="class"
                        class="coach-image"
                        />
                    </div>
                </div>
            </div>
        </section>

        {{-- faq  --}}
        <section class="section__container section__container-res text-center amI" id="details" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="details-heading-title py-5">{{ __('messages.faq_section_title') }}</h2>
                        <div class="accordion" id="accordionDetails">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5
                                        class="mb-0"
                                        style="
                                        display: flex;
                                        justify-content: space-between;
                                        align-items: center;
                                        "
                                        >
                                        <p
                                        data-toggle="collapse"
                                        data-target="#collapseOne"
                                        aria-expanded="true"
                                        aria-controls="collapseOne"
                                        data-number="1"
                                        >
                                        {{ __('messages.faq_question_1') }}
                                        </p>
                                        <i
                                        aria-hidden="true"
                                        class="fa-toggle fas fa-plus"
                                        data-toggle="collapse"
                                        data-target="#collapseOne"
                                        aria-expanded="true"
                                        aria-controls="collapseOne"
                                        ></i>
                                    </h5>
                                </div>

                                <div
                                    id="collapseOne"
                                    class="collapse"
                                    aria-labelledby="headingOne"
                                    data-parent="#accordionDetails"
                                    >
                                    <div class="card-body">
                                        <ul>
                                        <li>

                                            {{ __('messages.faq_answer_1') }}
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                <h5
                                    class="mb-0"
                                    style="
                                    display: flex;
                                    justify-content: space-between;
                                    align-items: center;
                                    "
                                >
                                    <p
                                    data-toggle="collapse"
                                    data-target="#collapseTwo"
                                    aria-expanded="true"
                                    aria-controls="collapseTwo"
                                    data-number="2"
                                    >
                                    {{ __('messages.faq_question_2') }}
                                    </p>
                                    <i
                                    aria-hidden="true"
                                    class="fa-toggle fas fa-plus"
                                    data-toggle="collapse"
                                    data-target="#collapseTwo"
                                    aria-expanded="true"
                                    aria-controls="collapseTwo"
                                    ></i>
                                </h5>
                                </div>
                                <div
                                id="collapseTwo"
                                class="collapse"
                                aria-labelledby="headingTwo"
                                data-parent="#accordionDetails"
                                >
                                <div class="card-body">
                                    <ul>
                                    <li>
                                        {{ __('messages.faq_answer_2') }}
                                    </li>
                                    </ul>
                                </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                <h5
                                    class="mb-0"
                                    style="
                                    display: flex;
                                    justify-content: space-between;
                                    align-items: center;
                                    "
                                >
                                    <p
                                    data-toggle="collapse"
                                    data-target="#collapseThree"
                                    aria-expanded="true"
                                    aria-controls="collapseThree"
                                    data-number="3"
                                    >
                                    {{ __('messages.faq_question_3') }}
                                    </p>
                                    <i
                                    aria-hidden="true"
                                    class="fa-toggle fas fa-plus"
                                    data-toggle="collapse"
                                    data-target="#collapseThree"
                                    aria-expanded="true"
                                    aria-controls="collapseThree"
                                    ></i>
                                </h5>
                                </div>
                                <div
                                id="collapseThree"
                                class="collapse"
                                aria-labelledby="headingThree"
                                data-parent="#accordionDetails"
                                >
                                <div class="card-body">
                                    <ul>
                                    <li>
                                        {{ __('messages.faq_answer_3') }}
                                    </li>
                                    </ul>
                                </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                <h5
                                    class="mb-0"
                                    style="
                                    display: flex;
                                    justify-content: space-between;
                                    align-items: center;
                                    "
                                >
                                    <p
                                    data-toggle="collapse"
                                    data-target="#collapseFour"
                                    aria-expanded="true"
                                    aria-controls="collapseFour"
                                    data-number="4"
                                    >
                                    {{ __('messages.faq_question_4') }}
                                    </p>
                                    <i
                                    aria-hidden="true"
                                    class="fa-toggle fas fa-plus"
                                    data-toggle="collapse"
                                    data-target="#collapseFour"
                                    aria-expanded="true"
                                    aria-controls="collapseFour"
                                    ></i>
                                </h5>
                                </div>
                                <div
                                id="collapseFour"
                                class="collapse"
                                aria-labelledby="headingFour"
                                data-parent="#accordionDetails"
                                >
                                <div class="card-body">
                                    <ul>
                                    <li>
                                        {{ __('messages.faq_answer_4') }}
                                    </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer">
            <p class="text-center m-0">
                {{ __('messages.copyright_notice') }}
            </p>
            <div class="footer__socials">
                <a href="https://www.facebook.com/coachAlsobky?mibextid=LQQJ4d"
                ><i class="ri-facebook-fill"></i
                ></a>
                <a href="https://www.instagram.com/coachsobky/?igsh=N3I2aXE2cmMxejk0"
                ><i class="ri-instagram-line"></i
                ></a>
                <a href="https://api.whatsapp.com/send?phone=01069847600"
                ><i class="ri-whatsapp-fill"></i
                ></a>
            </div>
        </section>

        <div id="qlwapp" class="qlwapp">
            <div class="qlwapp-container">
                <a
                id="whatsappLink"
                class="qlwapp-toggle"
                data-phone="+201069847600"
                data-message="{{ __('messages.whatsapp_message') }}"
                role="button"
                tabindex="0"
                >
                <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>

        <div class="countdown-wrapper">
            <div class="countdown-content">
                <p>
                    {{ __('messages.subscribe_now_message') }}

                </p>
                <button class="btn" onclick="scrollToPackage()">
                    {{ __('messages.subscribe_now') }}
                </button>
            </div>
        </div>

        {{-- SWIPER JS  --}}
        <script src="{{asset('js/swiper-bundle.min.js') }}"></script>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
        ></script>

        {{-- MAIN JS --}}
        <script src="{{asset('js/main.js') }}"></script>

        {{-- Bootstrap JS  --}}
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        {{-- Font Awesome JS  --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    </body>
</html>
