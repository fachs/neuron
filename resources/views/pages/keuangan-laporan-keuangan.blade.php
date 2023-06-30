<x-app-layout title="Laporan Keuangan" is-header-blur="true">
	<main class="main-content w-full px-[var(--margin-x)] pb-10">
		<div class="flex items-center space-x-4 py-5 lg:py-6">
			<h2 class="text-lg font-medium text-slate-800 lg:text-2xl"> Laporan Keuangan </h2>
			<div class="hidden h-9 py-1 sm:flex">
				<div class="h-8 w-px bg-slate-300"></div>
			</div>
			<ul class="hidden flex-wrap items-center space-x-2 sm:flex">
				<li class="flex items-center space-x-2">
					<a class="text-primary transition-colors hover:text-primary-focus" href="{{route('keuangan')}}">Keuangan</a>
					<svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
					</svg>
				</li>
				<li>Laporan Keuangan</li>
			</ul>
			<div class="pr-5"></div>
			<div class="rounded-lg bg-gradient-to-r from-blue-500 to-indigo-600 pb-4 pt-1">
				<div class="px-4 text-white sm:px-5">
					<div class="mt-4 flex space-x-7">
						<div class="px-5">
							<p class="text-indigo-100">Saldo</p>
							<div class="mt-1 flex items-center space-x-2">
								<p class="text-base font-medium">$2,225.22</p>
							</div>
						</div>
						<div class="px-5">
							<p class="text-indigo-100">Pengeluaran</p>
							<div class="mt-1 flex items-center space-x-2">
								<div class="flex h-7 w-7 items-center justify-center rounded-full bg-black/20">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
									</svg>
								</div>
								<p class="text-base font-medium">$2,225.22</p>
							</div>
						</div>
						<div class="px-5">
							<p class="text-indigo-100">Pemasukan</p>
							<div class="mt-1 flex items-center space-x-2">
								<div class="flex h-7 w-7 items-center justify-center rounded-full bg-black/20">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
									</svg>
								</div>
								<p class="text-base font-medium">$225.22</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
			<span class="text-base text-indigo-500">Bidang {{ auth()->user()->role }}</span>
			<div class="card px-4 pb-4 sm:px-5">
				<div class="w-full">
					<div class="mt-5">
						<div x-data="{ activeTab: 'tabHome' }" class="tabs flex flex-col">
							<div class="tabs-list flex justify-between">
								<div class="">
									<button @click="activeTab = 'tabHome'" :class="activeTab === 'tabHome' ?
                                          'border-primary text-primary' :
                                          'border-transparent hover:text-slate-800 focus:text-slate-800'" class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium"> Pengeluaran </button>
									<button @click="activeTab = 'tabProfile'" :class="activeTab === 'tabProfile' ?
                                            'border-primary text-primary' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800'" class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium"> Pemasukan </button>
								</div>
                <div class="flex pb-3 justify-between">
                  <div class="w-2"></div>
                  <div class="flex space-x-2">
                    <button class="btn rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                      </svg> Filter </button>
                    <button class="btn rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 13.5l3 3m0 0l3-3m-3 3v-6m1.06-4.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                      </svg> Unduh Laporan </button>
                  </div>
                </div>
							</div>
							<div class="tab-content pt-4">
								<div x-show="activeTab === 'tabHome'" x-transition:enter="transition-all duration-500 easy-in-out" x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]" x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
									<div>
										<div class="card mt-3">
											<div class="is-scrollbar-hidden min-w-full overflow-x-auto" x-data="{ users: [] }" x-init="fetch('https://jsonplaceholder.typicode.com/users')
                .then(response => response.json())
                .then(data => users = data)">
												
												<table class="is-hoverable w-full text-left">
													<thead>
														<tr>
															<th class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Penerima </th>
															<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Uraian </th>
															<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Harga Satuan </th>
															<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Kuantitas </th>
															<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Total </th>
															<th class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Divisi </th>
														</tr>
													</thead>
													<tbody>
														<template x-for="user in users" :key="user.id">
															<tr class="border-y border-transparent border-b-slate-200">
																<td x-text="user.name" class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 lg:px-5"></td>
																<td x-text="user.name" class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 lg:px-5"></td>
																<td x-text="user.name" class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 lg:px-5"></td>
																<td x-text="user.age" class="whitespace-nowrap px-4 py-3 sm:px-5"></td>
																<td x-text="" class="whitespace-nowrap px-4 py-3 sm:px-5">1</td>
																<td class="whitespace-nowrap px-4 py-3 sm:px-5">
																	<div :class="user.role_bg" x-text="user.role" class="badge rounded-full"> Secondary </div>
																</td>
															</tr>
														</template>
													</tbody>
												</table>
											</div>
											<div class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5">
												<div class="text-xs+">1 - 10 of 10 entries</div>
												<ol class="pagination">
													<li class="rounded-l-full bg-slate-150">
														<a href="#" class="flex h-8 w-8 items-center justify-center rounded-full text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80">
															<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
																<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
															</svg>
														</a>
													</li>
													<li class="bg-slate-150">
														<a href="#" class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-primary px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90">1</a>
													</li>
													<li class="bg-slate-150">
														<a href="#" class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80">2</a>
													</li>
													<li class="bg-slate-150">
														<a href="#" class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80">3</a>
													</li>
													<li class="bg-slate-150">
														<a href="#" class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80">4</a>
													</li>
													<li class="bg-slate-150">
														<a href="#" class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80">5</a>
													</li>
													<li class="rounded-r-full bg-slate-150">
														<a href="#" class="flex h-8 w-8 items-center justify-center rounded-full text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80">
															<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
															</svg>
														</a>
													</li>
												</ol>
											</div>
										</div>
									</div>
								</div>
								<div x-show="activeTab === 'tabProfile'" x-transition:enter="transition-all duration-500 easy-in-out" x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]" x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
									<div>
										<div class="card mt-3">
											<div class="is-scrollbar-hidden min-w-full overflow-x-auto" x-data="pages.tables.initExample1">

												<table class="is-hoverable w-full text-left">
													<thead>
														<tr>
															<th class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Tanggal </th>
															<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Sumber Dana </th>
															<th class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Jumlah </th>
														</tr>
													</thead>
													<tbody>
														<template x-for="user in usersData" :key="user.id">
															<tr class="border-y border-transparent border-b-slate-200">
																<td class="whitespace-nowrap px-4 py-3 sm:px-5" x-text="user.id"></td>
																<td x-text="user.name" class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 lg:px-5"></td>
																<td x-text="user.phone" class="whitespace-nowrap px-4 py-3 sm:px-5"></td>
															</tr>
														</template>
													</tbody>
												</table>
											</div>
											<div class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5">
												<div class="text-xs+">1 - 10 of 10 entries</div>
												<ol class="pagination">
													<li class="rounded-l-full bg-slate-150">
														<a href="#" class="flex h-8 w-8 items-center justify-center rounded-full text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80">
															<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
																<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
															</svg>
														</a>
													</li>
													<li class="bg-slate-150">
														<a href="#" class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-primary px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90">1</a>
													</li>
													<li class="bg-slate-150">
														<a href="#" class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80">2</a>
													</li>
													<li class="bg-slate-150">
														<a href="#" class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80">3</a>
													</li>
													<li class="bg-slate-150">
														<a href="#" class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80">4</a>
													</li>
													<li class="bg-slate-150">
														<a href="#" class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80">5</a>
													</li>
													<li class="rounded-r-full bg-slate-150">
														<a href="#" class="flex h-8 w-8 items-center justify-center rounded-full text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80">
															<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
															</svg>
														</a>
													</li>
												</ol>
											</div>
										</div>
									</div>
								</div>
								<div x-show="activeTab === 'tabMessages'" x-transition:enter="transition-all duration-500 easy-in-out" x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]" x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
									<div>
										<p> Cras iaculis ipsum quis lectus faucibus, in mattis nulla molestie. Vestibulum vel tristique libero. Morbi vulputate odio at viverra sodales. Curabitur accumsan justo eu libero porta ultrices vitae eu leo. </p>
										<div class="flex space-x-2 pt-3">
											<a href="#" class="tag rounded-full border border-primary text-primary"> Tag 1 </a>
											<a href="#" class="tag rounded-full border border-primary text-primary"> Tag 2 </a>
										</div>
										<p class="pt-3 text-xs text-slate-400"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolore non atque? </p>
									</div>
								</div>
								<div x-show="activeTab === 'tabSettings'" x-transition:enter="transition-all duration-500 easy-in-out" x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]" x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
									<div>
										<p> Etiam nec ante eget lacus vulputate egestas non iaculis tellus. Suspendisse tempus ex in tortor venenatis malesuada. Aenean consequat dui vitae nibh lobortis condimentum. Duis vel risus est. </p>
										<div class="flex space-x-2 pt-3">
											<a href="#" class="tag rounded-full border border-primary text-primary"> Tag 1 </a>
											<a href="#" class="tag rounded-full border border-primary text-primary"> Tag 2 </a>
										</div>
										<p class="pt-3 text-xs text-slate-400"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolore non atque? </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="code-wrapper hidden pt-4">
					<pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
					</div>
				</div>
			</div>
		</main>
	</x-app-layout>