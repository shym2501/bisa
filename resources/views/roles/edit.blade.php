<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Role
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('roles.update', $role->id) }}">
                    @csrf
                    @method('put')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('name', $role->name) }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6 rounded-md">
                            <label for="permission" class="block font-medium text-sm text-gray-700">Permission</label>
                            <div class="mt-1 max-h-60 overflow-y-auto">
                                @foreach($permission as $value)
                                    <label class="inline-flex items-center mb-2">
                                        <input type="checkbox" name="permission[]" value="{{ $value->id }}" {{ in_array($value->id, old('permission', [])) ? 'checked' : '' }} class="form-checkbox h-4 w-4 text-indigo-600">
                                        <span class="ml-2 text-sm text-gray-700">{{ $value->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                            @error('permission')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
