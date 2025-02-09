@extends('layouts.website')
@section('body')
    <!-- About Me Sectin Start -->
    <section class="bg-secondary pt-20 pb-[120px]" data-aos="zoom-in">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[60px] xl:gap-[134px]">
                <img class="mx-auto" src="{{asset('assets/images/img1.jpg')}}" alt="about me">
                <div class="font-bold font-Syne leading-none flex flex-wrap flex-col gap-y-2"> <br>
                    <span class="text-orange text-xl">About me</span>
                    <h3 class="text-black-800 text-4xl lg:text-5xl xl:text-[64px] tracking-[-1.5px]">
                        Anesu Gandiwa
                    </h3>

                    <h4 class="text-black-800 text-2xl mt-3 mb-4">Software Engineer</h4>
                    <p class="text-xl font-bold font-Syne'] leading-7 mb-6">
                        A software Engineer and I am in the game for over 2 years. I am proud of my
                        works and ready to face the next challenge
                    </p>
                    <p class="paragraph mb-6">
                        l am a dynamic and flexible individual who thrives in any situation despite
                        how challenging it can be. l am a self motivated individual who can work in a totally
                        unsupervised environment and still produce state-of-the-art results. As a collaborative team player,
                        l consistantly go above and
                        beyond to ensure the delivery of meticulously planned and thought-out solutions.
                    </p>




                </div>
            </div>
        </div>
    </section>
    <!-- About Me Sectin End -->
    <!-- Experience Sectin Start -->
    <section class="bg-white py-[120px] overflow-x-hidden">
        <div class="container" data-aos="zoom-out">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-[60px] xl:gap-[134px]">
                <div class="font-bold font-Syne leading-none flex flex-wrap flex-col gap-y-2">
                    <h3 class="text-black-800 text-4xl lg:text-5xl xl:text-[64px] tracking-[-1.5px] mb-5">
                        My vision is to create happy to my clients
                    </h3>
                    <p class="paragraph mb-7">
                        A software Engineer and I am in the game for over 2 years. I am proud of my
                        works and ready to face the next challenge
                    </p>
                    <ul class="flex flex-wrap gap-9 2xl:gap-[40px]">


                        <li>

                                <span
                                    class="text-black-800 text-[32px] font-bold font-Syne leading-10 relative before:rounded-full before:bg-black-300 before:block before:absolute before:top-[0px] before:left-0 before:right-0 before:-z-[1] before:w-[43px] before:h-[43px]">10</span>
                            <p class="paragraph">Job done successfully</p>
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col justify-end">
                    <div class="flex flex-wrap flex-col mb-12">
                            <span
                                class="text-black-800 text-[65px] xl:text-[80px] font-bold font-Syne leading-none inline-block relative z-10 before:rounded-full before:bg-primary before:block before:absolute before:top-[50%] before:left-[-13px] before:-z-[1] before:w-[95px] lg:before:w-[100px] xl:before:w-[110px] before:h-[95px] lg:before:h-[100px] xl:before:h-[110px] before:translate-y-[-50%]">1</span>
                        <span class="strock-text mt-5">Years of <br> experience</span>

                    </div>

                    <div class="px-6 py-6 bg-black-800 rounded-lg flex flex-wrap justify-between items-end group">
                        <div class="flex flex-col flex-wrap gap-y-2">
                            <span class="text-orange text-lg font-normal leading-none">SAY HELLO!</span>
                            <h4 class="text-white text-2xl xl:text-[32px] font-bold font-Syne leading-none">
                                anesugandiwa9@gmail.com
                            </h4>
                        </div>
                        <div class="flex flex-wrap justify-end">
                            <a href="#" class="group-hover:animate-arrow-move-up">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 34L34 14" stroke="#FFB646" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14 14H34V34" stroke="#FFB646" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experience Sectin End -->
    <!-- tabs start -->
    <section class="featured-properties py-[80px] lg:py-[100px]">
        <div class="container" data-aos="zoom-out">
            <div class="grid grid-cols-12">

                <div class="col-span-12">

                    <div class="font-bold font-Syne text-center leading-none flex flex-wrap flex-col gap-y-2 mb-4">
                        <span class="text-orange text-xl">Resume</span>
                        <h3 class="text-black-800 text-4xl lg:text-5xl xl:text-[64px] tracking-[-1.5px]">
                            All over my details find he<span
                                class="relative before:rounded-full before:bg-primary before:block before:absolute before:top-[8px] before:left-[15px] before:-z-[1] before:w-[36px] lg:before:w-[48px] xl:before:w-[64px] before:h-[36px] lg:before:h-[48px] xl:before:h-[64px]">re.</span>..

                        </h3>



                    </div>
                    <div class="tabs flex flex-wrap justify-center gap-4 mt-8 mb-14">
                        <button data-tab="about_me_tab" class="tab-btn justify-between items-center inline-flex group active">
                            About me
                            <span class="inline-block ml-3 group-hover:animate-arrow-move-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        </button>
                        <button data-tab="experience_tab" class="tab-btn justify-between items-center inline-flex group">
                            Experience
                            <span class="inline-block ml-3 group-hover:animate-arrow-move-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        </button>
                        <button data-tab="education_tab" class="tab-btn justify-between items-center inline-flex group">
                            Education
                            <span class="inline-block ml-3 group-hover:animate-arrow-move-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        </button>
                        <button data-tab="skills_tab" class="tab-btn justify-between items-center inline-flex group">
                            Skills
                            <span class="inline-block ml-3 group-hover:animate-arrow-move-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        </button>

                    </div>
                </div>

                <div class="col-span-12">
                    <div id="about_me_tab" class="tab-content active relative">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 xl:gap-0">

                            <img src="{{asset('assets/images/img2.jpg')}}" alt="about me">
                            <div>
                                <h4 class="text-black-800 text-2xl lg:text-[32px] font-bold font-Syne mb-6">Based in Zimbabwe
                                </h4>
                                <p class="paragraph mb-7">Anesu Gandiwa, <span class="text-black-800">Software Engineer</span>,
                                    based
                                    in
                                    Zimbabwe. </p>
                                <p class="paragraph mb-14">
                                    A software Engineer and I am in the game for over 2 years. I am proud of my
                                    works and ready to face the next challenge
                                </p>

                                <ul class="flex-col gap-3 inline-flex">
                                    <li class="gap-10 inline-flex items-center">
                                            <span class="w-[110px] text-black-text-800 text-lg font-normal leading-none">
                                        Name</span>
                                        <span class="text-black-800 text-2xl font-bold font-Syne leading-8">
                                        Anesu Gandiwa</span>
                                    </li>
                                    <li class="gap-10 inline-flex items-center">
                                            <span class="w-[110px] text-black-text-800 text-lg font-normal leading-none">
                                        Nationality</span>
                                        <span class="text-black-800 text-2xl font-bold font-Syne leading-8">
                                        Zimbabwean</span>
                                    </li>
                                    <li class="gap-10 inline-flex items-center">
                                            <span class="w-[110px] text-black-text-800 text-lg font-normal leading-none">
                                        Phone</span>
                                        <span class="text-black-800 text-2xl font-bold font-Syne leading-8">
                                        +263 712895388</span>
                                    </li>
                                    <li class="gap-10 inline-flex items-center">
                                            <span class="w-[110px] text-black-text-800 text-lg font-normal leading-none">
                                        Email</span>
                                        <span class="text-black-800 text-2xl font-bold font-Syne leading-8">
                                        anesugandiwa9@gmail.com</span>
                                    </li>
                                    <li class="gap-10 inline-flex items-center">
                                            <span class="w-[110px] text-black-text-800 text-lg font-normal leading-none">
                                        Experience</span>
                                        <span class="text-black-800 text-2xl font-bold font-Syne leading-8">
                                        2 years</span>
                                    </li>
                                    <li class="gap-10 inline-flex items-center">
                                            <span class="w-[110px] text-black-text-800 text-lg font-normal leading-none">
                                        Freelance</span>
                                        <span class="text-black-800 text-2xl font-bold font-Syne leading-8">
                                        Available</span>
                                    </li>

                                    <li class="gap-10 inline-flex items-center">
                                            <span class="w-[110px] text-black-text-800 text-lg font-normal leading-none">
                                        Language</span>
                                        <span class="text-black-800 text-2xl font-bold font-Syne leading-8">
                                        English</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div id="experience_tab" class="tab-content relative">
                        <h4 class="text-black-800 text-2xl lg:text-[32px] font-bold font-Syne mb-6">Experience</h4>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-5">

                            <div class="pt-[30px] px-7 pb-7 bg-black-500 rounded-2xl transition-all hover:shadow-2xl hover:bg-white flex flex-wrap flex-col gap-8 justify-between">
                                    <span class="text-sm font-normal font-Inter leading-tight text-black-text-800">03/216
                                –
                                Running</span>
                                <div>
                                    <p class="text-lg font-normal font-sans leading-7 text-black-800 relative z-[1] before:rounded-full before:bg-orange before:block before:absolute before:top-[50%] before:translate-y-[-50%] before:left-0 before:-z-[1] before:w-[8px] before:h-[8px] pl-4">
                                        Axtra</p>
                                    <h4 class="font-bold font-Syne leading-normal text-2xl text-black-800">Php developer

                                    </h4>
                                </div>
                            </div>

                            <div class="pt-[30px] px-7 pb-7 bg-black-500 rounded-2xl transition-all hover:shadow-2xl hover:bg-white flex flex-wrap flex-col gap-8 justify-between">
                                    <span class="text-sm font-normal font-Inter leading-tight text-black-text-800">03/2008
                                – 07/2011</span>
                                <div>
                                    <p class="text-lg font-normal font-sans leading-7 text-black-800 relative z-[1] before:rounded-full before:bg-orange before:block before:absolute before:top-[50%] before:translate-y-[-50%] before:left-0 before:-z-[1] before:w-[8px] before:h-[8px] pl-4">
                                        Axtra</p>
                                    <h4 class="font-bold font-Syne leading-normal text-2xl text-black-800">JavaScript
                                        developer
                                    </h4>
                                </div>
                            </div>

                            <div class="pt-[30px] px-7 pb-7 bg-black-500 rounded-2xl transition-all hover:shadow-2xl hover:bg-white flex flex-wrap flex-col gap-8 justify-between">
                                    <span class="text-sm font-normal font-Inter leading-tight text-black-text-800">03/2008
                                – 07/2011</span>
                                <div>
                                    <p class="text-lg font-normal font-sans leading-7 text-black-800 relative z-[1] before:rounded-full before:bg-orange before:block before:absolute before:top-[50%] before:translate-y-[-50%] before:left-0 before:-z-[1] before:w-[8px] before:h-[8px] pl-4">
                                        Axtra</p>
                                    <h4 class="font-bold font-Syne leading-normal text-2xl text-black-800">Maths Tutor
                                    </h4>
                                </div>
                            </div>

                            <div class="pt-[30px] px-7 pb-7 bg-black-500 rounded-2xl transition-all hover:shadow-2xl hover:bg-white flex flex-wrap flex-col gap-8 justify-between">
                                    <span class="text-sm font-normal font-Inter leading-tight text-black-text-800">03/2008
                                – 07/2011</span>

                            </div>

                        </div>
                    </div>

                    <div id="education_tab" class="tab-content">
                        <h4 class="text-black-800 text-2xl lg:text-[32px] font-bold font-Syne mb-6">Education</h4>

                        <div class="grid grid-cols-1 gap-6">

                            <div class="pt-[30px] px-7 pb-7 bg-black-500 rounded-2xl transition-all hover:shadow-2xl hover:bg-white flex flex-wrap gap-[30px] md:gap-[60px] lg:gap-[104px]">
                                    <span class="text-sm font-normal font-Inter leading-tight text-black-text-800">003/2008
                                –
                                07/2011</span>
                                <div class="flex-1">
                                    <p class="text-lg font-normal font-sans leading-7 text-black-800 relative z-[1] before:rounded-full before:bg-orange before:block before:absolute before:top-[50%] before:translate-y-[-50%] before:left-0 before:-z-[1] before:w-[8px] before:h-[8px] pl-4">
                                        Axtra</p>
                                    <h4 class="font-bold font-Syne leading-normal text-2xl text-black-800">BA computer
                                        science
                                    </h4>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div id="skills_tab" class="tab-content">
                        <h4 class="text-black-800 text-2xl lg:text-[32px] font-bold font-Syne mb-6">Skills</h4>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">

                            <div class="pt-[30px] px-7 pb-7 bg-black-500 rounded-2xl transition-all hover:shadow-2xl hover:bg-white flex flex-wrap gap-4 items-start">
                                <img class="items-start" src="assets/images/skills/vs-code.png" alt="icons">
                                <div class="flex flex-wrap gap-1 flex-1 flex-col">
                                    <h4 class="font-bold font-Syne leading-normal text-xl text-black-800">Vue JS</h4>
                                    <p class="text-sm font-normal font-Inter leading-none text-black-800">(60%)</p>
                                </div>
                            </div>


                            <div class="pt-[30px] px-7 pb-7 bg-black-500 rounded-2xl transition-all hover:shadow-2xl hover:bg-white flex flex-wrap gap-4 items-start">
                                <img class="items-start" src="assets/images/skills/figma.png" alt="icons">
                                <div class="flex flex-wrap gap-1 flex-1 flex-col">
                                    <h4 class="font-bold font-Syne leading-normal text-xl text-black-800">Laravel</h4>
                                    <p class="text-sm font-normal font-Inter leading-none text-black-800">(70%)</p>
                                </div>
                            </div>

                            <div class="pt-[30px] px-7 pb-7 bg-black-500 rounded-2xl transition-all hover:shadow-2xl hover:bg-white flex flex-wrap gap-4 items-start">
                                <img class="items-start" src="assets/images/skills/framer.png" alt="icons">
                                <div class="flex flex-wrap gap-1 flex-1 flex-col">
                                    <h4 class="font-bold font-Syne leading-normal text-xl text-black-800">Mysql</h4>
                                    <p class="text-sm font-normal font-Inter leading-none text-black-800">(80%)</p>
                                </div>
                            </div>

                            <div class="pt-[30px] px-7 pb-7 bg-black-500 rounded-2xl transition-all hover:shadow-2xl hover:bg-white flex flex-wrap gap-4 items-start">
                                <img class="items-start" src="assets/images/skills/framer.png" alt="icons">
                                <div class="flex flex-wrap gap-1 flex-1 flex-col">
                                    <h4 class="font-bold font-Syne leading-normal text-xl text-black-800">Python</h4>
                                    <p class="text-sm font-normal font-Inter leading-none text-black-800">(80%)</p>
                                </div>
                            </div>

                            <div class="pt-[30px] px-7 pb-7 bg-black-500 rounded-2xl transition-all hover:shadow-2xl hover:bg-white flex flex-wrap gap-4 items-start">
                                <img class="items-start" src="assets/images/skills/framer.png" alt="icons">
                                <div class="flex flex-wrap gap-1 flex-1 flex-col">
                                    <h4 class="font-bold font-Syne leading-normal text-xl text-black-800">Framer</h4>
                                    <p class="text-sm font-normal font-Inter leading-none text-black-800">(80%)</p>
                                </div>
                            </div>




                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- tabs end -->
@endsection








