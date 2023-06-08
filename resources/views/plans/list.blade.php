@extends('layouts.app2')
@section('content')

<section class="bg-white dark:bg-gray-900">
<div class="px-4 py-8 ">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              
                <th scope="col" class="px-6 py-3">
                    Audity Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Audit Objective
                </th>
                <th scope="col" class="px-6 py-3">
                    Audit Criterias
                </th>
                <th scope="col" class="px-6 py-3">
                    Audit Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

            @if(!empty($clauses))
            @foreach ($clauses as $clause)
            
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
               
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{ $clause->clause_no }}
                </th>
                <td class="px-6 py-4">
                    {{ $clause->clause_sub_no }}
                </td>
                <td class="px-6 py-4">
                    {{ $clause->clause_desc }}
                </td>
                <td class="px-6 py-4">

                    @if( $clause->clause_status == 'on' )
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Enabled
                    </div>
                    @else
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> Disabled
                    </div>
                    @endif
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            @endforeach
            @endif
           
        </tbody>
        
    </table>


    
</div>
</section>
  


@endsection
