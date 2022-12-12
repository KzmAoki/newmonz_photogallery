<x-app-layout>
    <div>
        <div class="p-3 rounded shadow bg-green-200">success</div>
        <div class="mt-3 p-3 rounded shadow-lg bg-red-200">denied</div>
    </div>
    <div class="mt-5">
        <x-button>ボタン</x-button>
        <x-button class="bg-green-600 hover:bg-green-500 active:bg-green-700 focus:border-green-700">ボタン</x-button>
        <x-button class="bg-blue-600 hover:bg-blue-500 active:bg-blue-700 focus:border-blue-700">ボタン</x-button>
        <x-button class="bg-yellow-600 hover:bg-yellow-500 active:bg-yellow-700 focus:border-yellow-700">ボタン</x-button>
        <x-button class="bg-red-600 hover:bg-red-500 active:bg-red-700 focus:border-red-700">ボタン</x-button>
    </div>
    <div class="mt-5">
        <x-dropdown align="left">
            <x-slot name="trigger">
                <x-button>ドロップダウン</x-button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link href="/">メニュー1</x-dropdown-link>
                <x-dropdown-link href="/">メニュー2</x-dropdown-link>
                <x-dropdown-link href="/">メニュー3</x-dropdown-link>
            </x-slot>
        </x-dropdown>
    </div>
    <div class="mt-5">
        <input type="text" class="form-control" placeholder="textfield"></input>
        <input type="date" class="form-control" value="{{ today()->toDateString() }}"></input>
        <select class="form-control">
            <option value="1">option1</option>
            <option value="2">option2</option>
            <option value="3">option3</option>
        </select>
    </div>
    <div class="mt-5">
        <div class="flex text-white">
            <div class="w-1/6 p-3 bg-blue-600">1</div>
            <div class="w-3/6 p-3 bg-yellow-600">2</div>
            <div class="w-2/6 p-3 bg-green-600">3</div>
        </div>
    </div>
    <div class="mt-5">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
            @foreach (range(1, 10) as $number)
            <div class="p-2">
                <div class="py-5 text-center text-white cursor-pointer bg-indigo-400 hover:bg-indigo-300">
                    {{ $number }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
