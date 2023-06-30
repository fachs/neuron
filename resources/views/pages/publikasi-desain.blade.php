<x-app-layout title="Pengajuan Desain" is-header-blur="true">
	<main class="main-content w-full px-[var(--margin-x)] pb-8">
		<div class="flex items-center space-x-4 py-5 lg:py-6 justify-between">
			<div class="flex space-x-3">
				<h2 class="text-lg font-medium text-slate-800 lg:text-2xl"> Desain </h2>
				<div class="mx-4 my-1 w-px bg-slate-200"></div>
				<ul class="hidden flex-wrap items-center space-x-2 sm:flex">
					<li class="flex items-center space-x-2">
						<a class="text-primary transition-colors hover:text-primary-focus" href="{{ route('publikasi') }}">Publikasi</a>
						<svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</li>
					<li>Pengajuan Desain</li>
				</ul>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
			<!-- Collapsible  Table -->
				<div class="flex items-center justify-between"></div>
				<div class="card mt-3">
					<div class="is-scrollbar-hidden min-w-full overflow-x-auto" x-data="pages.tables.initExample1">
						<table class="is-hoverable w-full text-left">
							<thead>
								<tr>
									<th class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Judul </th>
									<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Status </th>
									<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Tanggal Unggah </th>
									<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Diunggah Oleh </th>
                  <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Jenis </th>
                  <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"> Bidang </th>
									<th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5 rounded-tr-lg pl-2"><div class="">Aksi</div>  </th>
								</tr>
							</thead>
							<tbody>
								<template x-for="user in usersData" :key="user.id">
									<tr class="border-y border-transparent border-b-slate-200">
										<td class="whitespace-nowrap px-4 py-3 sm:px-5" x-text="user.id"></td>
										<td class="whitespace-nowrap px-4 py-3 sm:px-5">   <span
                      class="tag rounded-full border border-success/30 bg-success/10 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25"
                    >
                      Success
                    </span></td>
										<td x-text="user.name" class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 lg:px-5"></td>
										<td x-text="user.age" class="whitespace-nowrap px-4 py-3 sm:px-5"></td>
                    <td x-text="user.age" class="whitespace-nowrap px-4 py-3 sm:px-5"></td>
                    <td x-text="user.age" class="whitespace-nowrap px-4 py-3 sm:px-5"></td>
										<td class="flex whitespace-nowrap py-3>
                      <div class="">
                        <label class="btn">
                          <input
        tabindex=""
        type="file"
        class="pointer-events-none absolute inset-0 opacity-0"
      />
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#22c55e" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
      </svg>
                        </label>
                      </div>
											
                      
                    <div class="pt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3b82f6" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg>
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