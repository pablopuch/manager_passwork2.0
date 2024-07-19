<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Passworks') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="w-full">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Passworks') }}</h1>
                        <p class="mt-2 text-sm text-gray-700">A list of all the {{ __('Passworks') }}.</p>
                    </div>
                    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                        <a type="button" wire:navigate href="{{ route('passworks.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add new</a>
                    </div>
                </div>

                <div class="flow-root">
                    <div class="mt-8 overflow-x-auto">
                        <div class="inline-block min-w-full py-2 align-middle">
                            <table class="w-full divide-y divide-gray-300">
                                <thead>
                                <tr>
                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">No</th>
                                    
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Passgroup Id</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">User Id</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Name</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">User Pass</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Email Pass</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Password Pass</th>
									<!-- <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Link</th> -->
									<!-- <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Note</th> -->
									<!-- <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Url Img</th> -->
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Favourite</th>

                                    <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($passworks as $passwork)
                                    <tr class="even:bg-gray-50" wire:key="{{ $passwork->id }}">
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">{{ ++$i }}</td>
                                        
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $passwork->passgroup_id }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $passwork->user_id }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $passwork->name }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $passwork->user_pass }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $passwork->email_pass }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $passwork->password_pass }}</td>
										<!-- <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $passwork->link }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $passwork->note }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $passwork->url_img }}</td> -->
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $passwork->favourite }}</td>

                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                            <a wire:navigate href="{{ route('passworks.show', $passwork->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Show') }}</a>
                                            <a wire:navigate href="{{ route('passworks.edit', $passwork->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Edit') }}</a>
                                            <button
                                                class="text-red-600 font-bold hover:text-red-900"
                                                type="button"
                                                wire:click="delete({{ $passwork->id }})"
                                                wire:confirm="Are you sure you want to delete?"
                                            >
                                                {{ __('Delete') }}
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="mt-4 px-4">
                                {!! $passworks->withQueryString()->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>