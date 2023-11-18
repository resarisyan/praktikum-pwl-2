<x-app-layout>
    <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800
          dark:text-gray-200 leading-tight">
          {{ __('Book') }}
       </h2>
    </x-slot>
    <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white light:bg-gray-800 overflowhidden shadow-sm sm:rounded-lg">
             <div class="p-6 text-gray-900 dark:text-gray100">
                <x-primary-button tag="a" href="{{route('bookshelf.create')}}">Create Data Bookshelf</x-primary-button>
                <x-table>
                    <x-slot name="header">
                       <tr>
                          <th>#</th>
                          <th>Code</th>
                          <th>Name</th>
                       </tr>
                    </x-slot>
                    @php $num=0; @endphp
                    @foreach ($bookshelves as $bookshelf)
                        <tr>
                            <td>{{ $num+=1 }}</td>
                            <td>{{ $bookshelf->code }}</td>
                            <td>{{ $bookshelf->name }}</td>
                        </tr>
                    @endforeach
                 </x-table>
             </div>
          </div>
       </div>
    </div>
 </x-app-layout>
