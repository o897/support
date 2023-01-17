<script src="https://cdn.tailwindcss.com"></script>
<link href="{{ asset('argontheme/css/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('argontheme/fonts/nucleo-icons.svg') }}" rel="stylesheet" />
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <link href="{{asset('argontheme/css/argon-dashboard-tailwind.css?v=1.0.1')}}" rel="stylesheet" />
@include('layouts.sidenav')
<!-- component -->
<div class="container items-center px-5 py-12 lg:px-20">
  <form class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
   
    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Ticket Id</label>
      <input type="text" placeholder="{{ $ticket->id }}" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Name</label>
      <input type="text" name="name" placeholder="{{ $ticket->name }}" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Email</label>
      <input type="email" name="email" placeholder="{{ $ticket->email }}" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Date</label>
      <input type="date" name="date" placeholder="{{ $ticket->date }}" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Category</label>
      <input type="text" name="category" placeholder="{{ $ticket->categories }}" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Label</label>
      <input type="text" name="category" placeholder="{{ $ticket->label }}" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative mt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Agent</label>
      <select class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        <option>Surabaya</option>
        <option>Bandung</option>
        <option>jakarta</option>
      </select>
    </div>
    <div class="flex flex-wrap mt-4 mb-6 -mx-3">
      <div class="w-full px-3">
        <label class="text-base leading-7 text-blueGray-500" for="description">Descripton </label>
        <textarea class="w-full h-32 px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform bg-white border rounded-lg focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 apearance-none autoexpand" id="description" type="text" name="description" placeholder="{{ $ticket->description }}" required=""></textarea>
      </div>
    </div>
  
    <div class="flex items-center w-full pt-4 mb-4">
      <button class="w-full py-3 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Assign ticket </button>
    </div>
    <hr class="my-4 border-gray-200">
   
  </form>
</div>