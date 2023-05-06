<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            レシピの編集
        </h2>
        <x-validation-errors class="mb-4" :errors="$errors" />
        <x-message :message="session('message')" />
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <form method="post" action="{{route('recipe.update', $recipe)}}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="md:flex items-center mt-8">
                    <div class="w-full flex flex-col">
                        <label for="dish_name" class="font-semibold leading-none mt-4">料理名</label>
                        <input type="text" name="dish_name"
                            class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="dish_name"
                            value="{{old('dish_name', $recipe->dish_name)}}">
                    </div>
                </div>

                <div class="w-full flex flex-col">
                    <label for="food" class="font-semibold leading-none mt-4">食材</label>
                    <textarea name="food" class="w-auto py-2 border border-gray-300 rounded-md" id="food" cols="30"
                        rows="5">{{old('food', $recipe->food)}}</textarea>
                </div>

                <div class="w-full flex flex-col">
                    <label for="how_to_make" class="font-semibold leading-none mt-4">作り方</label>
                    <textarea name="how_to_make" class="w-auto py-2 border border-gray-300 rounded-md" id="how_to_make"
                        cols="30" rows="10">{{old('how_to_make', $recipe->how_to_make)}}</textarea>
                </div>
                <div class="w-full flex flex-col">
                    <label for="tags" class="font-semibold leading-none mt-4">タグ</label>
                    <input type="text" name="tags"
                        class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="tags"
                        value="{{old('tags', implode(',', $recipe->tags->pluck('name')->toArray()))}}"
                        style="margin-top: 4px;">
                </div>
                <div class="w-full flex flex-col">
                    @if($recipe->image)
                    <img src="{{ asset('storage/images/'.$recipe->image)}}" class="mx-auto" style="height:300px;">
                    @endif
                    <label for="image" class="font-semibold leading-none mt-4">画像(最大1MB)</label>
                    <div>
                        <input id="image" type="file" name="image">
                    </div>
                </div>

                <x-primary-button class="mt-4">
                    送信する
                </x-primary-button>

            </form>
        </div>
    </div>
</x-app-layout>