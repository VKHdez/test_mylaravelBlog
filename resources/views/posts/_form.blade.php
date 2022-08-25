@csrf
<label class="uppercase text-gray-700 text xs" for="">Título</label>
<span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>
<input class="rounded border-gray-200 w-full mb-4" type="text" name="title" value="{{ old('title', $post->title) }}">

<label class="uppercase text-gray-700 text xs" for="">Enlace directo (Slug)</label>
<span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>
<input class="rounded border-gray-200 w-full mb-4" type="text" name="slug" value="{{ old('slug', $post->slug) }}">

<label class="uppercase text-gray-700 text xs" for="">contenido</label>
<span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>
<textarea class="rounded border-gray-200 w-full mb-4" rows="6" name="body" >{{ old('body', $post->body) }}</textarea>

<div class="flex justify-between items-center">
    <a class="text-indigo-600" href="{{ route('posts.index') }}">< Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>
