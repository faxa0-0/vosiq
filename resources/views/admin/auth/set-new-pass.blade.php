<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/assets/vosiq.svg" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>
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
    <div class="h-screen flex justify-center items-center bg-auth bg-center bg-cover">
      <div class="w-[600px] bg-white rounded-2xl p-8 flex flex-col gap-9 justify-center">
        <div>
          <div class="flex justify-center items-center">
            <img class="w-[110px] h-[110px]" src="/assets/vosiq.svg" alt="Icon: Logo of school" />
            <p class="font-alice text-2xl text-gray-600 text-center w-[19rem] uppercase">
              Vosiq <br />
              international school & kindergarten
            </p>
          </div>
        </div>
        <div>
          <h5 class="font-inter font-semibold text-2xl text-center text-gray-800 mb-2">Сменить пароль</h5>
          <p class="text-sm text-gray-400 text-center">Новый пароль не должен совпадать с предыдущим</p>
        </div>
        <form class="flex flex-col" action="{{route('reset.pass')}}" method="post">
          @csrf
          <input type="hidden" id="email" name="email" value="{{ session('email')}}" required autofocus><br><br>
          <div class="mb-5" x-data="{ show: true }">
            <label for="password" class="font-inter pl-4 mb-2 text-xs text-gray-900 block">Новый пароль</label>
            <div class="relative">
              <input
                id="password"
                name="password"
                :type="show ? 'password' : 'text'"
                placeholder="-------"
                required
                class="bg-gray-50 border border-gray-200 text-gray-500 text-sm rounded-3xl outline-none focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4"
              />
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                <svg
                  class="h-4 mr-2 text-gray-700"
                  fill="none"
                  @click="show = !show"
                  :class="{'hidden': !show, 'block':show }"
                  xmlns="http://www.w3.org/2000/svg"
                  viewbox="0 0 576 512"
                >
                  <path
                    fill="currentColor"
                    d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"
                  ></path>
                </svg>

                <svg
                  class="h-4 mr-2 text-gray-700"
                  fill="none"
                  @click="show = !show"
                  :class="{'block': !show, 'hidden':show }"
                  xmlns="http://www.w3.org/2000/svg"
                  viewbox="0 0 640 512"
                >
                  <path
                    fill="currentColor"
                    d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"
                  ></path>
                </svg>
              </div>
            </div>
            <p class="hidden mt-1 ml-4 text-red-500 text-xs font-medium">Какая-то ошибка при валидации</p>
          </div>
          <div class="mb-5" x-data="{ show: true }">
            <label for="password" class="font-inter pl-4 mb-2 text-xs text-gray-900 block">Подтвердите новый пароль</label>
            <div class="relative">
              <input
                id="password_confirmation"
                name="password_confirmation" 
                :type="show ? 'password' : 'text'"
                placeholder="-------"
                required
                class="bg-gray-50 border border-gray-200 text-gray-500 text-sm rounded-3xl outline-none focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4"
              />
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                <svg
                  class="h-4 mr-2 text-gray-700"
                  fill="none"
                  @click="show = !show"
                  :class="{'hidden': !show, 'block':show }"
                  xmlns="http://www.w3.org/2000/svg"
                  viewbox="0 0 576 512"
                >
                  <path
                    fill="currentColor"
                    d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"
                  ></path>
                </svg>

                <svg
                  class="h-4 mr-2 text-gray-700"
                  fill="none"
                  @click="show = !show"
                  :class="{'block': !show, 'hidden':show }"
                  xmlns="http://www.w3.org/2000/svg"
                  viewbox="0 0 640 512"
                >
                  <path
                    fill="currentColor"
                    d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"
                  ></path>
                </svg>
              </div>
            </div>
            @if(!empty(session('error')))                             
            <p class=" mt-1 ml-4 text-red-500 text-xs font-medium">{{session('error')}}</p> @endif
          </div>
          <button
            type="submit"
            class="text-white bg-blue-950 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-3xl text-sm w-full sm:w-auto px-5 py-2.5 text-center"
          >
            Продолжить
          </button>
        </form>
      </div>
    </div>
  </body>
</html>
