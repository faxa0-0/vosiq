
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
  <body class="relative flex">
    <aside class="w-[19rem] min-h-screen border-r p-4 flex flex-col justify-between">
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
    <main class="flex-1 flex flex-col font-inter">
      <div class="flex py-3 justify-end gap-2 border-b">
      <form action="{{ route('admin.logout') }}" method="POST">
          @csrf
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
      </form>
        <button
          class="transition flex gap-2 rounded-3xl border-hover text-hover border text-sm font-medium px-5 py-3 hover:bg-hover hover:text-white"
        >
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="10" fill="#143D60" />
            <g clip-path="url(#clip0_378_1285)">
              <path
                d="M10.6484 3.00757C11.4455 4.162 12.0667 5.42849 12.4915 6.76548C13.4637 6.61297 14.4 6.28497 15.2549 5.79751L15.5058 5.64195C14.3157 4.13581 12.56 3.1836 10.6484 3.00757Z"
                fill="white"
              />
              <path
                d="M11.7562 7.89246C11.1731 7.95923 10.5867 7.99275 9.99991 7.9928C9.41305 7.99272 8.82668 7.95923 8.24364 7.89246C8.11977 8.42007 8.04089 8.95725 8.00781 9.49818H11.992C11.959 8.95725 11.88 8.42007 11.7562 7.89246Z"
                fill="white"
              />
              <path
                d="M9.99983 13.0107C9.50541 13.0112 9.01134 13.0368 8.51953 13.0875C8.88132 14.1678 9.37874 15.1979 9.99983 16.153C10.6209 15.1979 11.1183 14.1678 11.4801 13.0875C10.9883 13.0368 10.4943 13.0112 9.99983 13.0107Z"
                fill="white"
              />
              <path
                d="M12.9913 10.5018C12.9607 11.0939 12.8807 11.6824 12.752 12.2611C13.8203 12.4386 14.8478 12.8078 15.7848 13.351L16.0683 13.5276C16.6065 12.6037 16.9251 11.5685 16.9996 10.5018H12.9913Z"
                fill="white"
              />
              <path
                d="M16.0683 6.4729L15.7848 6.64955C14.848 7.1936 13.8205 7.56368 12.752 7.74194C12.8805 8.31969 12.9606 8.90714 12.9913 9.49821H16.9996C16.925 8.43174 16.6064 7.39671 16.0683 6.4729Z"
                fill="white"
              />
              <path
                d="M8.00781 10.5018C8.04118 11.0428 8.12042 11.58 8.24464 12.1076C9.41169 11.9742 10.5901 11.9742 11.7572 12.1076C11.8807 11.5799 11.9593 11.0427 11.992 10.5018H8.00781Z"
                fill="white"
              />
              <path
                d="M4.21483 6.64955L3.9313 6.4729C3.39325 7.39671 3.07462 8.43174 3 9.49821H7.00833C7.03908 8.90714 7.11914 8.31966 7.24769 7.74194C6.17914 7.56368 5.15163 7.1936 4.21483 6.64955Z"
                fill="white"
              />
              <path
                d="M7.50839 13.2351C6.53631 13.3877 5.6 13.7155 4.74503 14.2026L4.49414 14.3586C5.68415 15.8648 7.43997 16.8169 9.35148 16.9925C8.55428 15.8383 7.93313 14.572 7.50839 13.2351Z"
                fill="white"
              />
              <path
                d="M9.99983 3.84753C9.37883 4.80251 8.88144 5.83237 8.51953 6.91247C9.01131 6.96346 9.50541 6.98907 9.99983 6.98924C10.4943 6.98907 10.9883 6.96343 11.4801 6.91247C11.1182 5.83237 10.6208 4.80251 9.99983 3.84753Z"
                fill="white"
              />
              <path
                d="M15.2544 14.2025C14.3995 13.7154 13.4632 13.3876 12.4911 13.235C12.0659 14.572 11.4442 15.8383 10.6465 16.9924C12.558 16.8168 14.3138 15.8647 15.5038 14.3585L15.2544 14.2025Z"
                fill="white"
              />
              <path
                d="M4.49609 5.64195L4.74548 5.79751C5.60034 6.28497 6.53667 6.61294 7.50885 6.76548C7.93414 5.42837 8.55582 4.16192 9.35343 3.00757C7.44193 3.18357 5.68622 4.13578 4.49609 5.64195Z"
                fill="white"
              />
              <path
                d="M7.00833 10.5018H3C3.07453 11.5685 3.39316 12.6037 3.93133 13.5276L4.21486 13.351C5.15184 12.8078 6.17931 12.4386 7.24769 12.2611C7.11894 11.6824 7.03888 11.0939 7.00833 10.5018Z"
                fill="white"
              />
            </g>
            <defs>
              <clipPath id="clip0_378_1285">
                <rect width="14" height="14" fill="white" transform="translate(3 3)" />
              </clipPath>
            </defs>
          </svg>
          ENG
        </button>
        <button
          class="transition flex gap-2 rounded-3xl border-hover text-hover border text-sm font-medium px-5 py-3 hover:bg-hover hover:text-white"
        >
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="10" fill="#143D60" />
            <g clip-path="url(#clip0_378_1285)">
              <path
                d="M10.6484 3.00757C11.4455 4.162 12.0667 5.42849 12.4915 6.76548C13.4637 6.61297 14.4 6.28497 15.2549 5.79751L15.5058 5.64195C14.3157 4.13581 12.56 3.1836 10.6484 3.00757Z"
                fill="white"
              />
              <path
                d="M11.7562 7.89246C11.1731 7.95923 10.5867 7.99275 9.99991 7.9928C9.41305 7.99272 8.82668 7.95923 8.24364 7.89246C8.11977 8.42007 8.04089 8.95725 8.00781 9.49818H11.992C11.959 8.95725 11.88 8.42007 11.7562 7.89246Z"
                fill="white"
              />
              <path
                d="M9.99983 13.0107C9.50541 13.0112 9.01134 13.0368 8.51953 13.0875C8.88132 14.1678 9.37874 15.1979 9.99983 16.153C10.6209 15.1979 11.1183 14.1678 11.4801 13.0875C10.9883 13.0368 10.4943 13.0112 9.99983 13.0107Z"
                fill="white"
              />
              <path
                d="M12.9913 10.5018C12.9607 11.0939 12.8807 11.6824 12.752 12.2611C13.8203 12.4386 14.8478 12.8078 15.7848 13.351L16.0683 13.5276C16.6065 12.6037 16.9251 11.5685 16.9996 10.5018H12.9913Z"
                fill="white"
              />
              <path
                d="M16.0683 6.4729L15.7848 6.64955C14.848 7.1936 13.8205 7.56368 12.752 7.74194C12.8805 8.31969 12.9606 8.90714 12.9913 9.49821H16.9996C16.925 8.43174 16.6064 7.39671 16.0683 6.4729Z"
                fill="white"
              />
              <path
                d="M8.00781 10.5018C8.04118 11.0428 8.12042 11.58 8.24464 12.1076C9.41169 11.9742 10.5901 11.9742 11.7572 12.1076C11.8807 11.5799 11.9593 11.0427 11.992 10.5018H8.00781Z"
                fill="white"
              />
              <path
                d="M4.21483 6.64955L3.9313 6.4729C3.39325 7.39671 3.07462 8.43174 3 9.49821H7.00833C7.03908 8.90714 7.11914 8.31966 7.24769 7.74194C6.17914 7.56368 5.15163 7.1936 4.21483 6.64955Z"
                fill="white"
              />
              <path
                d="M7.50839 13.2351C6.53631 13.3877 5.6 13.7155 4.74503 14.2026L4.49414 14.3586C5.68415 15.8648 7.43997 16.8169 9.35148 16.9925C8.55428 15.8383 7.93313 14.572 7.50839 13.2351Z"
                fill="white"
              />
              <path
                d="M9.99983 3.84753C9.37883 4.80251 8.88144 5.83237 8.51953 6.91247C9.01131 6.96346 9.50541 6.98907 9.99983 6.98924C10.4943 6.98907 10.9883 6.96343 11.4801 6.91247C11.1182 5.83237 10.6208 4.80251 9.99983 3.84753Z"
                fill="white"
              />
              <path
                d="M15.2544 14.2025C14.3995 13.7154 13.4632 13.3876 12.4911 13.235C12.0659 14.572 11.4442 15.8383 10.6465 16.9924C12.558 16.8168 14.3138 15.8647 15.5038 14.3585L15.2544 14.2025Z"
                fill="white"
              />
              <path
                d="M4.49609 5.64195L4.74548 5.79751C5.60034 6.28497 6.53667 6.61294 7.50885 6.76548C7.93414 5.42837 8.55582 4.16192 9.35343 3.00757C7.44193 3.18357 5.68622 4.13578 4.49609 5.64195Z"
                fill="white"
              />
              <path
                d="M7.00833 10.5018H3C3.07453 11.5685 3.39316 12.6037 3.93133 13.5276L4.21486 13.351C5.15184 12.8078 6.17931 12.4386 7.24769 12.2611C7.11894 11.6824 7.03888 11.0939 7.00833 10.5018Z"
                fill="white"
              />
            </g>
            <defs>
              <clipPath id="clip0_378_1285">
                <rect width="14" height="14" fill="white" transform="translate(3 3)" />
              </clipPath>
            </defs>
          </svg>
          RUS
        </button>
      </div>
      <div class="flex items-center justify-between py-9 px-8">
        <h3 class="font-medium text-2xl text-[#464646]">Регистрация</h3>
        <div class="flex gap-2">
          <form class="relative">
            <input
              type="text"
              placeholder="Поиск..."
              class="h-full w-72 appearance-none border rounded-full px-4 bg-[#F5F5F5] outline-none"
            />
            <button class="group absolute h-full right-4">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle
                  cx="9.16732"
                  cy="9.16671"
                  r="5.83333"
                  class="group-hover:stroke-black"
                  stroke="#908E8F"
                  stroke-width="2"
                />
                <path
                  d="M16.666 16.6666L14.166 14.1666"
                  class="group-hover:stroke-black"
                  stroke="#908E8F"
                  stroke-width="2"
                  stroke-linecap="round"
                />
              </svg>
            </button>
          </form>
          <button
            class="transition group flex gap-2 rounded-3xl border-hover text-hover border text-sm font-medium px-5 py-3 hover:bg-hover hover:text-white"
          >
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M8.15876 16.4473L8.47499 17.396L8.47499 17.396L8.15876 16.4473ZM12.1588 15.114L12.475 16.0627L12.475 16.0627L12.1588 15.114ZM16.3744 6.12627L15.6673 5.41916L16.3744 6.12627ZM12.7935 9.70715L13.5006 10.4143L12.7935 9.70715ZM4.33398 4.33337H15.6673V2.33337H4.33398V4.33337ZM4.33398 5.41916V4.33337H2.33398V5.41916H4.33398ZM7.91486 9.00004L4.33398 5.41916L2.91977 6.83337L6.50065 10.4142L7.91486 9.00004ZM6.50065 10.4142V15.973H8.50065V10.4142H6.50065ZM6.50065 15.973C6.50065 16.9968 7.50369 17.7198 8.47499 17.396L7.84253 15.4987C8.1663 15.3907 8.50065 15.6317 8.50065 15.973H6.50065ZM8.47499 17.396L12.475 16.0627L11.8425 14.1653L7.84253 15.4987L8.47499 17.396ZM12.475 16.0627C13.0875 15.8585 13.5006 15.2853 13.5006 14.6397H11.5006C11.5006 14.4244 11.6384 14.2334 11.8425 14.1653L12.475 16.0627ZM13.5006 14.6397V10.4143H11.5006V14.6397H13.5006ZM15.6673 5.41916L12.0864 9.00005L13.5006 10.4143L17.0815 6.83337L15.6673 5.41916ZM15.6673 4.33337V5.41916H17.6673V4.33337H15.6673ZM17.0815 6.83337C17.4566 6.4583 17.6673 5.94959 17.6673 5.41916H15.6673L15.6673 5.41916L17.0815 6.83337ZM13.5006 10.4143L13.5006 10.4143L12.0864 9.00005C11.7114 9.37512 11.5006 9.88383 11.5006 10.4143H13.5006ZM6.50065 10.4142L6.50065 10.4142H8.50065C8.50065 9.88382 8.28993 9.37511 7.91486 9.00004L6.50065 10.4142ZM2.33398 5.41916C2.33398 5.94959 2.5447 6.4583 2.91977 6.83337L4.33398 5.41916L4.33398 5.41916H2.33398ZM15.6673 4.33337L15.6673 4.33337H17.6673C17.6673 3.22881 16.7719 2.33337 15.6673 2.33337V4.33337ZM4.33398 2.33337C3.22941 2.33337 2.33398 3.2288 2.33398 4.33337H4.33398L4.33398 4.33337V2.33337Z"
                fill="#143D60"
                class="group-hover:fill-white"
              />
            </svg>
            Фильтр
          </button>
          <button
            class="transition group flex gap-2 rounded-3xl border-hover text-hover border text-sm font-medium px-5 py-3 hover:bg-hover hover:text-white"
          >
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M10.0007 11.6666L9.29354 12.3737L10.0007 13.0808L10.7078 12.3737L10.0007 11.6666ZM11.0007 4.16663C11.0007 3.61434 10.5529 3.16663 10.0007 3.16663C9.44837 3.16663 9.00065 3.61434 9.00065 4.16663L11.0007 4.16663ZM5.12688 8.20707L9.29354 12.3737L10.7078 10.9595L6.54109 6.79285L5.12688 8.20707ZM10.7078 12.3737L14.8744 8.20707L13.4602 6.79285L9.29354 10.9595L10.7078 12.3737ZM11.0007 11.6666L11.0007 4.16663L9.00065 4.16663L9.00065 11.6666L11.0007 11.6666Z"
                fill="#143D60"
                class="group-hover:fill-white"
              />
              <path
                d="M4.16602 13.3334L4.16602 14.1667C4.16602 15.0872 4.91221 15.8334 5.83268 15.8334L14.166 15.8334C15.0865 15.8334 15.8327 15.0872 15.8327 14.1667V13.3334"
                stroke="#143D60"
                class="group-hover:stroke-white"
                stroke-width="2"
              />
            </svg>

            Импорт
          </button>
          <button
            class="transition group flex gap-2 rounded-3xl border-hover text-hover border text-sm font-medium px-5 py-3 hover:bg-hover hover:text-white"
          >
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M10.0007 4.16663L9.29354 3.45952L10.0007 2.75241L10.7078 3.45952L10.0007 4.16663ZM11.0007 11.6666C11.0007 12.2189 10.5529 12.6666 10.0007 12.6666C9.44837 12.6666 9.00065 12.2189 9.00065 11.6666L11.0007 11.6666ZM5.12688 7.62619L9.29354 3.45952L10.7078 4.87373L6.54109 9.0404L5.12688 7.62619ZM10.7078 3.45952L14.8744 7.62619L13.4602 9.0404L9.29354 4.87373L10.7078 3.45952ZM11.0007 4.16663L11.0007 11.6666L9.00065 11.6666L9.00065 4.16663L11.0007 4.16663Z"
                fill="#143D60"
                class="group-hover:fill-white"
              />
              <path
                d="M4.16602 13.3334L4.16602 14.1667C4.16602 15.0872 4.91221 15.8334 5.83268 15.8334L14.166 15.8334C15.0865 15.8334 15.8327 15.0872 15.8327 14.1667V13.3334"
                stroke="#143D60"
                class="group-hover:stroke-white"
                stroke-width="2"
              />
            </svg>

            Экспорт
          </button>
          <button
            class="transition group flex gap-2 rounded-3xl border-hover text-white border text-sm font-medium px-5 py-3 bg-hover hover:bg-sky-950"
            >
            
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 5L10 15" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" />
              <path d="M15 10L5 10" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="{{route('children.create')}}">            Добавить Ребёнка</a>

            
          </button>
        </div>
      </div>
      <div class="flex-1 bg-[#F5F5f5] py-5 px-8">
      <div class="overflow-x-auto shadow-md sm:rounded-lg bg-white p-4">
          <table class="w-full text-sm text-left rtl:text-right text-gray-500">
          <thead class="text-sm text-[#5E5F5F] uppercase border-b">
              <tr>
                <th scope="col" class="px-6 py-3 font-medium">№</th>
                <th scope="col" class="px-6 py-3 font-medium">ФИО ребёнка</th>
                <th scope="col" class="px-6 py-3 font-medium whitespace-nowrap">ID ребёнка</th>
                <th scope="col" class="px-6 py-3 font-medium flex gap-1">
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    class="cursor-pointer"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M7.50065 10.8334L6.97032 10.303L7.50065 9.77271L8.03098 10.303L7.50065 10.8334ZM8.25065 18.3334C8.25065 18.7476 7.91487 19.0834 7.50065 19.0834C7.08644 19.0834 6.75065 18.7476 6.75065 18.3334L8.25065 18.3334ZM2.80365 14.4697L6.97032 10.303L8.03098 11.3637L3.86431 15.5304L2.80365 14.4697ZM8.03098 10.303L12.1976 14.4697L11.137 15.5304L6.97032 11.3637L8.03098 10.303ZM8.25065 10.8334L8.25065 18.3334L6.75065 18.3334L6.75065 10.8334L8.25065 10.8334Z"
                      fill="#5E5F5F"
                    />
                    <path
                      d="M12.5007 9.16663L11.9703 9.69696L12.5007 10.2273L13.031 9.69696L12.5007 9.16663ZM13.2507 1.66663C13.2507 1.25241 12.9149 0.916626 12.5007 0.916626C12.0864 0.916626 11.7507 1.25241 11.7507 1.66663L13.2507 1.66663ZM7.80365 5.53029L11.9703 9.69696L13.031 8.6363L8.86431 4.46963L7.80365 5.53029ZM13.031 9.69696L17.1976 5.53029L16.137 4.46963L11.9703 8.6363L13.031 9.69696ZM13.2507 9.16663L13.2507 1.66663L11.7507 1.66663L11.7507 9.16663L13.2507 9.16663Z"
                      fill="#5E5F5F"
                    />
                  </svg>
                  Родитель
                </th>
                <th scope="col" class="px-6 py-3 font-medium">Телефон</th>
                <th scope="col" class="px-6 py-3 font-medium">Паспорт</th>
                <th scope="col" class="px-6 py-3 font-medium">Дата регистрация</th>
                <th scope="col" class="px-6 py-3 font-medium">Педагог</th>
                <th scope="col" class="px-6 py-3 font-medium">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="9.99935" cy="10" r="1.66667" transform="rotate(90 9.99935 10)" fill="#5E5F5F" />
                    <ellipse
                      cx="9.99935"
                      cy="5.00004"
                      rx="1.66667"
                      ry="1.66667"
                      transform="rotate(90 9.99935 5.00004)"
                      fill="#5E5F5F"
                    />
                    <ellipse cx="9.99935" cy="15" rx="1.66667" ry="1.66667" transform="rotate(90 9.99935 15)" fill="#5E5F5F" />
                  </svg>
                </th>
              </tr>
            </thead>
            <div>
              @if(session()->has('success'))
                  <div>
                      {{session('success')}}
                  </div>
              @endif
          </div>
            <tbody>
              @foreach($children as $index => $child)
                  @for($i = 0; $i < 10; $i++)
                      <tr class="odd:bg-white even:bg-[#f5f5f5]">
                          <td class="px-6 py-4">{{ str_pad(($children->currentPage() - 1) * 10 + $index * 10 + $i + 1, 2, '0', STR_PAD_LEFT)  }}</td>
                          <td class="px-6 py-4">{{ $child->child_FIO }}</td>
                          <td class="px-6 py-4">{{ $child->child_id_number }}</td>
                          <td class="px-6 py-4">{{ $child->mother_FIO }}</td>
                          <td class="px-6 py-4">{{ $child->mother_phone_number }}</td>
                          <td class="px-6 py-4">{{ $child->mother_passport_series }}</td>
                          <td class="px-6 py-4">{{ $child->date_of_enrollment }}</td>
                          <td class="px-6 py-4">{{ $child->added_by }}</td>
                          <td scope="col" class="px-6 py-3 font-medium rounded-r-lg cursor-pointer contextToggle">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <circle cx="9.99935" cy="10" r="1.66667" transform="rotate(90 9.99935 10)" fill="#5E5F5F" />
                                  <ellipse cx="9.99935" cy="5.00004" rx="1.66667" ry="1.66667" transform="rotate(90 9.99935 5.00004)" fill="#5E5F5F" />
                                  <ellipse cx="9.99935" cy="15" rx="1.66667" ry="1.66667" transform="rotate(90 9.99935 15)" fill="#5E5F5F" />
                              </svg>
                          </td>
                      </tr>
                  @endfor
              @endforeach
            </tbody>
          </table>

          <ul id="contextMenu" class="absolute hidden bg-white rounded flex-col">
            <li
              id="contextMenuInfo"
              class="text-[#4D4D4D] cursor-pointer transition text-sm font-medium rounded px-3 py-2 flex gap-2 hover:bg-[#756e6e] hover:text-white whitespace-nowrap"
              >
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="10" cy="10" r="7.5" fill="#FBE2C7" />
                <path
                  d="M10.8327 5.83333C10.8327 6.29357 10.4596 6.66667 9.99935 6.66667C9.53911 6.66667 9.16602 6.29357 9.16602 5.83333C9.16602 5.3731 9.53911 5 9.99935 5C10.4596 5 10.8327 5.3731 10.8327 5.83333Z"
                  fill="#143D60"
                />
                <path
                  d="M10.0007 13.75V9.58329C10.0007 9.42852 10.0007 9.35113 9.99494 9.28589C9.9315 8.56072 9.35656 7.98578 8.63139 7.92233C8.56614 7.91663 8.48876 7.91663 8.33398 7.91663V7.91663M10.0007 13.75H11.2507M10.0007 13.75H8.75065"
                  stroke="#143D60"
                />
              </svg>

              <a href="{{route('children.show',['children'=>$child])}}">Больше инфо</a>
            </li>
            <li
              id="contextMenuEdit"
              class="text-[#4D4D4D] cursor-pointer transition text-sm font-medium rounded px-3 py-2 flex gap-2 hover:bg-[#756e6e] hover:text-white"            
              >
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M10.4167 6.25L5.01152 11.6551C4.79899 11.8677 4.69273 11.9739 4.62286 12.1045C4.55299 12.235 4.52352 12.3824 4.46457 12.6771L3.89709 15.5146C3.83057 15.8472 3.7973 16.0135 3.89191 16.1081C3.98652 16.2027 4.15283 16.1694 4.48544 16.1029L7.32287 15.5354L7.32288 15.5354C7.6176 15.4765 7.76497 15.447 7.89551 15.3771C8.02606 15.3073 8.13233 15.201 8.34486 14.9885L13.75 9.58333L10.4167 6.25Z"
                  fill="#FBE2C7"
                />
                <path
                  d="M5.11998 16.2133L5.11999 16.2133L5.14612 16.2068L5.14613 16.2068L7.10744 15.7164C7.12364 15.7124 7.13979 15.7084 7.15589 15.7044C7.37467 15.65 7.58497 15.5978 7.77642 15.4894C7.96787 15.381 8.12088 15.2275 8.28006 15.0679C8.29178 15.0561 8.30353 15.0444 8.31533 15.0325L14.1736 9.17426L14.1939 9.15399C14.4308 8.91712 14.6404 8.70758 14.7944 8.51774C14.9594 8.31435 15.1047 8.08237 15.1586 7.79022L14.5685 7.68139L15.1586 7.79021C15.194 7.59836 15.194 7.40164 15.1586 7.20979L14.5685 7.31861L15.1586 7.20978C15.1047 6.91763 14.9594 6.68565 14.7944 6.48226C14.6404 6.29242 14.4308 6.08289 14.1939 5.84602L14.1736 5.82574L14.1533 5.80545C13.9165 5.56855 13.7069 5.35899 13.5171 5.20495C13.3137 5.03991 13.0817 4.89464 12.7896 4.84075C12.5977 4.80537 12.401 4.80537 12.2091 4.84075C11.917 4.89464 11.685 5.03991 11.4816 5.20495C11.2918 5.359 11.0822 5.56856 10.8454 5.80546L10.8251 5.82574L4.9668 11.684C4.955 11.6958 4.94321 11.7076 4.93146 11.7193C4.77184 11.8785 4.61839 12.0315 4.50999 12.2229L5.03211 12.5186L4.50999 12.2229C4.4016 12.4144 4.34934 12.6247 4.29497 12.8435C4.29097 12.8596 4.28695 12.8757 4.28291 12.8919L3.78604 14.8794C3.78363 14.889 3.7812 14.8987 3.77874 14.9085C3.74013 15.0626 3.69645 15.2369 3.68195 15.3851C3.6658 15.5503 3.66728 15.8495 3.90857 16.0908C4.14985 16.3321 4.44908 16.3336 4.61421 16.3174C4.76247 16.3029 4.93673 16.2592 5.0908 16.2206C5.10061 16.2182 5.11034 16.2157 5.11998 16.2133Z"
                  stroke="#143D60"
                  stroke-width="1.2"
                />
                <path d="M10.416 6.25L13.7493 9.58333" stroke="#143D60" stroke-width="1.2" />
              </svg>

              <a href="{{route('children.edit',['children'=>$child])}}"> Изменить</a>
            </li>
            <li
              id="contextMenuDelete"
              class="text-[#4D4D4D] cursor-pointer transition text-sm font-medium rounded px-3 py-2 flex gap-2 hover:bg-[#756e6e] hover:text-white"
            >
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.33398 12.5L8.33398 10" stroke="#5E5F5F" stroke-width="1.2" stroke-linecap="round" />
                <path d="M11.666 12.5L11.666 10" stroke="#5E5F5F" stroke-width="1.2" stroke-linecap="round" />
                <path
                  d="M2.5 5.83337H17.5C17.0353 5.83337 16.803 5.83337 16.6098 5.8718C15.8164 6.02962 15.1962 6.64981 15.0384 7.44319C15 7.63639 15 7.86872 15 8.33337V12.6667C15 14.5523 15 15.4951 14.4142 16.0809C13.8284 16.6667 12.8856 16.6667 11 16.6667H9C7.11438 16.6667 6.17157 16.6667 5.58579 16.0809C5 15.4951 5 14.5523 5 12.6667V8.33337C5 7.86872 5 7.63639 4.96157 7.44319C4.80376 6.64981 4.18356 6.02962 3.39018 5.8718C3.19698 5.83337 2.96466 5.83337 2.5 5.83337Z"
                  fill="#FBE2C7"
                  stroke="#143D60"
                  stroke-width="1.2"
                  stroke-linecap="round"
                />
                <path
                  d="M8.38947 2.80883C8.48443 2.72023 8.69367 2.64194 8.98475 2.5861C9.27582 2.53027 9.63246 2.5 9.99935 2.5C10.3662 2.5 10.7229 2.53027 11.014 2.5861C11.305 2.64194 11.5143 2.72023 11.6092 2.80883"
                  stroke="#143D60"
                  stroke-width="1.2"
                  stroke-linecap="round"
                />
              </svg>

              <form method="post" action="{{route('children.destroy', ['children' => $child])}}">
                @csrf 
                @method('delete')
                Удалить
                <input type="submit" value="Delete" />
              </form>
            </li>
          </ul>
        </div>
      </div>

      {{ $children->links('children.paginate') }} 
      <div class="flex items-center gap-10 py-4 px-8">
        <div>
            
            
        </div>
    </div>
    </main>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const toggleIcons = document.querySelectorAll('.contextToggle');
        const contextMenu = document.getElementById('contextMenu');

        const contextMenuInfo = document.getElementById('contextMenuInfo');
        const contextMenuEdit = document.getElementById('contextMenuEdit');
        const contextMenuDelete = document.getElementById('contextMenuDelete');

        toggleIcons.forEach((icon) => {
          icon.addEventListener('click', function () {
            iconLocation = icon.getBoundingClientRect();

            if (contextMenu.classList.contains('hidden')) {
              contextMenu.style.top = iconLocation.top + 40 + 'px';
              contextMenu.style.left = iconLocation.left - 106 + 'px';

              contextMenu.classList.remove('hidden');
              contextMenu.classList.add('flex');
              return;
            }
            contextMenu.classList.remove('flex');
            contextMenu.classList.add('hidden');
          });
        });
      });
    </script>
  </body>
</html>
    