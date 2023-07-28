<x-app-layout title="Beranda" is-header-blur="true">
	<!-- Main Content Wrapper -->
	<main class="main-content w-full px-[var(--margin-x)] pb-8">
		<div class="mt-6 flex flex-col items-center justify-between space-y-2 text-center sm:flex-row sm:space-y-0 sm:text-left">
			<div>
				<h3 class="text-xl font-semibold text-slate-700"> Program Kerja </h3>
				@foreach ($bidangs as $bidang)
					@if ($bidang->nama == auth()->user()->bidang)
						<p class="mt-1 hidden sm:block">Bidang {{ $bidang->nama }}</p>
					@endif
				@endforeach
			</div>
			<div x-data="{showModal:false}">
				<button @click="showModal = true" class="btn space-x-2 bg-primary font-medium text-white shadow-lg shadow-primary/50 hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
					</svg>
					<span> Proker Baru </span>
				</button>
				<template x-teleport="#x-teleport-target">
					<div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5" x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
						<div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300" @click="showModal = false" x-show="showModal" x-transition:enter="ease-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
						<div class="relative w-full max-w-lg origin-top rounded-lg bg-white transition-all duration-300" x-show="showModal" x-transition:enter="easy-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
							<div class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 sm:px-5">
								<h3 class="text-base font-medium text-slate-700"> Buat Proker Baru </h3>
								<button @click="showModal = !showModal" class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
										<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
									</svg>
								</button>
							</div>
							<div class="px-4 py-4 sm:px-5">
								<form action="{{ route('proker.store') }}" method="post"> @method('POST') @csrf <div class="mt-4 space-y-4">
										<label class="flex gap-2">
											<div class="block">
												
												<span>Nama Program Kerja</span>
												<input class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary" type="text" name="nama" value="{{ old('nama') }}" />
											</div>
											<div class="block">
												<label class="mb-1.5 inline-flex items-center">
													<span>Tanggal Pelaksanaan</span>
												</label>
												<label class="relative flex">
													<input x-init="$el._x_flatpickr = flatpickr($el)" class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary" placeholder="Choose date..." type="text" name="tanggal_pelaksanaan" value="{{ old('tanggal_pelaksanaan') }}" />
													<span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary">
														<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
															<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
														</svg>
													</span>
												</label>
											</div>
										</label>
										<label class="block">
											<span>Deskripsi</span>
											<textarea rows="4" name="deskripsi" class="form-textarea mt-1.5 w-full resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary"></textarea>
										</label>
										<label class="block">
											<span>Penanggung Jawab</span>
											<input type="hidden" name="nama_bidang" value="{{ auth()->user()->bidang }}" />
											<input class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary" name="pic_1" value="{{ old('pic_1') }}" type="text" />
										</label>
										<label class="block">
											<span>Progress</span>
											<div x-data="{range:0}">
												<label class="block">
													<input x-model="range" class="form-range text-slate-500 dark:text-navy-300" type="range" name="progress" />
												</label>
												<div class="mt-2">
													<p>
														<span x-text="range"></span>%
													</p>
												</div>
											</div>
										</label>
										<div class="space-x-2 text-right">
											<button @click="showModal = false" class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80"> Cancel </button>
											<button @click="showModal = false" type="submit" class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90"> Apply </button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</template>
			</div>
		</div>
		<div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4"> 
			@foreach ($prokers as $proker) 
				@if ($proker->nama_bidang == auth()->user()->bidang)
				<div class="card shadow-none">
					<div class="flex flex-1 flex-col justify-between rounded-lg bg-warning/15 p-4 sm:p-5">
						<div>
							<h2 class="mt-3 text-base mb-2 text-slate-700 line-clamp-2">
								{{ $proker->nama }}
							</h2>
							<p class="text-xs+">{{ $proker->tanggal_pelaksanaan }}</p>
						</div>
						<div>
							<div class="mt-4">
								<p class="text-xs+ text-slate-700">Progress</p>
								@switch($proker->progress)
									@case($proker->progress > 1 && $proker->progress <= 20)
										<div class="progress my-2 h-1.5 bg-warning/30">
											<span class="w-1/12 rounded-full bg-warning"></span>
										</div>
										@break
									@case($proker->progress > 20 && $proker->progress <= 42)
										<div class="progress my-2 h-1.5 bg-warning/30">
											<span class="w-4/12 rounded-full bg-warning"></span>
										</div>
										@break
									@case($proker->progress > 42 && $proker->progress <= 61)
										<div class="progress my-2 h-1.5 bg-warning/30">
											<span class="w-5/12 rounded-full bg-warning"></span>
										</div>
										@break
									@case($proker->progress > 61 && $proker->progress <= 81)
										<div class="progress my-2 h-1.5 bg-warning/30">
											<span class="w-9/12 rounded-full bg-warning"></span>
										</div>
										@break
									@case($proker->progress > 81 && $proker->progress <= 99)
										<div class="progress my-2 h-1.5 bg-warning/30">
											<span class="w-10/12 rounded-full bg-warning"></span>
										</div>
										@break
									@case(100)
										<div class="progress my-2 h-1.5 bg-warning/30">
											<span class="w-12/12 rounded-full bg-warning"></span>
										</div>
										@break
									@default
										<div class="progress my-2 h-1.5 bg-warning/30">
											<span class="w-0/12 rounded-full bg-warning"></span>
										</div>
								@endswitch
								<p class="text-right text-xs+ font-medium">{{ $proker->progress }}%</p>
							</div>
							<div class="mt-5 flex flex-wrap -space-x-3 justify-between">
								<div class="avatar h-8 w-8 hover:z-10">
									<div class="is-initial rounded-full border-2 border-warning bg-info text-xs+ uppercase text-white"> jd </div>
								</div>
								<div class="flex space-x-2">
									
									<div class="pt-2">
										<a href="/kepanitiaan/{{ $proker->id }}" target="_blank" rel="noopener noreferrer">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
												<path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
											</svg>
										</a>
									</div>
									<div class="">
										<div x-data="{showModal:false}">
											<button @click="showModal = true" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
													<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
												</svg>
											</button>
											<template x-teleport="#x-teleport-target">
												<div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5" x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
													<div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300" @click="showModal = false" x-show="showModal" x-transition:enter="ease-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
													<div class="relative w-full max-w-lg origin-top rounded-lg bg-white transition-all duration-300" x-show="showModal" x-transition:enter="easy-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
														<div class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 sm:px-5">
															<h3 class="text-base font-medium text-slate-700"> Edit Proker {{ $proker->nama }} </h3>
															<button @click="showModal = !showModal" class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
																<svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
																	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
																</svg>
															</button>
														</div>
														<div class="px-4 py-4 sm:px-5">
															<form action="{{ route('proker.update') }}" method="post"> @method('PUT') @csrf <div class="mt-4 space-y-4">
																	<label class="flex gap-2">
																		<div class="block">
																			<span>Nama Program Kerja</span>
																			<input type="hidden" name="id" value="{{ $proker->id }}"/>
																			<input class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary" type="text" name="nama" value="{{ $proker->nama }}" />
																		</div>
																		<div class="block">
																			<label class="mb-1.5 inline-flex items-center">
																				<span>Tanggal Pelaksanaan</span>
																			</label>
																			<label class="relative flex">
																				<input x-init="$el._x_flatpickr = flatpickr($el)" class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary" placeholder="Choose date..." type="text" name="tanggal_pelaksanaan" value="{{ $proker->tanggal_pelaksanaan }}" />
																				<span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary">
																					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
																						<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
																					</svg>
																				</span>
																			</label>
																		</div>
																	</label>
																	<label class="block">
																		<span>Deskripsi</span>
																		<textarea rows="4" name="deskripsi" value="{{ $proker->deskripsi }}" class="form-textarea mt-1.5 w-full resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary"></textarea>
																	</label>
																	<label class="block">
																		<span>Penanggung Jawab</span>
																		<input class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary" name="pic_1" value="{{ $proker->pic_1 }}" type="text" />
																	</label>
																	<label class="block">
																		<span>Progress</span>
																		<div x-data="{range:{{ $proker->progress }}}">
																			<label class="block">
																				<input x-model="range" class="form-range text-slate-500 dark:text-navy-300" type="range" name="progress" />
																			</label>
																			<div class="mt-2">
																				<p>
																					<span x-text="range"></span>%
																				</p>
																			</div>
																		</div>
																	</label>
																	<div class="space-x-2 text-right">
																		<button @click="showModal = false" class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80"> Batal </button>
																		<button @click="showModal = false" type="submit" class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90"> Simpan </button>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</template>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 
				@endif
			@endforeach 
		</div>

	</main>
</x-app-layout>