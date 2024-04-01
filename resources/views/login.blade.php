<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body class="container mx-auto">
          <main class="w-full max-w-md mx-auto p-6">
            <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
              <div class="p-4 sm:p-7">
                <div class="text-center">
                  <img src="{{ asset('images/chistiydom-zayavka.png') }}" alt="" class="w-[70%] mx-auto">
                  <h1 class="mt-4 text-center text-3xl font-bold text-blue-700">Войти на панел управления!</h1>
                </div>
      
                <div class="mt-5">
                    @if(Session::has('error'))
                    <div class="bg-red-50 border-s-4 border-red-500 p-4 dark:bg-red-800/30" role="alert">
                        <div class="flex">
                          <div class="flex-shrink-0">
                            <!-- Icon -->
                            <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-red-100 bg-red-200 text-red-800 dark:border-red-900 dark:bg-red-800 dark:text-red-400">
                              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                            </span>
                            <!-- End Icon -->
                          </div>
                          <div class="ms-3">
                            <h3 class="text-gray-800 font-semibold dark:text-white">
                              Error!
                            </h3>
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                {{ Session::get('error') }}
                            </p>
                          </div>
                        </div>
                      </div>
                    @endif


                  <!-- Form -->
                  <form action="{{ route('login') }}" method="POST" class="mt-5">
                    @csrf
                    <div class="grid gap-y-4">
                      <!-- Form Group -->
                      <div>
                        <label for="email" class="block text-sm mb-2 dark:text-white">Email</label>
                        <div class="relative">
                          <input type="email" id="email" name="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="email-error">
                          <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                            <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>
                          </div>
                        </div>
                        <p class="hidden text-xs text-red-600 mt-2" id="email-error">8+ characters required</p>
                      </div>
                      <!-- End Form Group -->
      
                      <!-- Form Group -->
                      <div>
                        <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                        <div class="relative">
                          <input type="password" id="password" name="password" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="password-error">
                          <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                            <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>
                          </div>
                        </div>
                        <p class="hidden text-xs text-red-600 mt-2" id="password-error">Password does not match the password</p>
                      </div>
                      <!-- End Form Group -->
      
      
                      <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Login</button>
                    </div>
                  </form>
                  <!-- End Form -->
                </div>
              </div>
            </div>
          </main>


</body>
</html>