<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="w-full text-center font-bold text-5xl">Mes commandes</h1>
                    <br>
                    <hr>
                    <br>
                    <div class="bg-white">
                        <div class="mx-auto max-w-2xl px-4  lg:max-w-7xl lg:px-8">
                          {{-- <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2> --}}

                          <table class="w-full divide-y divide-gray-300">
                            <thead>
                              <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Numéro</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Total</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Dates</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                  <span class="sr-only">Edit</span>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($commandes as $commande)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{$commande->numero}}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$commande->total}}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$commande->created_at->format('d m Y')}}</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td collspan=4>Vous n'avez pas encore de commande validée !</td></tr>
                                @endforelse
                  
                              <!-- More people... -->
                            </tbody>
                          </table>
                      
                        </div>
                    </div>
                      
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
