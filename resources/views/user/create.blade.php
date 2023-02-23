<x-app>
  <form action="/user" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-3">
      <label for="title" class="form-label">Title:</label>
      <input type="text" class="form-control" placeholder="Mr" name="title" required>
    </div>

    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Message:</label>
      <textarea class="form-control" rows="5" name="content" required></textarea>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill in the description.</div>

    </div>

    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Labels</label><br>
      <div class="form-check-inline">
        <input type="checkbox" class="form-check-input" value="bug" name="label[]" >
        <label class="form-check-inline" for="check1">bug</label>
    
        <input type="checkbox" class="form-check-input"  value="question" name="label[]" >
        <label class="form-check-inline" for="check2">question</label>
     
        <input type="checkbox" class="form-check-input" value="enhancement" name="label[]">
        <label class="form-check-label">enhancement</label>
      </div>
    
    </div>

    <div class="mb-3 mt-3">
      <label class="form-label">Categories</label><br>
      <div class="form-check-inline">
        <input type="checkbox" class="form-check-input" value="Uncategorized"  name="categories[]">
        <label class="form-check-inline" for="check1">Uncategorized</label>
    
        <input type="checkbox" class="form-check-input" value="Billing/Payments" name="categories[]">
        <label class="form-check-inline" >Billing/Payments</label>

        <input type="checkbox" class="form-check-input" value="Technical question" name="categories[]">
        <label class="form-check-label">Technical question</label>
        
      </div>
    
    </div>
  
    <div class="mb-3">
      <label for="description" class="form-label">Priority:</label>
      <select class="form-select" name="priority" required>
        <option value="low">Low</option>
        <option value="medium">Medium</option>
        <option value="high">High</option>
      </select>
      <div class="invalid-feedback">Please select your ticket's priority.</div>

    </div>

    <div class="mb-3">
      <input type="file" name="file" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</x-app>


