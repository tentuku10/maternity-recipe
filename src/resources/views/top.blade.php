<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'マタレシピ') }}</title>
</head>

<body class="font-sans antialiased">
  <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img src="{{asset('logo/maternity-recipe-icon.png')}}">
          </div>
          <div
            class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
              マタレシピ
            </h1>
            <p class="mb-8 leading-relaxed">
              お腹の赤ちゃんのために栄養を取らなきゃいけないけど料理するのが大変。そんな夫婦の悩みを解決する『簡単なレシピ』を共有するアプリです。
            </p>
            <div class="flex justify-center">
              <button
                class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">
                <a href="{{ route('login') }}" class="text-white-500">ログイン</a>
              </button>
              <button
                class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">
                <a href="{{ route('register') }}" class="text-white-500">新規登録</a>
              </button>
            </div>
          </div>
        </div>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
      </section>
    </div>
  </div>
</body>

</html>