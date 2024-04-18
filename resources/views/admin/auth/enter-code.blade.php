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
          <h5 class="font-inter font-semibold text-2xl text-center text-gray-800 mb-2">Забыли пароль?</h5>
          <p class="w-[370px] mx-auto text-sm text-gray-400 text-center">
            Мы отправили вам SMS с 6-значным кодом, введите его чтобы подтвердить что это ваш номер
          </p>
        </div>
        <form class="flex flex-col" action="{{ route('enter.code') }}" method="POST">
          @csrf
          <div class="mb-9">
            <label for="number" class="font-inter pl-4 mb-2 text-sm text-gray-900 block">Код</label>
            <input
            id="confirmation_code" name="confirmation_code" required
              
              type="text"
              placeholder="-----"
              required
              class="bg-gray-50 border border-gray-200 text-gray-500 text-sm rounded-3xl outline-none focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4"
            />
            @if(!empty(session('error')))                             
            <p class=" hidden mt-1 ml-4 text-red-500 text-xs font-medium">{{session('error')}}</p> @endif
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
