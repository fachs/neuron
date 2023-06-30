<x-app-layout title="Buat Pengajuan Desain" is-header-blur="true">
	<!-- Main Content Wrapper -->
	<main class="main-content w-full px-[var(--margin-x)] pb-8">
		<div class="flex items-center space-x-4 py-5 lg:py-6">
			<h2 class="text-xl font-medium text-slate-800 lg:text-2xl"> Buat Pengajuan Desain </h2>
			<div class="hidden h-full py-1 sm:flex">
				<div class="h-full w-px bg-slate-300"></div>
			</div>
			<ul class="hidden flex-wrap items-center space-x-2 sm:flex">
				<li class="flex items-center space-x-2">
					<a class="text-primary transition-colors hover:text-primary-focus" href="{{ route('publikasi') }}">Publikasi</a>
					<svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
					</svg>
				</li>
				<li class="flex items-center space-x-2">
					<a class="text-primary transition-colors hover:text-primary-focus" href="{{ route('publikasi/desain') }}">Desain</a>
					<svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
					</svg>
				</li>
				<li>Buat Pengajuan Desain</li>
			</ul>
		</div>
		<div class="col-span-12 grid lg:col-span-8 pt-6">
			<div class="card">
				<div class="border-b border-slate-200 p-4 sm:px-5">
					<h4 class="text-lg font-medium text-slate-700"> Form Pengajuan Desain </h4>
				</div>
                <form action="{{ route('desainCreate.store') }}" method="post" enctype="multipart/form-data"> 
                    @csrf
				<div class="space-y-4 p-4 sm:p-5">
                    
					<div class="grid grid-cols-4 gap-4 sm:grid-cols-4">
						<label class="block">
							<span>Jenis</span>
							<select name="jenis" class="mt-1.5 w-full" x-init="$el._x_tom = new Tom($el, { create: true, sortField: { field: 'text', direction: 'asc' } })">
								<option value="grafis">Desain Grafis</option>
								<option value="video">Video</option>
							</select>
						</label>
						<label class="block col-span-1">
							<span>Judul</span>
							<input name="judul" class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary" placeholder="Judul" type="text" name="judul" />
						</label>
                        <label class="block col-span-2">
							<span>Narahubung</span>
							<div class="grid grid-cols-2 gap-4 w-full">
								<div class="">
									<label class="mt-1.5 flex -space-x-px">
										<span class="flex shrink-0 items-center justify-center rounded-l-lg border border-slate-300 px-3.5 font-inter">
											<span class="-mt-1">(+62)</span>
										</span>
										<input name="pic_kontak" class="form-input w-full rounded-r-lg border border-slate-300 bg-transparent px-4 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary" placeholder="Nomor Whatsapp" type="text" />
									</label>
								</div>
								<input type="hidden" name="pic_name" value="{{ auth()->user()->name }}" />
                                <input type="hidden" name="status" value="Proses" />
							</div>
						</label>
					</div>
					<div class="grid grid-cols-2 gap-4 sm:grid-cols-2">
						<label class="block">
							<span>Keterangan Slide</span>
							<textarea name="keterangan_slide" rows="4" placeholder=" Masukan keterangan" class="form-textarea w-full mt-1.5 resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary"></textarea>
						</label>
						<label class="block">
							<span>Deskripsi/Caption</span>
							<textarea name="deskripsi" rows="4" placeholder=" Masukan deskripsi/caption" class="form-textarea w-full mt-1.5 resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary"></textarea>
						</label>
					</div>
					<div class="grid grid-cols-2 gap-4 sm:grid-cols-2">
						
					</div>
					<div>
						<span>Lampiran</span>
                          <label class="pt-2 block">
                            <input type="file" name="lampiran" class="block w-full text-sm text-slate-500
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-violet-50 file:text-violet-700
                              hover:file:bg-violet-100
                            "/>
                          </label>
					</div>
					<div class="flex justify-between pt-4">
						<a href="{{ route('publikasi/desain') }}" class="btn space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
							<span>Batal</span>
                        </a>
						<button type="submit" class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90">
							<span>Kirim</span>
						</button>
					</div>
                    
				</div>
            </form>
			</div>
		</div>
	</main>
</x-app-layout>