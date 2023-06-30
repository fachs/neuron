<x-app-layout title="Beranda" is-header-blur="true">
	<!-- Main Content Wrapper -->
	<main class="main-content w-full px-[var(--margin-x)] pb-8"> 
      @foreach ($prokers as $proker) 
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
							<div class="progress my-2 h-1.5 bg-warning/30">
								<span class="w-8/12 rounded-full bg-warning"></span>
							</div>
							<p class="text-right text-xs+ font-medium">{{ $proker->progress }}%</p>
						</div>
						<div class="mt-5 flex flex-wrap -space-x-3 justify-between">

							<div class="avatar h-8 w-8 hover:z-10">
								<div class="is-initial rounded-full border-2 border-warning bg-info text-xs+ uppercase text-white"> jd </div>
							</div>
							<div class="flex space-x-3">
								<div class="pt-1">
								
									<a href="{{ route('kepanitiaan') }}" target="_blank" rel="noopener noreferrer">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
											<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
										  </svg>
									</a>
								</div>
								<div class="pt-1">
									<a href="{{ route('kepanitiaan') }}" target="_blank" rel="noopener noreferrer">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										<path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
									  </svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> @endforeach </div>
	</main>
</x-app-layout>