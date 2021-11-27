  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/../images/logo-dark.png')}}" alt="">
						  <h3><b>SK</b> Soft</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		    <li>
          <a href="{{url('/dashboard')}}">
            <i data-feather="pie-chart"></i>
			      <span>Dashboard</span>
          </a>
        </li>  
        <li>
          <a href="{{url('/menu/view')}}">
            <i data-feather="menu"></i>
			      <span>Menu</span>
          </a>
        </li> 
       
      </ul>
    </section>
	
	
  </aside>