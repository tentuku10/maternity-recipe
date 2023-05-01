<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>マタレシピ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css"
    integrity="sha512-Jp/LLTaU5hNlWJn/+f+Gq3PQHlrHQ0gzBwn+2X80JklGjKc1aqrv8Dwsx+ID+C/eJb+0EjU5/n6U0X6UdPK0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="flex flex-col h-screen justify-between">
    <header class="bg-gray-900 text-white flex items-center justify-between px-4 py-3">
      <h1 class="text-xl font-bold">マタレシピ
      </h1>
    </header>
    <main class="flex-grow px-4 py-8">
      <p class="text-gray-500 leading-relaxed">
        料理はめんどくさいけど赤ちゃんのために栄養は取らなきゃ。</br>そんな悩みを解決する簡単なレシピを共有するアプリです。
      </p>
      <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('register') }}">
        新規登録
      </a>
      <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('login') }}">
        ログイン
      </a>
    </main>
    <footer class="bg-gray-900 text-white flex items-center justify-center px-4 py-3">
      <p class="text-sm">&copy; 2023 Simple Web App. All rights reserved.</p>
    </footer>
  </div>
</body>

</html>