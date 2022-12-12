<x-app-layout>
  <form action="{{ route('photos.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label class="py-2 px-4 rounded bg-green-600 hover:bg-green-700 text-white text-sm cursor-pointer">
      写真をアップロード
      <input type="file" name="file" class="hidden" onchange="this.closest('form').submit()">
      <x-button type="submit" class="hidden">アップロード</x-button>
    </label>
  </form>
  <ul id="my-gallery" class="mt-3 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 md:gap-6 xl:gap-8">
    @foreach ($photos as $photo)
    <li class="group h-64 flex justify-end items-end items-end bg-gray-100 overflow-hidden rounded-lg shadow-lg relative">
      <a href="{{ $photo->photo_url }}">
        <img 
        src="{{ $photo->photo_url }}"
        alt="Photo by {{ $photo->user->name }}"
        class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-105 transition duration-200"/>
      </a>
      <div class="bg-gradient-to-t form-gray-800 via-transparen to-transparent opacity-50 absolute inset-0 pointer-events-none"></div>
      <form class="hidden group-hover:block" onsubmit="return confirm('本当に削除しますか？')" action="{{ route('photos.destroy', $photo) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="inline-block text-gray-200 text-xs md:text-sm border border-gray-500 rounded-lg backdrop-blur hover:bg-gray-800 relative px-2 md:px-3 py-1 mr-3 mb-3">&times;</button>
      </form>
    </li>
    @endforeach
  </ul>
  @if ($photos->lastPage() > 1)
  <div class="mt-4 px-4 py-1 rounded bg-gray-300">
    {{ $photos->links() }}
  </div>
  @endif
</x-app-layout>