<!DOCTYPE html>
<html lang="en">
  <head>@vite('resources/css/app.css')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href= "/assets/vosiq.svg" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <title>Vosiq</title>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              inter: '"Inter", serif',
              alice: '"Alice", sans-serif',
            },
            backgroundImage: {
              auth: "linear-gradient(rgba(17, 17, 17, 0.7), rgba(17, 17, 17, 0.7)),url('/assets/auth-bg.jpg')",
            },
          },
        },
      };
    </script>
  </head>
  <body>
  @if(session('success'))
<div class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
  <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
    <div class="rounded-lg shadow-xs overflow-hidden">
      <div class="p-4">
        <div class="flex items-start">
          <div class="flex-shrink-0">
            <svg class="h-6 w-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div class="ml-3 w-0 flex-1 pt-0.5">
            <p class="text-sm leading-5 font-medium text-gray-900">
              {{ session('success') }}
            </p>
          </div>
          <div class="ml-4 flex-shrink-0 flex">
            <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
              <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6.293 7.293a1 1 0 011.414 0L10 10.586l2.293-2.293a1 1 0 111.414 1.414L11.414 12l2.293 2.293a1 1 0 01-1.414 1.414L10 13.414l-2.293 2.293a1 1 0 01-1.414-1.414L8.586 12 6.293 9.707a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
    <div class="h-screen flex items-center justify-around flex-col bg-auth bg-center bg-cover">
      <div class="w-full max-w-screen-2xl flex flex-col-reverse gap-5 justify-between items-center px-8 md:flex-row">
        <div class="flex justify-center items-center">
          <img class="w-[84px] h-[82px]" src="/assets/vosiq.svg" alt="Icon: Logo of school" />
          <p class="font-alice text-md text-white text-center w-52 uppercase">
            Vosiq <br />
            international school & kindergarten
          </p>
        </div>
        <div class="flex gap-3">
          <a href="https://www.apple.com/app-store"><img src="/assets/app-store-btn.png" alt="Link: To App Store" /></a>
          <a href="https://play.google.com/store"><img src="/assets/google-play-btn.png" alt="Link: To Google Play" /></a>
        </div>
      </div>
      <div class="w-[600px] bg-white rounded-2xl p-8 flex flex-col gap-9 justify-center self-center">
        <div>
          <div class="flex justify-center items-center">
            <img class="w-[110px] h-[110px]" src="/assets/vosiq.svg" alt="Icon: Logo of school" />
            <p class="font-alice text-2xl text-gray-600 text-center w-[19rem] uppercase">
              Vosiq <br />
              international school & kindergarten
            </p>
          </div>
        </div>
        <h5 class="font-inter font-semibold text-2xl text-center text-gray-800 mb-2">Привет! Добро пожаловать, снова!</h5>
        <form class="flex flex-col" method="POST" action="{{ route('admin.login.submit') }}">
          @csrf
          <div class="mb-5">
            <label for="email" class="font-inter pl-4 mb-2 text-sm text-gray-900 block">Email</label>
            <input
              id="email" type="email" 
              name="email" value="{{ old('email') }}" 
              required autocomplete="email" autofocus
              placeholder="Введите email"
              required
              class="bg-gray-50 border border-gray-200 text-gray-500 text-sm rounded-3xl outline-none focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 form-control @error('email') is-invalid @enderror"
            />
           
          </div>
          <div class="mb-5">
            <label for="password" class="font-inter pl-4 mb-2 text-sm text-gray-900 block">Пароль</label>
            <input
              id="password"
              type="password" 
              name="password" 
              required autocomplete="current-password"
              placeholder="Введите пароль"
              required
              class="bg-gray-50 border border-gray-200 text-gray-500 text-sm rounded-3xl outline-none focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 form-control @error('password') is-invalid @enderror"
            />
          @if ($errors->any())
            <p class="mt-1 ml-4 text-red-500 text-xs font-medium">{{ $errors->first('password') }}</p> @endif
          </div>
          <div class="flex justify-between items-center mb-10">
            <div class="flex items-center pl-2">
              <input
                id="remember"
                type="checkbox"
                value=""
                class="appearance-none relative peer w-5 h-5 bg-gray-200 rounded checked:bg-blue-800 checked:border-0"
              />
              <label for="remember" class="ms-2 text-sm font-medium text-gray-900">Запомните меня</label>
              <svg
                class="absolute w-4 h-4 ml-0.5 hidden text-white peer-checked:block pointer-events-none"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="4"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            
            <a href="{{ route('admin.forgot-password.form')}}" class="text-blue-950 font-semibold">Забыли пароль?</a>
          </div>
          <button
            type="submit"
            class="text-white bg-blue-950 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-3xl text-sm w-full sm:w-auto px-5 py-2.5 text-center"
          >
            Войти
          </button>
        </form>
      </div>
    </div>
  </body>
</html>
