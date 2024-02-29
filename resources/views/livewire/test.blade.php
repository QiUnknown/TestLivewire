<div class="p-10">
    <h1>Values: [{{ implode(', ', $values) }}]</h1>
    <div class="m-10">
        @foreach($values as $i => $value)
            <button type="button" wire:click="setIndex({{ $i }})" class="p-2 border-2 border-gray-600">
                {{ $i }}
            </button>
        @endforeach
    </div>
    <div class="mb-10">
        <input wire:model.live="values.{{ $index }}" />
    </div>
    <div>
        <h1 class="pb-10">Logs</h1>
        <p>
            {!! $log !!}
        </p>
    </div>
</div>
