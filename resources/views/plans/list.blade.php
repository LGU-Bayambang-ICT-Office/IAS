@extends('layouts.app2')
@section('content')

<section class="bg-white dark:bg-gray-900">
<div class="px-4 py-8 ">
    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">List of Audit Plan</h2>
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

            @if(!empty($audit_Plan))
            @foreach ($audit_Plan as $plan)
            
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
               
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{ $plan->audit_type }}
                </th>
                <td class="px-6 py-4">
                    {{!! $plan->audit_objective !!}}
                </td>
                <td class="px-6 py-4">
                    {{!! $plan->audit_criteria !!}}
                </td>
                <td class="px-6 py-4">
                    {{ date('F d, Y', strtotime($plan->audit_date_from)) }} - {{ date('F d, Y', strtotime($plan->audit_date_to)) }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('selected_plan', $plan->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Assign Auditors</a>
                </td>
            </tr>
            @endforeach
            @endif
           
        </tbody>
        
    </table>


    
</div>
</section>
  


@endsection
