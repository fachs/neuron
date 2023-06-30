<x-app-layout title="SPTB Himpunan" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-lg font-medium text-slate-800 lg:text-2xl"
          >
            SPTB Himpunan
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus"
                href="{{ route('keuangan') }}"
                >Keuangan</a
              >
              <svg
                x-ignore
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </li>
            <li>SPTB Himpunan</li>
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">

          <!-- Collapsible  Table -->
          <div>
            <div class="flex items-center justify-between">
              
            </div>
            <div class="card mt-3">
              <div
                class="is-scrollbar-hidden min-w-full overflow-x-auto"
                x-data="pages.tables.initExample1"
              >
                <table class="is-hoverable w-full text-left">
                  <thead>
                    <tr>
                      <th
                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"
                      >
                        Nama Himpunan
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"
                      >
                        Nominal IUK
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"
                      >
                        Jumlah Mahasiswa
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"
                      >
                        Penanggung Jawab
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"
                      >
                        NIM
                      </th>
                      <th
                        class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"
                      >
                        Lampiran
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <template x-for="user in usersData" :key="user.id">
                      <tr
                        class="border-y border-transparent border-b-slate-200"
                      >
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                          x-text="user.id"
                        ></td>
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                          x-text="user.id"
                        ></td>
                        <td
                          x-text="user.name"
                          class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 lg:px-5"
                        ></td>
                        <td
                          x-text="user.age"
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        ></td>
                        <td
                          x-text="user.phone"
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        ></td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                           
                          <button
    class="btn space-x-2 rounded-full bg-success text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
  >
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
  </svg>
  
    <span> SPTB </span>
  </button>
  <button
  class="btn space-x-2 rounded-full bg-success text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
>
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
</svg>

  <span> Nama </span>
</button>
                                                             
                        </td>
                        
                      </tr>
                    </template>
                  </tbody>
                </table>
              </div>

              <div
                class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
              >
                <div class="text-xs+">1 - 10 of 10 entries</div>

                <ol class="pagination">
                  <li class="rounded-l-full bg-slate-150">
                    <a
                      href="#"
                      class="flex h-8 w-8 items-center justify-center rounded-full text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15 19l-7-7 7-7"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="bg-slate-150">
                    <a
                      href="#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-primary px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90"
                      >1</a
                    >
                  </li>
                  <li class="bg-slate-150">
                    <a
                      href="#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80"
                      >2</a
                    >
                  </li>
                  
                  <li class="bg-slate-150">
                    <a
                      href="#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80"
                      >3</a
                    >
                  </li>
                  <li class="bg-slate-150">
                    <a
                      href="#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80"
                      >4</a
                    >
                  </li>
                  <li class="bg-slate-150">
                    <a
                      href="#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80"
                      >5</a
                    >
                  </li>
                  <li class="rounded-r-full bg-slate-150">
                    <a
                      href="#"
                      class="flex h-8 w-8 items-center justify-center rounded-full text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 5l7 7-7 7"
                        />
                      </svg>
                    </a>
                  </li>
                </ol>
              </div>
        </div>
      </main>
</x-app-layout>
