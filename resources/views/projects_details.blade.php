@extends('layouts.website')
@section('body')
<!-- Portfolio Section Start -->

<section class="bg-secondary py-[120px]">
    <img src="{{asset('assets/images/tools.jpg')}}" alt="background loading" width="1000" height="300" class="bg1">
    <div class="project">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12" data-aos="fade-up">
                <div class="font-bold font-Syne text-center leading-none flex flex-wrap flex-col gap-y-2 mb-10">
                    <span class="text-orange text-xl">Portfolio</span>
                    <h3 class="text-black-800 text-4xl lg:text-5xl xl:text-[64px] tracking-[-1.5px]">
                        My recent <span
                            class="relative z-[1] before:rounded-full before:bg-primary before:block before:absolute before:top-[4px] before:left-[-6px] before:-z-[1] before:w-[36px] lg:before:w-[48px] xl:before:w-[64px] before:h-[36px] lg:before:h-[48px] xl:before:h-[64px]">w</span>ork
                    </h3>
                </div>
            </div>
            @foreach ($projects as $project)
                <div class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3" data-aos="fade-up" data-aos-delay="300">
                    <!-- Card with border and shadow -->
                    <div class="rounded-[10px] overflow-hidden mb-6 bg-white border border-gray-200 shadow-lg hover:shadow-xl transition-all">
                        <!-- Image with border and rounded corners -->
                        <img src="{{ Storage::url($project->image) }}" alt="project1" class="w-[10px] h-[10px] object-cover rounded-t-[10px] border-b border-gray-200 transition-transform transform hover:scale-105 height">

                        <div class="flex flex-wrap flex-col gap-3 p-4">
                            <!-- Tag buttons with custom background color, border, and hover effect -->
                            <div class="flex flex-wrap gap-2">
                                <a class="text-xs text-white uppercase font-medium font-Inter leading-none py-[6px] px-4 rounded-[40px] bg-blue-500 border border-blue-500 transition-all hover:bg-blue-700 hover:border-blue-700" href="projects.html">APP</a>
                                <a class="text-xs text-white uppercase font-medium font-Inter leading-none py-[6px] px-4 rounded-[40px] bg-green-500 border border-green-500 transition-all hover:bg-green-700 hover:border-green-700" href="projects.html">DEVELOPMENT</a>
                            </div>

                            <!-- Project title and GitHub icon with hover effect -->
                            <div class="flex flex-wrap items-center justify-between text-white hover:text-orange group">
                                <h4 class="font-bold font-Syne text-center leading-10 text-[16px] lg:text-[18px] xl:text-[20px] capitalize">
                                    <a class="transition-all text-gray-800 hover:text-blue-600" href="{{$project->project_url}}">
                                        {{$project->name_of_project}}</a>
                                </h4>
                                <a class="group-hover:animate-arrow-move-up" href="{{$project->github_url}}">
                                    <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8839 9.11612C31.372 9.60427 31.372 10.3957 30.8839 10.8839L10.8839 30.8839C10.3957 31.372 9.60427 31.372 9.11612 30.8839C8.62796 30.3957 8.62796 29.6043 9.11612 29.1161L29.1161 9.11612C29.6043 8.62796 30.3957 8.62796 30.8839 9.11612Z" fill="currentColor" fill-opacity="0.9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 10C12.5 9.30964 13.0596 8.75 13.75 8.75H30C30.6904 8.75 31.25 9.30964 31.25 10V26.25C31.25 26.9404 30.6904 27.5 30 27.5C29.3096 27.5 28.75 26.9404 28.75 26.25V11.25H13.75C13.0596 11.25 12.5 10.6904 12.5 10Z" fill="currentColor" fill-opacity="0.9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>


        <div class="col-span-12 mt-12" data-aos="fade-up">
            <div class="flex group justify-center items-center">
                <a href="https://github.com/Anesugandiwa" class="flex items-center justify-center flex-wrap btn-primary px-4 py-2 text-sm">
                    View Git Hub
                    <span class="inline-block ml-3 group-hover:animate-arrow-move-up">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                </a>
            </div>

        </div>
    </div>
</section>
<!-- Portfolio Section End -->






@endsection

