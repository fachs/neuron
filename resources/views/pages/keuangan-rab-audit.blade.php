<x-app-layout title="RAB Bidang" is-header-blur="true">
	<main class="main-content w-full px-[var(--margin-x)] pb-8">
		<div class="flex items-center space-x-4 py-5 lg:py-6">
			<h2 class="text-lg font-medium text-slate-800 lg:text-2xl"> RAB Bidang </h2>
			<div class="hidden h-full py-1 sm:flex">
				<div class="h-full w-px bg-slate-300"></div>
			</div>
			<ul class="hidden flex-wrap items-center space-x-2 sm:flex">
				<li class="flex items-center space-x-2">
					<a class="text-primary transition-colors hover:text-primary-focus" href="{{ route('keuangan') }}">Keuangan</a>
					<svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
					</svg>
				</li>
				<li>RAB Bidang</li>
			</ul>
		</div>
		<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
			<!-- Collapsible  Table -->
				<div class="flex items-center justify-between"></div>
				<div class="card mt-3">
					<div class="is-scrollbar-hidden min-w-full overflow-x-auto" x-data="pages.tables.initExample1">
						<table class="is-hoverable w-full text-left">
							<thead>
								<tr>
									<th class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> # </th>
									<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Rincian </th>
									<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Harga </th>
									<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Kuantitas </th>
									<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Total </th>
									<th class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Aksi </th>
								</tr>
							</thead>
							<tbody>
								<template x-for="user in usersData" :key="user.id">
									<tr class="border-y border-transparent border-b-slate-200">
										<td class="whitespace-nowrap px-4 py-3 sm:px-5" x-text="user.id"></td>
										<td class="whitespace-nowrap px-4 py-3 sm:px-5" x-text="user.id"></td>
										<td x-text="user.name" class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 lg:px-5"></td>
										<td x-text="user.age" class="whitespace-nowrap px-4 py-3 sm:px-5"></td>
										<td x-text="user.phone" class="whitespace-nowrap px-4 py-3 sm:px-5"></td>
										<td class="whitespace-nowrap px-4 py-3 sm:px-5">
											<div x-data="{showModal:false}">
												<button @click="showModal = true" class="btn space-x-2 rounded-full bg-success text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90">
													<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
														<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
													</svg>
													<span> Audit </span>
												</button>
												<template x-teleport="#x-teleport-target">
													<div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5" x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
														<div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300" @click="showModal = false" x-show="showModal" x-transition:enter="ease-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
														<div class="relative w-full max-w-lg origin-top rounded-lg bg-white transition-all duration-300" x-show="showModal" x-transition:enter="easy-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
															<div class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 sm:px-5">
																<h3 class="text-base font-medium text-slate-700"> Ajukan Anggaran Baru </h3>
																<button @click="showModal = !showModal" class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
																	<svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
																		<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
																	</svg>
																</button>
															</div>
															<div class="px-4 py-4 sm:px-5">
																<div class="mt-4 space-y-4">
																	<label class="block">
																		<span>Program Kerja :</span>
																		<select class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary">
																			<option>Laravel</option>
																			<option>Node JS</option>
																			<option>Django</option>
																			<option>Other</option>
																		</select>
																	</label>
																	<label class="block">
																		<span>Rincian</span>
																		<input class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary" type="text" />
																	</label>
																	<label class="block">
																		<div>
																			<span>Harga</span>
																			<label class="mt-1.5 flex -space-x-px">
																				<span class="flex shrink-0 items-center justify-center rounded-l-lg border border-slate-300 px-3.5 font-inter">
																					<span class="-mt-1">Rp </span>
																				</span>
																				<input x-input-mask="{
                        numeric:true,
                        blocks: [3, 2, 2, 2],
                    }" class="form-input w-full rounded-r-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary" type="text" />
																			</label>
																		</div>
																	</label>
																	<label class="block">
																		<span>Total : </span>
																		<span class="text-base font-semibold">Rp 2,000,000</span>
																	</label>
																	<div class="space-x-2 text-right">
																		<button @click="showModal = false" class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80"> Cancel </button>
																		<button @click="showModal = false" class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90"> Apply </button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</template>
											</div>
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
	</main>
</x-app-layout>