<div class="main-sidebar">
    <div
        class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white">
        <!-- Application Logo -->
        <div class="flex pt-4">
            <a href="/">
                <img class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                    src="{{ asset('images/app-logo.png') }}" alt="logo" />
            </a>
        </div>

        <!-- Main Sections Links -->
        <div class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6">
            <!-- Dashobards -->
            <a href="/"
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 {{ $routePrefix === 'index' ? 'text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 bg-primary/10' : 'hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25' }}"
                x-tooltip.placement.right="'Dashboards'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                    <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                    <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                  </svg>
            </a>

            <!-- Apps -->
            <a href="{{ route('keuangan') }}"
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 {{ $routePrefix === 'keuangan' ? 'text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 bg-primary/10' : 'hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25' }}"
                x-tooltip.placement.right="'Keuangan'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                    <path d="M2.273 5.625A4.483 4.483 0 015.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0018.75 3H5.25a3 3 0 00-2.977 2.625zM2.273 8.625A4.483 4.483 0 015.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0018.75 6H5.25a3 3 0 00-2.977 2.625zM5.25 9a3 3 0 00-3 3v6a3 3 0 003 3h13.5a3 3 0 003-3v-6a3 3 0 00-3-3H15a.75.75 0 00-.75.75 2.25 2.25 0 01-4.5 0A.75.75 0 009 9H5.25z" />
                </svg>
            </a>

            <!-- Pages And Layouts -->
            <a href="{{ route('persuratan') }}"
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 {{ $routePrefix === 'persuratan' ? 'text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 bg-primary/10' : 'hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25' }}"
                x-tooltip.placement.right="'Persuratan'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                </svg>
            </a>

            <!-- Forms -->
            <a href="{{ route('publikasi') }}"
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 {{ $routePrefix === 'publikasi' ? 'text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 bg-primary/10' : 'hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25' }}"
                x-tooltip.placement.right="'Publikasi'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                    <path d="M9.97.97a.75.75 0 011.06 0l3 3a.75.75 0 01-1.06 1.06l-1.72-1.72v3.44h-1.5V3.31L8.03 5.03a.75.75 0 01-1.06-1.06l3-3zM9.75 6.75v6a.75.75 0 001.5 0v-6h3a3 3 0 013 3v7.5a3 3 0 01-3 3h-7.5a3 3 0 01-3-3v-7.5a3 3 0 013-3h3z" />
                    <path d="M7.151 21.75a2.999 2.999 0 002.599 1.5h7.5a3 3 0 003-3v-7.5c0-1.11-.603-2.08-1.5-2.599v7.099a4.5 4.5 0 01-4.5 4.5H7.151z" />
                </svg>
            </a>

            

        </div>

        <!-- Bottom Links -->
        <div class="flex flex-col items-center space-y-3 py-3">

            <!-- Profile -->
            <div x-data="usePopper({ placement: 'right-end', offset: 12 })" @click.outside="if(isShowPopper) isShowPopper = false" class="flex">
                <button @click="isShowPopper = !isShowPopper" x-ref="popperRef" class="avatar h-12 w-12">
                    <img class="rounded-full" src="{{ asset('images/200x200.png') }}" alt="avatar" />
                    <span
                        class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-success"></span>
                </button>
                <div :class="isShowPopper && 'show'" class="popper-root fixed" x-ref="popperRoot">
                    <div
                        class="popper-box w-64 rounded-lg border border-slate-150 bg-white shadow-soft">
                        <div class="flex items-center space-x-4 rounded-t-lg bg-slate-100 py-5 px-4">
                            <div class="avatar h-14 w-14">
                                <img class="rounded-full" src="{{ asset('images/200x200.png') }}"
                                    alt="avatar" />
                            </div>
                            <div>
                                <a href="{{ route('profil') }}"
                                    class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary">
                                    {{ auth()->user()->name }}
                                </a>
                                
                            </div>
                        </div>
                        <div class="flex flex-col pt-2 pb-5">
                            <a href="{{ route('profil') }}"
                                class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100">
                                <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-warning text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>

                                <div>
                                    <h2
                                        class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary">
                                        Profile
                                    </h2>
                                    <div class="text-xs text-slate-400 line-clamp-1">
                                        Your profile setting
                                    </div>
                                </div>
                            </a>

                            <div class="mt-3 px-4">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <span>Logout</span>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
