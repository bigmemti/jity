<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('form.submit')}}" method="POST">
                        @csrf
                        <div>
                            <h3>حوزه فعالیت خود را انتخاب کنید:</h3>
                            @foreach ($fields as $field)
                                <div>
                                    <input type="checkbox" name="fields[]" value="{{ $field->id}}" id="field-{{ $field->id}}" @checked(in_array($field->id,auth()->user()->fields->pluck('id')->toArray())) />
                                    <label for="field-{{ $field->id}}"> {{ $field->name }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div>
                            <h3>روز های درگیر خود راه انتخاب کنید :</h3>
                            @foreach ($groups as $group)
                            <div>
                                <input type="checkbox" name="groups[]" value="{{ $group->id}}" id="group-{{ $group->id}}" @checked(in_array($group->id,auth()->user()->groups->pluck('id')->toArray()))/>
                                <label for="group-{{ $group->id}}"> {{ $group->week_day->name }}-{{ $group->time->name }}</label>
                            </div>
                        @endforeach
                        </div>
                        <input type="submit" value="ثبت">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
