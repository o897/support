<x-slot:title>
    User 
</x-slot:title>

   <!-- Navbar -->
   <x-user-navbar/>
   <!-- end Navbar --> 

@auth
@forelse($tickets as $ticket)
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
 <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
     <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
         <tr>
             <th scope="col" class="px-6 py-3">
                 Ticket id
             </th>
             <th scope="col" class="px-6 py-3">
                 Description
             </th>
             <th scope="col" class="px-6 py-3">
                 Status
             </th>
             <th scope="col" class="px-6 py-3">
                 Category
             </th>
             <th scope="col" class="px-6 py-3">
               Label
           </th>
             <th scope="col" class="px-6 py-3">
                 <span class="sr-only">Edit</span>
             </th>
         </tr>
     </thead>
     <tbody>
       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
         <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
             Apple MacBook Pro 17"
         </th>
         <td class="px-6 py-4">
             Sliver
         </td>
         <td class="px-6 py-4">
             Laptop
         </td>
         <td class="px-6 py-4">
             $2999
         </td>
          <td class="px-6 py-4">
             $2999
         </td>
         <td class="px-6 py-4 text-right">
             <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
         </td>
     </tr>  
       @empty
       <p class="text-center">No tickets</p>
       @endforelse

       
        
         
     </tbody>
 </table>
</div>  
@endauth
   


  
