<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div
      class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
        マタレシピ
      </h1>
      <p class="mb-8 leading-relaxed">お腹の赤ちゃんのために栄養を取らなきゃいけないけど料理するのが大変</br>そんな夫婦の悩みを解決する『簡単なレシピ』を共有するアプリです</p>
      <div class="flex justify-center">
        <button
          class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
          <a href="{{ route('register') }}">新規登録</a></button>
        <button
          class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">
          <a href="{{ route('register') }}">ログイン</a></button>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-4/6">
      <img class="object-cover object-center rounded" src="{{asset('logo/maternity-recipe-icon.png')}}" width=" 720"
        height="600">
    </div>
  </div>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</section>