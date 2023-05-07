<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            レシピ一覧
        </h2>
        <x-message :message="session('message')" />
    </x-slot>
    <div class="flex items-center justify-center h-full">
        <form method="get" action="{{route('recipe.index')}}" style="margin-top: 30px;">
            <input type="search" name="search" value="{{$search}}" placeholder="タグで検索"
                class="flex-1 h-10 px-4 m-1 text-gray-100 placeholder-gray-400 rounded-lg bg-white lg:h-12 dark:text-gray-200 focus:outline-none focus:placeholder-transparent focus:ring-0 focus:text-black focus:border-black">
            <button type="submit"
                class="btn-primary bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-4 rounded-lg">
                検索
            </button>
        </form>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @foreach ($recipes as $recipe)
        <div class="mx-4 sm:p-8">
            <div class="mt-4">
                <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                    <div class="mt-4">
                        <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">
                            <h1
                                class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer float-left pt-4">
                                <a href="{{route('recipe.show', $recipe)}}">{{ $recipe->dish_name }}</a>
                            </h1>
                        </h1>
                        <hr class="w-full">
                        @if($recipe->image)
                        <img src="{{ asset('storage/images/'.$recipe->image)}}" class="mx-auto" style="height:300px;">
                        @endif
                        <p class="mt-4 text-gray-600 py-4">
                            @foreach ($recipe->tags as $tag)
                            @if ($tag->name != '')
                            <span
                                class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">
                                {{ $tag->name }}
                            </span>
                            @endif
                            @endforeach
                        </p>
                        <div class="text-sm font-semibold flex flex-row-reverse">
                            <p>{{ $recipe->user->name }}</p>
                        </div>
                        <div class="text-sm font-semibold flex flex-row-reverse">
                            <p>{{$recipe->created_at->diffForHumans()}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>