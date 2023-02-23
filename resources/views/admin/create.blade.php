<x-layout>
  <div class="main-panel">        
  <div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Register Agents</h4>
          <p class="card-description">
            Agent details
          </p>
          <form class="forms-sample" action="/admin" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleSelectGender">Title</label>
              <select name="title" class="form-control" id="exampleSelectGender">
                <option>Mr</option>
                <option>Mrs</option>
                <option>Miss</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
            </div>     
            <div class="form-group">
              <label for="exampleInputEmail3">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
            </div>

            <div class="form-group">
              <label for="exampleSelectGender">Assign role</label>
                <select name="role" class="form-control" id="exampleSelectGender">
                  <option value="user">Regular user</option>
                  <option value="agent">Agent</option>
                  <option value="admin">Admin</option>
                </select>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Location</label>
              <input type="text" name="location" class="form-control" id="exampleInputCity1" placeholder="Location">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
</div>
</div>
</div>
</x-layout>