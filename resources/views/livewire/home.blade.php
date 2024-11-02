<?php

use function Livewire\Volt\{state};

state([
    'carrers' => [
        [
            'nama' => 'full stack developer',
            'company' =>  'STMIK Primakara (now known as Primakara University) ',
            'time' => 'Nov 2020- Nov 2021',
            'jobdesk' => '   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum,',
            'techstack' => ['laravel', 'code igniter', 'vuejs'],
            'status' => 'full-time',

        ],
        [
            'nama' => 'full stack developer and mobile developer',
            'company' =>  'freelance',
            'time' => 'Nov 2021- Mei 2023',
            'jobdesk' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum,',
            'techstack' => ['laravel', 'flutter', 'reactjs', 'godot engine'],
            'status' => 'full-time',

        ],
        [
            'nama' => 'Game Programer',
            'company' =>  'betterfly studio',
            'time' => 'Nov 2021- Nov 2022',
            'jobdesk' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum,',
            'techstack' => ['godot engine'],
            'status' => 'part-time',

        ],
        [
            'nama' => 'Full Stack Programer & co-founder',
            'company' =>  'emadikatechnology',
            'time' => 'mei 2023- desember 2024',
            'jobdesk' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum,',
            'techstack' => ['laravel', 'flutter'],
            'status' => 'full-time',

        ],
        [
            'nama' => 'Tech Lead & co-founder',
            'company' =>  'emadikatechnology',
            'time' => ' desember 2024 - present',
            'jobdesk' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum,',
            'techstack' => ['laravel', 'flutter', 'livewire', 'rustlang', 'golang'],
            'status' => 'full-time',

        ],

    ],
    'projects' => [
        [
            'nama' => 'POS Sistem Backend',
            'feature' =>  [
                'feateure',
                'feateure 1',
                'feateure 2',
            ],
            'images' => [
                'image1',
                'image2',

            ],
            'jobdesk' => '   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum,',
            'techstack' => ['laravel', 'code igniter', 'vuejs'],
            'team' => '2',
            'status' => 'completed',

        ],
        [
            'nama' => 'POS Mobile',
            'feature' =>  [
                'feateure',
                'feateure 1',
                'feateure 2',
            ],
            'images' => [
                'image1',
                'image2',

            ],
            'jobdesk' => '   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum,',
            'techstack' => ['laravel', 'code igniter', 'vuejs'],
            'team' => '2',
            'status' => 'completed',

        ],
        [
            'nama' => 'Invoice Sistem',
            'feature' =>  [
                'feateure',
                'feateure 1',
                'feateure 2',
            ],
            'images' => [
                'image1',
                'image2',

            ],
            'jobdesk' => '   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum,',
            'techstack' => ['laravel', 'code igniter', 'vuejs'],
            'team' => '2',
            'status' => 'completed',

        ],
        [
            'nama' => 'CBT App',
            'feature' =>  [
                'feateure',
                'feateure 1',
                'feateure 2',
            ],
            'images' => [
                'image1',
                'image2',

            ],
            'jobdesk' => '   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum,',
            'techstack' => ['laravel', 'code igniter', 'vuejs'],
            'team' => '2',
            'status' => 'completed',

        ],
        [
            'nama' => 'CBT Sistem',
            'feature' =>  [
                'feateure',
                'feateure 1',
                'feateure 2',
            ],
            'images' => [
                'image1',
                'image2',

            ],
            'jobdesk' => '   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum,',
            'techstack' => ['laravel', 'code igniter', 'vuejs'],
            'team' => '2',
            'status' => 'completed',

        ],
        [
            'nama' => '',
            'feature' =>  [
                'feateure',
                'feateure 1',
                'feateure 2',
            ],
            'images' => [
                'image1',
                'image2',

            ],
            'jobdesk' => '   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum,',
            'techstack' => ['laravel', 'code igniter', 'vuejs'],
            'team' => '2',
            'status' => 'completed',

        ],
        [
            'nama' => 'Asessmen Sistem',
            'feature' =>  [
                'feateure',
                'feateure 1',
                'feateure 2',
            ],
            'images' => [
                'image1',
                'image2',

            ],
            'jobdesk' => '   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum,',
            'techstack' => ['laravel', 'code igniter', 'vuejs'],
            'team' => '2',
            'status' => 'completed',

        ],
    ]
])

?>

<div class="text-center w-full flex flex-col justify-center items-center p-20 gap-10">
    {{-- foto profile --}}
    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-gray-300  ">
        <img src="{{ Vite::asset('resources/images/imagerimba.jpeg')}}" alt="profile picture" class="w-full h-full object-cover">
    </div>
    {{-- motivation letter --}}
    <div class="w-full">
        <p class=" text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, nibh vel placerat condimentum, risus magna luctus metus, sit amet pulvinar tellus elit eget arcu. Nunc sit amet eleifend erat. Nulla semper bibendum aliquam. Aenean rhoncus feugiat condimentum. Quisque sit amet vulputate metus. Pellentesque congue diam arcu, id dapibus est tempor sed. Nam ac vehicula lacus. Vestibulum convallis lectus ac velit venenatis aliquam. Phasellus cursus molestie lorem et auctor. Morbi ligula risus, consectetur eu suscipit a, posuere tempor sapien. Sed vel aliquam erat. Morbi ac ante non nulla cursus pellentesque. Morbi vitae erat efficitur, hendrerit odio nec, euismod ante. Nunc eleifend ut justo quis volutpat. Nunc id augue lacinia, tristique ligula venenatis, dapibus enim. Aliquam molestie, tellus id pellentesque pulvinar, dolor neque dapibus augue, at aliquam orci ex et magna.
        </p>
    </div>
    {{-- container project and  carrer --}}
    <div class="flex flex-col justify-center items-start w-full gap-5">
        {{-- carrer left--}}
        <div class="mb-8 w-full ">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 uppercase">Career</h2>
            <div class="space-y-4">
                <!-- Career Item -->
                @foreach($this->carrers as $carrer)
                <div class="bg-white shadow rounded-lg p-4 flex flex-col sm:flex-row justify-end text-left ">
                    <div class="flex-grow">
                        <h3 class="text-xl font-semibold text-gray-800">{{$carrer['nama']}}</h3>
                        <p class="text-gray-600">{{$carrer['company']}}</p>
                        <p class="text-gray-500 text-sm">{{$carrer['time']}}</p>
                        <p class="text-gray-500 text-sm">{{$carrer['jobdesk']}}</p>
                        <p class="text-gray-500 text-sm">{{$carrer['status']}}</p>

                    </div>
                    <div class="flex-none">
                        @foreach($carrer['techstack'] as $tech)
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm">{{$tech}}</span>
                        @endforeach
                    </div>
                </div>
                @endforeach
                <!-- More career items as needed -->
            </div>
        </div>
        {{-- project right --}}
        <div class="mb-8 w-full ">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 uppercase">Projects</h2>
            <div class="space-y-4">
                <!-- Project Item -->
                @foreach($this->projects as $project)
                <div class="bg-white shadow rounded-lg p-4 text-right ">
                    <h3 class="text-xl font-semibold text-gray-800">{{$project['nama']}}</h3>
                    <p class="text-gray-600">{{$project['jobdesk']}}</p>
                    <div class="mt-2">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm">Completed</span>
                        <span class="bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">JavaScript</span>
                        <span class="bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">React</span>
                    </div>
                </div>
                @endforeach
                <!-- More project items as needed -->
            </div>
        </div>
    </div>
    {{-- contact --}}
    <div class="mx-w-md mx-auto p-4 text-center">

        <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact</h2>
        <p class="text-gray-600 mb-6">Feel free to connect with me on LinkedIn, check out my projects on GitHub, or send me an email.</p>

        <div class="flex justify-center space-x-4">
            <!-- LinkedIn Link -->
            <a href="https://linkedin.com/in/yourprofile" target="_blank" rel="noopener noreferrer"
                class="text-blue-600 hover:text-blue-800">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.23 0H1.77C.79 0 0 .774 0 1.73v20.54C0 23.226.79 24 1.77 24h20.46c.98 0 1.77-.774 1.77-1.73V1.73C24 .774 23.21 0 22.23 0zM7.12 20.452H3.56V9h3.56v11.452zM5.34 7.457a2.062 2.062 0 1 1 0-4.124 2.062 2.062 0 0 1 0 4.124zM20.452 20.452h-3.56v-5.908c0-1.408-.027-3.222-1.963-3.222-1.964 0-2.264 1.533-2.264 3.116v6.014h-3.56V9h3.42v1.566h.05c.477-.904 1.636-1.854 3.369-1.854 3.603 0 4.268 2.37 4.268 5.454v6.286h-.001z" />
                </svg>
            </a>

            <!-- GitHub Link -->
            <a href="https://github.com/yourprofile" target="_blank" rel="noopener noreferrer"
                class="text-gray-800 hover:text-gray-900">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577v-2.234c-3.338.724-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.757-1.333-1.757-1.089-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.834 2.807 1.304 3.492.998.108-.775.418-1.304.763-1.604-2.665-.305-5.466-1.332-5.466-5.93 0-1.31.47-2.38 1.236-3.22-.123-.303-.536-1.523.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.98-.399 3-.404 1.02.005 2.043.138 3 .404 2.29-1.553 3.297-1.23 3.297-1.23.653 1.653.24 2.873.118 3.176.77.84 1.236 1.91 1.236 3.22 0 4.61-2.804 5.623-5.475 5.92.43.372.823 1.103.823 2.222v3.293c0 .322.218.694.825.576C20.565 22.092 24 17.594 24 12.297 24 5.67 18.63.297 12 .297z" />
                </svg>
            </a>

            <!-- Email Link -->
            <a href="mailto:youremail@example.com" class="text-red-600 hover:text-red-800">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 2v.01L12 11 4 6.01V6h16zm-16 4l7.35 4.47c.3.18.68.18.98 0L20 10v8H4v-8z" />
                </svg>
            </a>
        </div>

    </div>
</div>