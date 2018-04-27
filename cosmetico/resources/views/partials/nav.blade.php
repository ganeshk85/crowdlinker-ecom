<a href="#" class="" id="menu-toggle"><i class="fa fa-bars fa-5x"></i></a>
<header>
    <nav class="navbar" id="main-nav-bar">
        <div class="container">			
    		<div class="row">
    	        <div class="main-menu-container">
    	            <div class="col-md-4 col-sm-3 col-xs-3 hidden-sm hidden-xs">
    	                <ul class="nav navbar-nav" id="left_nav">
                            <li><a href="{{ url('/checkout') }}" class="btn-flat" id="nav-bar-Login">Check out</a></li>
                            <li><a href="{{ url('/login') }}" class="btn-flat">Log in</a></li>
                            <li><a href="{{ url('/register') }}" class="btn-flat">Register</a></li>
                            <li><a href="{{ url('/contact') }}" class="btn-flat">Contact</a></li>
                        </ul>    
    	            </div>
    	            
                    <div class="navbar-header col-md-4 col-sm-8 col-xs-9">
        				<a id="logo" href="">
        					<img class="default-logo" alt="Cosmetico" src="images/cosmetico_logo.png" /><span style="font-weight: bold;">Cosmeti</span>co
        				</a>
        			</div>
        			
        			<div class="col-md-4 col-sm-4 col-xs-3 no-gutter">
    			        <ul class="nav navbar-nav navbar-right" id="right_nav">
                            <li><a href="{{ url('/wishlist') }}" class="btn-flat">My wishlist ( 0 )</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle btn-flat" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    USD <span class="caret"></span></a>
                                <ul class="dropdown-menu" id="dropdwon">
                                    <li><a href="#">CAD</a></li>
                                    <li><a href="#">INR</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/cart') }}">
                                <div class="shopping_cart_container">
                                    <span class="shopping_cart"></span>
                                    <span class="shopping_badge">0</span>
                                <span class="shopping_cart_total_price">$0.00</span>
                                </div>
                                </a>
                            </li>
                        </ul>
    			    </div>
	            </div>
    	    </div>
        </div>
    </nav>
    <hr style="margin-bottom:0;margin-top: 10px;border-color: #e1e4d9;"/>
    <nav class="navbar hidden-xs" id="sub-nav-bar">
        <div class="container">			
    		<div class="row">
    		    <div class="collapse navbar-collapse">
    		        <ul class="nav navbar-nav">
    		            <li class="active"><a href="{{ url('/login') }}" class="btn-flat">Face</a></li>
    		            <li><a href="{{ url('/login') }}" class="btn-flat">Body</a></li>
    		            <li><a href="{{ url('/login') }}" class="btn-flat">Make up</a></li>
    		            <li><a href="{{ url('/login') }}" class="btn-flat">Hairs</a></li>
    		            <li><a href="{{ url('/login') }}" class="btn-flat">Perfumes</a></li>
    		            <li><a href="{{ url('/login') }}" class="btn-flat">Gifts</a></li>
    		            <li><a href="{{ url('/login') }}" class="btn-flat">Brands</a></li>
    		            <li><a href="{{ url('/login') }}" class="btn-flat">Must Have</a></li>
		            </ul>
	                <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control search" placeholder="Type and hit enter">
                        </div>
                    </form>
		        </div>
		    </div>
	    </div>
    </nav>
    <hr style="margin-top:0;"/>
</header>
