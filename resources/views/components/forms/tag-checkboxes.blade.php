@props(['label', 'name', 'tags', 'selected' => []])

<div>
    @if($label)
        <x-forms.label :label="$label" :name="$name" />
    @endif

    <div class="mt-2">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
            @foreach($tags as $tag)
                <div class="rounded-xl bg-white/5 border border-white/10 px-3 py-2">
                    <input type="checkbox"
                           name="{{ $name }}[]"
                           id="tag-{{ $tag->id }}"
                           value="{{ $tag->id }}"
                           {{ in_array($tag->id, old($name, $selected)) ? 'checked' : '' }}>
                    <label for="tag-{{ $tag->id }}" class="pl-1 cursor-pointer">{{ $tag->name }}</label>
                </div>
            @endforeach
        </div>
        <x-forms.error :error="$errors->first($name)" />
    </div>
</div>
