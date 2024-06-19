<x-layout>
    <x-form>
        <x-slot name="todo">{{ $todo->todo }}</x-slot>
        <x-slot name="description">{{ $todo->description }}</x-slot>
        {{ 'update/' . $todo->id }}
    </x-form>
</x-layout>
