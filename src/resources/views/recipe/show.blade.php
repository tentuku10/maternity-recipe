<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          投稿の個別表示
      </h2>

      <x-message :message="session('message')" />

  </x-slot>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-4 sm:p-8">
          <div class="px-10 mt-4">
              <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                <div class="mt-4">
                  <h1 class="text-lg text-gray-700 font-semibold">
                      {{ $recipe->dish_name }}
                  </h1>
                  <hr class="w-full">
                </div>
                <div class="flex justify-end mt-4">
                    <a href="{{route('recipe.edit', $recipe)}}"><x-primary-button class="bg-teal-700 float-right">編集</x-primary-button></a>
                    <form method="post" action="{{route('recipe.destroy', $recipe)}}">
                    @csrf
                    @method('delete')
                        <x-primary-button class="bg-red-700 float-right ml-4" onClick="return confirm('本当に削除しますか？');">削除</x-primary-button>
                    </form>
                </div>
                      <p class="mt-4 text-gray-600 py-4">{{$recipe->body}}</p>
                      @if($recipe->image)
                          <img src="{{ asset('storage/images/'.$recipe->image)}}" class="mx-auto" style="height:300px;">
                      @endif
                      <p class="mt-4 text-gray-600 py-4 whitespace-pre-line">{{$recipe->food}}</p>
                      <p class="mt-4 text-gray-600 py-4 whitespace-pre-line">{{$recipe->how_to_make}}</p>
                      <div class="text-sm font-semibold flex flex-row-reverse">
                          <p> {{ $recipe->user->name }} • {{$recipe->created_at->diffForHumans()}}</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
