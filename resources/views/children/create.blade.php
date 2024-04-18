<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../assets/vosiq.svg" type="image/x-icon" />
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
            colors: {
              primary: '#191B1A',
              subtext: '#757676',
              accent: '#FBE2C7',
              hover: '#143D60',
            },
          },
        },
      };
    </script>
  </head>
  <body class="flex">
    <aside class="w-[19rem] min-h-screen border-r p-4 fixed flex flex-col justify-between">
      <div class="flex justify-center items-center gap-1">
        <img class="w-[56px] h-[56px]" src="../assets/vosiq.svg" alt="Icon: Logo of school" />
        <p class="font-alice max-w-[9.5rem] text-xs text-subtext text-center uppercase">
          Vosiq <br />
          international school & kindergarten
        </p>
      </div>

      <ul>
        <li
          class="flex items-center font-inter font-medium text-primary gap-3 hover:bg-accent hover:text-hover py-5 px-4 rounded-full transition-colors"
        >
          <img class="hover:text-hover" src="../assets/statistics.svg" alt="Icon: Statistics" />
          Статистика
        </li>
        <li
          class="flex items-center font-inter font-medium text-primary gap-3 hover:bg-accent hover:text-hover py-5 px-4 rounded-full transition-colors"
        >
          <img class="hover:text-hover" src="../assets/user.svg" alt="Icon: Statistics" />
          Регистрация
        </li>
        <li
          class="flex items-center font-inter font-medium text-primary gap-3 hover:bg-accent hover:text-hover py-5 px-4 rounded-full transition-colors"
        >
          <img class="hover:text-hover" src="../assets/contract.svg" alt="Icon: Statistics" />
          Трёхсторонний договор
        </li>
        <li
          class="flex items-center font-inter font-medium text-primary gap-3 hover:bg-accent hover:text-hover py-5 px-4 rounded-full transition-colors"
        >
          <img src="../assets/money.svg" alt="Icon: Statistics" />
          Оплата
          <img class="justify-self-end" src="../assets/down.svg" alt="Icon: Down" />
        </li>

        <li
          class="flex items-center font-inter font-medium text-primary gap-3 hover:bg-accent hover:text-hover py-5 px-4 rounded-full transition-colors"
        >
          <img class="hover:text-hover" src="../assets/message.svg" alt="Icon: Statistics" />
          SMS рассылка
        </li>
        <li
          class="flex items-center font-inter font-medium text-primary gap-3 hover:bg-accent hover:text-hover py-5 px-4 rounded-full transition-colors"
        >
          <img class="hover:text-hover" src="../assets/statemnt.svg" alt="Icon: Statistics" />
          Заявления
        </li>
        <li
          class="flex items-center font-inter font-medium text-primary gap-3 hover:bg-accent hover:text-hover py-5 px-4 rounded-full transition-colors"
        >
          <img class="hover:text-hover" src="../assets/setting.svg" alt="Icon: Statistics" />
          Настройки
        </li>
      </ul>

      <div class="flex">
        <div class="flex flex-col w-1/2 p-4 gap-3 rounded-xl hover:bg-accent hover:text-hover">
          <img class="w-[24px] h-[24px]" src="../assets/vosiq.svg" alt="Icon: Logo of school" />
          <p class="font-inter font-medium">
            Bolalar <br />
            Maktabi
          </p>
        </div>
        <div class="flex flex-col w-1/2 p-4 gap-3 rounded-xl hover:bg-accent hover:text-hover">
          <img class="w-[24px] h-[24px]" src="../assets/vosiq.svg" alt="Icon: Logo of school" />
          <p class="font-inter font-medium">
            Bolalar <br />
            Bog’chasi
          </p>
        </div>
      </div>
    </aside>
    <main class="ml-[19rem] flex-1 flex flex-col font-inter h-screen">
      <div class="flex py-3 pr-8 justify-end border-b">
        <button
          class="transition group flex gap-2 rounded-3xl border-hover text-hover border text-sm font-medium px-5 py-3 hover:bg-hover hover:text-white"
        >
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M19.9506 9H10.4142L13.7071 5.70711L12.2929 4.29289L7.29289 9.29289L6.58579 10L7.29289 10.7071L12.2929 15.7071L13.7071 14.2929L10.4142 11H19.9506C19.4489 16.0533 15.1853 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.1853 0 19.4489 3.94668 19.9506 9Z"
              fill="#143D60"
              class="group-hover:fill-white"
            />
          </svg>

          LOG OUT
        </button>
      </div>
      <div class="flex items-center justify-between py-7 px-8">
        <h3 class="font-medium text-2xl text-[#464646]">Добавить Ребёнка</h3>
        <button
          form="addKidForm"
          type="submit"
          class="transition group flex gap-2 rounded-[2.5rem] border-hover text-white border text-sm font-medium px-5 py-3 bg-hover hover:bg-sky-950"
        >
          Сохранить
        </button>
      </div>
      <div>
    </div>
    @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
      <form class="flex-1 bg-[#F5F5f5] py-5 px-8 flex flex-col flex-wrap gap-5" id="addKidForm" method="POST" action="{{ route('children.register') }}" enctype="multipart/form-data">
        @csrf
        <div class="flex gap-5">
          <div class="flex-1 flex flex-col gap-12">
            <div class="bg-white p-6 rounded-lg">
              <h4 class="text-xl pb-3 font-medium border-b">Основная информация</h4>
              <div class="flex flex-wrap gap-6 pt-5">
                <div class="flex-1 flex flex-col gap-2">
                  <label for="kidID" class="text-[#474848] font-medium pl-4">ID Ребёнка</label>
                  <input
                    class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3 min-w-96 max-w-[536px]"
                    type="text"
                    id="kidID"
                    placeholder="Напишите ID"
                    name="child_id_number"
                  />
                </div>
                <div class="flex-1 flex flex-col gap-2">
                  <label for="kidFIO" class="text-[#474848] font-medium pl-4">ФИО ребенка</label>
                  <input
                    class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3 min-w-96 max-w-[536px]"
                    type="text"
                    id="kidFIO"
                    placeholder="Введите имя"
                    name="child_FIO"
                    />
                </div>
                <div class="flex-1 flex flex-col gap-2">
                  <label for="kidDate" class="text-[#474848] font-medium pl-4">Дата рождения</label>
                  <input
                    class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3 min-w-96 max-w-[536px]"
                    type="date"
                    id="kidDate"
                    placeholder="Напишите ID"
                    name="date_of_birth"
                  />
                </div>
                <div class="flex-1 flex flex-col gap-2">
                  <label for="kidStart" class="text-[#474848] font-medium pl-4">Дата поступления</label>
                  <input
                    class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3 min-w-96 max-w-[536px]"
                    type="date"
                    id="kidStart"
                    placeholder="Напишите ID"
                    name="date_of_enrollment"
                  />
                </div>
              </div>
            </div>
            <div class="bg-white p-6 rounded-lg">
              <h4 class="text-xl pb-3 font-medium border-b">Информация о местонахождении</h4>
              <div class="flex flex-wrap gap-6 pt-5">
                <div class="flex-1 flex flex-col gap-2">
                  <label for="kidID" class="text-[#474848] font-medium pl-4">Адрес</label>
                  <input
                    class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3"
                    type="text"
                    id="kidID"
                    placeholder="Введите Адрес"
                    name="address"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="bg-white p-6 rounded-lg basis-full max-w-[30rem] max-h-[548px]">
            <h4 class="text-xl pb-5 border-b font-semibold">Фотография</h4>
            <div id="defaultImage" class="flex items-center justify-center w-full pt-5 mb-6">
              <label
                for="dropzone-file"
                class="flex flex-col items-center justify-center w-full h-[22rem] border-1 rounded-lg cursor-pointer bg-[#f5f5f5] hover:bg-neutral-200 transition"
              >
                <div class="flex flex-col items-center justify-center">
                  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M28.9059 22.6133L24.7326 12.8667C23.3192 9.56 20.7192 9.42667 18.9726 12.5733L16.4526 17.12C15.1726 19.4267 12.7859 19.6267 11.1326 17.56L10.8393 17.1867C9.11925 15.0267 6.69258 15.2933 5.45258 17.76L3.15925 22.36C1.54592 25.56 3.87925 29.3333 7.45258 29.3333H24.4659C27.9326 29.3333 30.2659 25.8 28.9059 22.6133Z"
                      stroke="#8C8D8D"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M9.29297 10.6667C11.5021 10.6667 13.293 8.87581 13.293 6.66667C13.293 4.45753 11.5021 2.66667 9.29297 2.66667C7.08383 2.66667 5.29297 4.45753 5.29297 6.66667C5.29297 8.87581 7.08383 10.6667 9.29297 10.6667Z"
                      stroke="#8C8D8D"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>

                  <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">Загрузите изображение</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" name="photo" accept="image/*"/>
              </label>
            </div>
            <div id="image-preview" class="hidden"></div>
            <label
              for="dropzone-file"
              class="w-full py-3 flex justify-center items-center gap-3 rounded text-hover font-semibold bg-[#f5f5f5] hover:bg-neutral-200 transition"
            >
              <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M10.5007 11.6667L9.79354 12.3738L10.5007 13.0809L11.2078 12.3738L10.5007 11.6667ZM11.5007 4.16666C11.5007 3.61437 11.0529 3.16666 10.5007 3.16666C9.94837 3.16666 9.50065 3.61437 9.50065 4.16666L11.5007 4.16666ZM5.62688 8.2071L9.79354 12.3738L11.2078 10.9595L7.04109 6.79288L5.62688 8.2071ZM11.2078 12.3738L15.3744 8.2071L13.9602 6.79288L9.79354 10.9595L11.2078 12.3738ZM11.5007 11.6667L11.5007 4.16666L9.50065 4.16666L9.50065 11.6667L11.5007 11.6667Z"
                  fill="#143D60"
                />
                <path
                  d="M4.66602 13.3333L4.66602 14.1667C4.66602 15.0872 5.41221 15.8333 6.33268 15.8333L14.666 15.8333C15.5865 15.8333 16.3327 15.0872 16.3327 14.1667V13.3333"
                  stroke="#143D60"
                  stroke-width="2"
                />
              </svg>
              Загрузить
            </label>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg w-5/6">
          <h4 class="text-xl pb-3 font-medium border-b">Информация о родителях</h4>
          <div class="flex flex-col flex-wrap gap-6 pt-5 h-[460px]">
            <div class="flex-1 flex flex-col gap-2">
              <label for="kidID" class="text-[#474848] font-medium pl-4">ФИО мамы ребенка</label>
              <input
                class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3 min-w-96 max-w-[536px]"
                type="text"
                id="kidID"
                placeholder="Введите имя"
                name="mother_FIO"
              />
            </div>
            <div class="flex-1 flex flex-col gap-2">
              <label for="kidID" class="text-[#474848] font-medium pl-4">ФИО отца ребенка</label>
              <input
                class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3 min-w-96 max-w-[536px]"
                type="text"
                id="kidID"
                placeholder="Введите имя"
                name="father_FIO"
              />
            </div>
            <div class="flex-1 flex flex-col gap-2">
              <label for="kidID" class="text-[#474848] font-medium pl-4">Адрес (если другой)</label>
              <input
                class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3 min-w-96 max-w-[536px]"
                type="text"
                id="kidID"
                placeholder="Введите эл.адрес"
                name="email"
              />
            </div>
            <div class="flex-1 flex flex-col gap-2">
              <label for="kidID" class="text-[#474848] font-medium pl-4">Номер телефона (Домашний)</label>
              <input
                class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3 min-w-96 max-w-[536px]"
                type="text"
                id="kidID"
                placeholder="Введите номер"
                name="home_phone_number"
              />
            </div>
            <div class="flex-1 flex flex-col gap-2">
              <label for="kidID" class="text-[#474848] font-medium pl-4">Номер телефона мамы (Мобильный)</label>
              <input
                class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3 min-w-96 max-w-[536px]"
                type="text"
                id="kidID"
                placeholder="Введите номер телефона"
                name="mother_phone_number"
              />
            </div>
            <div class="flex-1 flex flex-col gap-2">
              <label for="kidID" class="text-[#474848] font-medium pl-4">Номер телефона отца (Мобильный)</label>
              <input
                class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3 min-w-96 max-w-[536px]"
                type="text"
                id="kidID"
                placeholder="Введите номер телефона"
                name="father_phone_number"
              />
            </div>
            <div class="flex-1 flex flex-col gap-2">
              <label for="kidID" class="text-[#474848] font-medium pl-4">Серия пасспорта отца</label>
              <input
                class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3 min-w-96 max-w-[536px]"
                type="text"
                id="kidID"
                placeholder="Введите серию пасспорта"
                name="father_passport_series"
              />
            </div>
            <div class="flex-1 flex flex-col gap-2">
              <label for="kidID" class="text-[#474848] font-medium pl-4">Серия пасспорта мамы</label>
              <input
                class="border rounded-3xl bg-[#F5F5F5] text-[#8C8D8D] pl-4 py-3 min-w-96 max-w-[536px]"
                type="text"
                id="kidID"
                placeholder="Введите серию пасспорта"
                name="mother_passport_series"
              />
            </div>
          </div>
        </div>
      </form>
    </main>
    <script>
      document.getElementById('dropzone-file').addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function (event) {
            const imgElement = document.createElement('img');
            document.getElementById('defaultImage').classList.add('hidden');
            imgElement.src = event.target.result;
            imgElement.classList.add('w-full', 'h-[24rem]', 'pb-6', 'mt-3', 'rounded');
            document.getElementById('image-preview').classList.remove('hidden');
            document.getElementById('image-preview').innerHTML = '';
            document.getElementById('image-preview').appendChild(imgElement);
          };
          reader.readAsDataURL(file);
        }
      });
    </script>
  </body>
</html>