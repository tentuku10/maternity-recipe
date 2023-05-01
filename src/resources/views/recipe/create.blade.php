<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            レシピの新規作成
        </h2>
        <x-validation-errors class="mb-4" :errors="$errors" />
        <x-message :message="session('message')" />
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <form method="post" action="{{route('recipe.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="md:flex items-center mt-8">
                    <div class="w-full flex flex-col">
                        <label for="body" class="font-semibold leading-none mt-4">料理名</label>
                        <input type="text" name="dish_name"
                            class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:border-yellow-500 focus:ring-yellow-500"
                            id="title" value="{{old('dish_name')}}">
                    </div>
                </div>

                <div class="w-full flex flex-col">
                    <label for="body" class="font-semibold leading-none mt-4">食材</label>
                    <textarea name="food"
                        class="w-auto py-2 border border-gray-300 rounded-md focus:border-yellow-500 focus:ring-yellow-500"
                        id="body" cols="30" rows="5">{{old('food')}}</textarea>
                </div>

                <div class="w-full flex flex-col">
                    <label for="body" class="font-semibold leading-none mt-4">作り方</label>
                    <textarea name="how_to_make"
                        class="w-auto py-2 border border-gray-300 rounded-md focus:border-yellow-500 focus:ring-yellow-500"
                        id="body" cols="30" rows="10">{{old('how_to_make')}}</textarea>
                </div>

                <div class="w-full flex flex-col">
                    <label for="image" class="font-semibold leading-none mt-4">画像(最大1MB)</label>
                    <div>
                        <input id="image" type="file" name="image">
                    </div>
                </div>

                <x-primary-button class="mt-4 bg-yellow-500 hover:bg-yellow-600">
                    送信する
                </x-primary-button>

            </form>
        </div>
    </div>
</x-app-layout>