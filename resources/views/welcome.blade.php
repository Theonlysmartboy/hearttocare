@extends('layouts.front_layout.design')
@section('content')
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 16, 2013!</div>
				<div class="container_12">
					<div class="grid_8">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="{{asset('images/uploads/DSC_0575.jpg')}}" alt="">
									<div class="flex-caption">
										<p>Care</p>
									</div>
								</li>
								<li>
									<img src="{{asset('images/uploads/DSC_0498.jpg')}}" alt="">
									<div class="flex-caption c2">
										<p>Save</p>
									</div>
								</li>
								<li>
									<img src="{{asset('images/front/page1_img2.jpg')}}" alt="">
									<div class="flex-caption">
										<p>Help</p>
									</div>
								</li>
							</ul>
						</div>
						<span id="responsiveFlag"></span>
					</div>
					<div class="grid_4">
						<a href="{{route('volunteer')}}" class="donate">Donate</a>
						<div class="text1">You can change the life of a child who has no hope</div>
						<p>All we need is your support and the life of some needy child will be changed.</p>
						We always welcome your donations, volunteer services and any form of support accorded to us in order to change the life of a child.
					</div>
					<div class="clear"></div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">our Mission</div>
							<div class="pad">
								To share the love of Christ and transform the living standard of orphaned children, poor and
venerable families in Kenya<div class="alright"><a href="{{route('about')}}" class="btn">Read More</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">Our vision</div>
							<div class="pad">
								to love, work and pray together to create a place that the poor, abandoned and orphaned
children can call home.
<div class="alright"><a href="{{route('about')}}" class="btn">Read More</a></div>
							</div>
						</div>
					</div>

					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">Core Values</div>
							<div class="pad">
								<ol>
									<li>EDUCATION </li>
									<li>HEALTH AND FEEDING</li>
									<li>SHELTER</li>
									<li>SPIRITUAL DEVELOPMENT</li>
								</ol>
								<div class="alright"><a href="{{route('about')}}" class="btn">Read More</a></div></div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_12">
						<h2>You can help Them</h2>
						<div id="owl">
							<div class="item">
								<a href="#"><img src="{{asset('images/uploads/DSC_0499.jpg')}}" alt=""> <br>
								</a>
							</div>
							<div class="item it1">
								<a href="#"><img src="{{asset('images/uploads/DSC_0570.jpg')}}" alt=""> <br>
								</a>
							</div>
							<div class="item it2">
								<a href="#"><img src="{{asset('images/uploads/DSC_0572.jpg')}}" alt=""> <br>
								</a>
							</div>
							<div class="item it3">
								<a href="#"><img src="{{asset('images/uploads/DSC_0606.jpg')}}" alt="">  <br>
								</a>
							</div>
							<div class="item">
								<a href="#"><img src="{{asset('images/uploads/DSC_0574.jpg')}}" alt=""> <br>
								</a>
							</div>
							<div class="item it1">
								<a href="#"><img src="{{asset('images/uploads/DSC_0576.jpg')}}" alt=""> <br>
								</a>
							</div>
							<div class="item it2">
								<a href="#"><img src="{{asset('images/uploads/DSC_0670.jpg')}}" alt=""> <br>
								</a>
							</div>
							<div class="item it3">
								<a href="#"><img src="{{asset('images/uploads/DSC_0582.jpg')}}" alt="">  <br>
								</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<h3 class="nowrap mb0">Success stories</h3>
						<time class="st1" datetime="2020-01-01">--/--/---</time>

						<div class="alright"><a href="{{route('news')}}" class="btn">Read More</a></div>
					</div>
					<div class="grid_7 prefix_1">
						<h3>About Us</h3>
						<img src="{{asset('images/uploads/about/IMG-20200322-WA0005.jpg')}}" alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<p>Heart to care was founded in 1999 and got registered as a legal entity with the department
of social services in Nyakach District, Kisumu County.</p>
							<p>Heart to care group wishes to respond to the impact of HIV/AIDS in the community by
mobilizing local and external resources to meet the needs and capacities of orphans and
vulnerable children.</p>
						</div>
						<div class="clear"></div>
						<div class="alright"><a href="{{route('about')}}" class="btn">Read More</a></div>
					</div>
				</div>
			</div>
@endsection
