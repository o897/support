@extends('layouts.user')

@section('content')

<div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    {{-- https://formbold.com/s/FORM_ID --}}
    <div class="formbold-form-wrapper">
    <h1>Create ticket</h1>
      <form action="/customer" method="POST" enctype="multipart/form-data">
        @csrf
     
        <div class="formbold-input-wrapp formbold-mb-3">
          <label for="firstname" class=""> Title</label>
  
          <div>
            <input
              type="text"
              name="title"
              id="firstname"
              placeholder="Title"
              class="formbold-form-input"
            />
          </div>
        </div>
  
        <div class="formbold-mb-3">
          <label for="age" class=""> Message </label>
          <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
        </div>
  
        <div class="formbold-mb-3">
          <label for="dob" class=""> Labels </label>
        </div>
        <div class="formbold-mb-3">
                        
            <div class="flex">
                <div class="flex items-center mr-4">
                    <input id="inline-checkbox" name="label[]" type="checkbox" value="bug" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-checkbox" class="ml-2 text-sm px-2 font-medium text-gray-900 dark:text-gray-300">bug</label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="inline-2-checkbox" name="label[]" type="checkbox" value="question" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-2-checkbox" class="ml-2 text-sm px-2 font-medium text-gray-900 dark:text-gray-300">question</label>
                </div>
                <div class="flex items-center mr-4">
                    <input checked id="inline-checked-checkbox" name="label[]" type="checkbox" value="enhancement" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">enhancement</label>
                </div>
            </div>

        </div>
  
        <div class="formbold-mb-3">
            <label for="dob" class=""> Categories </label>
          </div>
          <div class="formbold-mb-3">
                          
              <div class="flex">
                  <div class="flex items-center mr-4">
                      <input id="inline-checkbox"  name="categories[]"  value="Uncategorized" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="inline-checkbox"  class="ml-2 text-sm px-2 font-medium text-gray-900 dark:text-gray-300">Uncategorized</label>
                  </div>
                  <div class="flex items-center mr-4">
                      <input id="inline-2-checkbox" name="categories[]" value="Billing/Payments" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="inline-2-checkbox"  class="ml-2 text-sm px-2 font-medium text-gray-900 dark:text-gray-300">Billing/Payments</label>
                  </div>
                  <div class="flex items-center mr-4">
                      <input checked id="inline-checked-checkbox" name="categories[]"  value="Technical question" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="inline-checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Technical questions</label>
                  </div>
              </div>
  
          </div>
  
        <div class="formbold-mb-3">

            <label for="priority" class="block mb-2 text-sm font-medium text-gray-900 ">Select an option</label>
            <select id="countries" name="priority" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected>Select the priority</option>
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
            </select>
                              
        </div>       
  
        {{-- <div class="formbold-mb-3">
          <label for="upload" class="">
            files
          </label>
          <input
            type="file"
            name="files"
            id="upload"
            class="formbold-form-input formbold-form-file"
          />
        </div> --}}
  
        <button class="formbold-btn">Submit</button>
      </form>
    </div>
  </div>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Inter', sans-serif;
    }
    .formbold-mb-3 {
      margin-bottom: 15px;
    }
    .formbold-relative {
      position: relative;
    }
    .formbold-opacity-0 {
      opacity: 0;
    }
    .formbold-stroke-current {
      stroke: #ffffff;
      z-index: 999;
    }
    #supportCheckbox:checked ~ div span {
      opacity: 1;
    }
    #supportCheckbox:checked ~ div {
      background: #6a64f1;
      border-color: #6a64f1;
    }
  
    .formbold-main-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px;
    }
  
    .formbold-form-wrapper {
      margin: 0 auto;
      max-width: 570px;
      width: 100%;
      background: white;
      padding: 40px;
    }
  
    .formbold-img {
      display: block;
      margin: 0 auto 45px;
    }
  
    .formbold-input-wrapp > div {
      display: flex;
      gap: 20px;
    }
  
    .formbold-input-flex {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
    }
    .formbold-input-flex > div {
      width: 50%;
    }
    .formbold-form-input {
      width: 100%;
      padding: 13px 22px;
      border-radius: 5px;
      border: 1px solid #dde3ec;
      background: #ffffff;
      font-weight: 500;
      font-size: 16px;
      color: #536387;
      outline: none;
      resize: none;
    }
    .formbold-form-input::placeholder,
    select.formbold-form-input,
    .formbold-form-input[type='date']::-webkit-datetime-edit-text,
    .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
    .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
    .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
      color: rgba(83, 99, 135, 0.5);
    }
  
    .formbold-form-input:focus {
      border-color: #6a64f1;
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
    .formbold-form-label {
      color: #536387;
      font-size: 14px;
      line-height: 24px;
      display: block;
      margin-bottom: 10px;
    }
  
    .formbold-checkbox-label {
      display: flex;
      cursor: pointer;
      user-select: none;
      font-size: 16px;
      line-height: 24px;
      color: #536387;
    }
    .formbold-checkbox-label a {
      margin-left: 5px;
      color: #6a64f1;
    }
    .formbold-input-checkbox {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border-width: 0;
    }
    .formbold-checkbox-inner {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 20px;
      height: 20px;
      margin-right: 16px;
      margin-top: 2px;
      border: 0.7px solid #dde3ec;
      border-radius: 3px;
    }
  
    .formbold-form-file {
      padding: 12px;
      font-size: 14px;
      line-height: 24px;
      color: rgba(83, 99, 135, 0.5);
    }
    .formbold-form-file::-webkit-file-upload-button {
      display: none;
    }
    .formbold-form-file:before {
      content: 'Upload';
      display: inline-block;
      background: #EEEEEE;
      border: 0.5px solid #E7E7E7;
      border-radius: 3px;
      padding: 3px 12px;
      outline: none;
      white-space: nowrap;
      -webkit-user-select: none;
      cursor: pointer;
      color: #637381;
      font-weight: 500;
      font-size: 12px;
      line-height: 16px;
      margin-right: 10px;
    }
  
    .formbold-btn {
      font-size: 16px;
      border-radius: 5px;
      padding: 14px 25px;
      border: none;
      font-weight: 500;
      background-color: #6a64f1;
      color: white;
      cursor: pointer;
      margin-top: 25px;
    }
    .formbold-btn:hover {
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
  
    .formbold-w-45 {
      width: 45%;
    }
  </style>
@endsection