<x-layout>
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">Welcome {{ auth()->user()->name }}</h3>
              <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
            </div>
            <div class="col-12 col-xl-4">
             <div class="justify-content-end d-flex">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                 <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                  <a class="dropdown-item" href="#">January - March</a>
                  <a class="dropdown-item" href="#">March - June</a>
                  <a class="dropdown-item" href="#">June - August</a>
                  <a class="dropdown-item" href="#">August - November</a>
                </div>
              </div>
             </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg">
            <div class="card-people mt-auto">
              <img src="images/dashboard/people.svg" alt="people">
              <div class="weather-info">
                <div class="d-flex">
                  <div>
                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                  </div>
                  <div class="ml-2">
                    <h4 class="location font-weight-normal">Bangalore</h4>
                    <h6 class="font-weight-normal">India</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin transparent">
          <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body">
                  <p class="mb-4">Today’s tickets</p>
                  <p class="fs-30 mb-2">{{ $tickets->count() }}</p>
                  <p>10.00% (30 days)</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-dark-blue">
                <div class="card-body">
                  <p class="mb-4">Total tickets</p>
                  <p class="fs-30 mb-2">{{ $tickets->count() }}</p>
                  <p>22.00% (30 days)</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-blue">
                <div class="card-body">
                  <p class="mb-4">Unassigned tickets</p>
                  <p class="fs-30 mb-2">{{ \App\Models\Ticket::where(['agent_id' => ''])->count() }}
                  </p>
                  <p>2.00% (30 days)</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
              <div class="card card-light-danger">
                <div class="card-body">
                  <p class="mb-4">Unreseolved tickets</p><!-- Resolved-->
                  <p class="fs-30 mb-2">{{ \App\Models\Ticket::where(['status' => ''])->orWhere(['status' => 'open'])->count() }}</p>
                  <p>0.22% (30 days)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
     
      <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title mb-0">Agent tickets</p>
              <div class="table-responsive">
                <table class="table table-striped table-borderless">
                  <thead>
                    <tr>
                      <th>Agent Name</th>
                      <th>Tickets assigned</th>
                      <th>Tickets resoved</th><!-- Refresh instantly like using ajax -->
                      <th>Last login</th>
                    </tr>  
                  </thead>
                  <tbody>
                    @forelse ($agents as $agent)
                    <tr>
                      <td><a href="">{{ $agent->name }}</a></td>
                      <td class="font-weight-bold">433232</td>
                      <td>cdss</td>
                      <td class="font-weight-medium"><div class="badge badge-success">dsdsdss</div></td>
                    </tr>  
                    @empty
                        <p class="text-center">Not tickets yet.</p>
                    @endforelse
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">To Do Lists</h4>
              <div class="list-wrapper pt-2">
                <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                  <li>
                    <div class="form-check form-check-flat">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Meeting with Urban Team
                      </label>
                    </div>
                    <i class="remove ti-close"></i>
                  </li>
                
                </ul>
                <div class="add-items d-flex mb-0 mt-2">
                  <input type="text" class="form-control todo-list-input"  placeholder="Add new task">
                  <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="icon-circle-plus"></i></button>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
              <p class="card-title mb-0">Clients</p>
              <div class="table-responsive">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th class="pl-0  pb-2 border-bottom">Places</th>
                      <th class="border-bottom pb-2">Orders</th>
                      <th class="border-bottom pb-2">Users</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="pl-0 pb-0">cscsd</td>
                      <td class="pb-0"><p class="mb-0"><span class="font-weight-bold mr-2">Odi</span>(1.32%)</p></td>
                      <td class="pb-0">14</td>
                    </tr> 
                        
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Agent performance</p><!-- Meausure who closes mot tickets -->
                  <div class="charts-data">
                    <div class="mt-3">
                      <p class="mb-0">Mathambi Mosawino</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="progress progress-md flex-grow-1 mr-4">
                          <div class="progress-bar bg-inf0" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0">5k</p>
                      </div>
                    </div>
                    <div class="mt-3">
                      <p class="mb-0">James Bond</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="progress progress-md flex-grow-1 mr-4">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0">32</p>
                      </div>
                    </div>
                    <div class="mt-3">
                      <p class="mb-0">IBM Agent</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="progress progress-md flex-grow-1 mr-4">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0">232</p>
                      </div>
                    </div>
                    <div class="mt-3">
                      <p class="mb-0"></p>Unix Agent
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="progress progress-md flex-grow-1 mr-4">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0">67</p>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
            <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
              <div class="card data-icon-card-primary">
                <div class="card-body">
                  <p class="card-title text-white">Number tickets</p>                      
                  <div class="row">
                    <div class="col-8 text-white">
                      <h3>34040</h3>
                      <p class="text-white font-weight-500 mb-0">The total number of sessions within the date range.It is calculated as the sum . </p>
                    </div>
                    <div class="col-4 background-icon">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Log</p>
              <ul class="icon-data-list">
               
                <li>
                  <div class="d-flex">
                    <img src="images/faces/face4.jpg" alt="user">
                    <div>
                      <p class="text-info mb-1">George Morrison</p>
                      <p class="mb-0">Sales dashboard have been created</p>
                      <small>8:50 am</small>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Advanced Table</p>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="example" class="display expandable-table" style="width:100%">
                      <thead>
                        <tr>
                          <th class="">Ticket Id#</th>
                          <th>User Id</th>
                          <th>Agent Id</th>
                          <th>Category</th>
                          <th>Label</th>
                          <th>Status</th>
                          <th>Created at</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($tickets as $ticket)
                        <form action="/admin/{{ $ticket->ticket_id }}" method="POST">                         
                          @csrf
                          @method('PUT')
                          <tr class="odd selected">
                            <td class=" select-checkbox"><a href="">{{ $ticket->ticket_id }}</a></td>
                            <td class="sorting_1">{{ $ticket->user_id }}</td>
                            <td>
                              
                              @forelse ($agents as $agent)
                              <select class="form-control" name="agent">
                                <option value="{{ $agent->id }}">{{ $agent->id }}--{{ $agent->name }}</option>
                              </select>
                              @empty
                                  No agents in the DB
                              @endforelse
                             
                            </td>
                            <td>{{ $ticket->categories }}</td>
                            <td>{{ $ticket->label}}</td>
                            <td>{{ $ticket->status }}</td>
                            <td>{{ $ticket->created_at }}</td>
                            <td><button>Assign</button></td>
                          </tr>
                        </form>                             
                        @empty
                            <p class="text-center">No tickets.</p>
                        @endforelse  
                      </tbody>
                  </table>
                  </div>
                </div>
              </div>
              </div>
            </div>    
          </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
      </div>
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
      </div>
    </footer> 
    <!-- partial -->
  </div>
</x-layout>