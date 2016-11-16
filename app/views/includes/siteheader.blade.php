<header id="header">
			<div class="container-center cf">
				<div class="logo">
					<a href="{{URL::to('/')}}"><img src="{{ asset('img/logo.png') }}"  alt="Lixnet" width="120"/></a>			
				</div><!-- end logo -->
				
				
				<nav id="main-navigation" class="navigation cf ">
					<ul>
						


                        <!-- <li>
                            <a  href="{{ URL::to('deals')}}" style="color:blue">Deals<span>Partner deals </span></a>
                            
                        </li> -->

                       <!--  <li>
                            <a  href="{{ URL::to('resources')}}" style="color:blue">Resources<span>Partner resources </span></a>
                            
                        </li>  --> 



                        <li>
                            <a  href="{{URL::to('users/logout')}}" style="color:blue">Sign Out<span>{{ Confide::user()->username}} Logged in</span></a>
                        </li>  
						

						
					</ul>
				</nav>
			</div><!-- end container-center -->
		</header>