@extends('layouts.agent')

<div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    {{-- https://formbold.com/s/FORM_ID --}}
    <div class="formbold-form-wrapper">
    <h1>User ticket</h1>
      <form action="/agent/{{ $ticket->ticket_id }}" method="POST">
        @csrf
        @method('PUT')
     
        <div class="formbold-input-wrapp formbold-mb-3">
          <h6>Ticket ID: {{ $ticket->ticket_id}}</h6>
        </div> 
        <div class="formbold-input-wrapp formbold-mb-3">
          <h6>Message</h6>
          <p>{{ $ticket->description}}</p>
        </div> 
        <div class="formbold-input-wrapp formbold-mb-3">
          <h6>Categories</h6>
          <p>{{ $ticket->categories }}</p>
        </div>
        <div class="formbold-input-wrapp formbold-mb-3">
          <h6>Label</h6>
          <p>{{ $ticket->label }}</p>
        </div>
        <div class="formbold-input-wrapp formbold-mb-3">
          <h6>Status</h6>
          <p>{{ $ticket->status }}</p>
        </div>
        

        <div class="formbold-mb-3">
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 ">Status</label>
            <select name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected>Update ticket status</option>
              <option value="Open">Open</option>
              <option value="Closed">Closed</option>
            </select>
                              
        </div>    
  
        <button class="formbold-btn">Update</button>
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
